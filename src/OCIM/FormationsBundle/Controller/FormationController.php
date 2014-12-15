<?php

namespace OCIM\FormationsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OCIM\FormationsBundle\Entity\Formation;
use OCIM\FormationsBundle\Entity\TypeFormation;
use OCIM\FormationsBundle\Entity\Formule;
use OCIM\FormationsBundle\Entity\formationFormule;
use OCIM\FormationsBundle\Form\FormationType;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Query\ResultSetMapping;

/**
 * Formation controller.
 *
 */
class FormationController extends Controller
{

    /**
     * Lists all Formation entities.
     *
     */
    public function indexAction()
    {
      $em = $this->getDoctrine()->getManager();

      $qb = $em->createQueryBuilder('f')
        ->select('f, YEAR(f.dateDebut) AS annee')
        ->from('OCIMFormationsBundle:Formation', 'f')
        ->addOrderBy('annee', 'DESC')
        ->addOrderBy('f.dateDebut', 'ASC');

      $ac =  new ArrayCollection($qb->getQuery()->getResult());


      $qb = $em->createQueryBuilder('f')
        ->select('MIN(f.dateDebut), MAX(f.dateFin)')
        ->from('OCIMFormationsBundle:Formation', 'f');

      $datesMinMax = $qb->getQuery()->getResult();
      //exit(\Doctrine\Common\Util\Debug::dump($datesMinMax[0]));

      $formations = new ArrayCollection();
      foreach($ac as $formation){
        $formations->add($formation[0]);
      }

      // $formations = $em->getRepository('OCIMFormationsBundle:Formation')->findBy(array(), array('YEAR(dateDebut)' => 'DESC'));
	    $types = $em->getRepository('OCIMFormationsBundle:TypeFormation')->findAll();

  		foreach($formations as $formation){
  			$formation->_count = $em->getRepository('OCIMFormationsBundle:Inscription')->countInscriptionsByFormation($formation->getId());
  			$formation->_nbJours = $formation->getDateDebut()->diff($formation->getDateFin(), true)->format('%a') + 1;
  		}

  		return $this->render('OCIMFormationsBundle:Formation:index.html.twig', array(
  			'formations' => $formations,
  			'types' => $types,
        'datesminmax' => $datesMinMax[0]
  		));
    }
    /**
     * Creates a new Formation entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Formation();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('formation_show', array('id' => $entity->getId())));
        }

        return $this->render('OCIMFormationsBundle:Formation:new.html.twig', array(
            'entity' => $entity,
            'edit_form'   => $form->createView(),
        ));
    }

    public function ajoutTypeAction(Request $request){
      if($request->isXmlHttpRequest()){

        $em = $this->getDoctrine()->getManager();
        $type = new TypeFormation();

        $str = json_decode($request->getContent());
        $str = ucfirst($str);

        if(is_string($str)){

          $type->setType($str);

          $em->persist($type);
          $em->flush();

          if($type->getId()){
            return new Response( $type->getId(), Response::HTTP_OK);
          }
          else{
            return new Response('Problème durant lenregistrement, Rechargez la page.', Response::HTTP_FAIL);
          }
        }

      }
    }

    /**
     * Creates a form to create a Formation entity.
     *
     * @param Formation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Formation $entity)
    {
        $form = $this->createForm(new FormationType(), $entity, array(
            'action' => $this->generateUrl('formation_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer la formation', 'attr' => array('class'=>'btn btn-green')));

        return $form;
    }

    /**
     * Displays a form to create a new Formation entity.
     *
     */
    public function newAction()
    {
        $entity = new Formation();
        $form   = $this->createCreateForm($entity);

        return $this->render('OCIMFormationsBundle:Formation:new.html.twig', array(
            'entity' => $entity,
            'edit_form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Formation entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCIMFormationsBundle:Formation')->find($id);
		$entity->_count = $em->getRepository('OCIMFormationsBundle:Inscription')->countInscriptionsByFormation($id);
		$inscriptions = $em->getRepository('OCIMFormationsBundle:Inscription')->findAllByFormation($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

		// Stats des inscriptions
		$statsInscriptions = array();
		foreach($inscriptions as $inscription){

			if( !isset($statsInscriptions[$inscription->getDateInscription()->format('d-m-Y')])){
				$statsInscriptions[$inscription->getDateInscription()->format('d-m-Y')] = 1 ;
			}
			else{
				$statsInscriptions[$inscription->getDateInscription()->format('d-m-Y')] += 1 ;
			}
			ksort($statsInscriptions);
		}

        return $this->render('OCIMFormationsBundle:Formation:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
			'formules' => $entity->getFormules(),
			'inscriptions' => $statsInscriptions
        ));
    }

    /**
     * Displays a form to edit an existing Formation entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCIMFormationsBundle:Formation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formation entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OCIMFormationsBundle:Formation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }


    /**
    * Creates a form to edit a Formation entity.
    *
    * @param Formation $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Formation $entity)
    {
        $form = $this->createForm(new FormationType(), $entity, array(
            'action' => $this->generateUrl('formation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => ' Enregistrer', 'attr' => array('class'=>'btn btn-green')));

        return $form;
    }

    /**
     * Edits an existing Formation entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCIMFormationsBundle:Formation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formation entity.');
        }

		$ancienncesFF = new ArrayCollection();
		foreach ($entity->getFormationFormule() as $ff) {
			$ancienncesFF->add($ff);
		}

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

			foreach ($ancienncesFF as $ff) {
				if ($entity->getFormationFormule()->contains($ff) == false) {
					$em->remove($ff);
				}
			}
			$em->flush();
            return $this->redirect($this->generateUrl('formation_edit', array('id' => $id)));
        }

        return $this->render('OCIMFormationsBundle:Formation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Formation entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OCIMFormationsBundle:Formation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Formation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('formation'));
    }

    /**
     * Creates a form to delete a Formation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('formation_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer', 'attr'=> array('class'=>'btn btn-red')))
            ->getForm()
        ;
    }
}
