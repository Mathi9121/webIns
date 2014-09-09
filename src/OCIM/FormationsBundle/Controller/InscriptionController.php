<?php

namespace OCIM\FormationsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OCIM\FormationsBundle\Entity\Inscription;
use OCIM\FormationsBundle\Form\InscriptionType;

/**
 * Inscription controller.
 *
 */
class InscriptionController extends Controller
{

    /**
     * liste toutes les entités en fonction d'une formation (id passé en paramètre)
     *
     */
    public function indexAction($idformation)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OCIMFormationsBundle:Inscription')->findAllByFormation($idformation);
		$formation = $em->getRepository('OCIMFormationsBundle:Formation')->find($idformation);
		
        return $this->render('OCIMFormationsBundle:Inscription:index.html.twig', array(
            'entities' => $entities,
			'formation' => $formation,
        ));
    }
	
	
    /**
     * Creates a new Inscription entity.
     *
     */
    public function createAction(Request $request, $idformation)
    {
        $entity = new Inscription();
        $form = $this->createCreateForm($entity, $idformation);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
			
			$type = $em->getRepository('OCIMContactsBundle:TypePersonne')->findOneByType("Stagiaire");
			
			$entity->getPersonne()->setType($type);
			$entity->addPersonne($entity->getPersonne());
			
            $em->persist($entity);

            $em->flush();

            return $this->redirect($this->generateUrl('inscription_show', array('id' => $entity->getId(), 'idformation'=> $idformation)));
        }

        return $this->render('OCIMFormationsBundle:Inscription:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
			'idformation' => $idformation,
        ));
    }

    /**
     * Creates a form to create a Inscription entity.
     *
     * @param Inscription $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Inscription $entity, $idformation)
    {
        $form = $this->createForm(new InscriptionType($idformation), $entity, array(
            'action' => $this->generateUrl('inscription_create', array('idformation'=>$idformation)),
            'method' => 'POST',
			'em' => $this->getDoctrine()->getManager(),
        ));

        $form->add('submit', 'submit', array('label' => 'Ajouter le stagiaire', 'attr'=> array('class' => 'btn btn-green')));

        return $form;
    }

    /**
     * Displays a form to create a new Inscription entity.
     *
     */
    public function newAction($idformation)
    {
        $entity = new Inscription();
        $form   = $this->createCreateForm($entity, $idformation);

        return $this->render('OCIMFormationsBundle:Inscription:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
			'idformation' => $idformation,
        ));
    }

    /**
     * Finds and displays a Inscription entity.
     *
     */
    public function showAction($id, $idformation)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCIMFormationsBundle:Inscription')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Inscription entity.');
        }

        $deleteForm = $this->createDeleteForm($id, $idformation);

        return $this->render('OCIMFormationsBundle:Inscription:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
			'idformation' => $idformation,
        ));
    }

    /**
     * Displays a form to edit an existing Inscription entity.
     *
     */
    public function editAction($id, $idformation)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCIMFormationsBundle:Inscription')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Inscription entity.');
        }
		
		$entity->setPersonne($entity->getPersonnes()[0]);
		
        $editForm = $this->createEditForm($entity, $idformation);
        $deleteForm = $this->createDeleteForm($id, $idformation);

        return $this->render('OCIMFormationsBundle:Inscription:edit.html.twig', array(
            'entity'    	=> $entity,
            'form' 			=> $editForm->createView(),
            'delete_form' 	=> $deleteForm->createView(),
			'idformation' 	=> $idformation,
			//'personne'		=> \Doctrine\Common\Util\Debug::dump($personne),
        ));
    }

    /**
    * Creates a form to edit a Inscription entity.
    *
    * @param Inscription $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Inscription $entity, $idformation)
    {
        $form = $this->createForm(new InscriptionType($idformation), $entity, array(
            'action' => $this->generateUrl('inscription_update', array('id' => $entity->getId(), 'idformation'=> $idformation)),
            'method' => 'PUT',
			'em' => $this->getDoctrine()->getManager(),
        ));

        $form->add('submit', 'submit', array('label' => 'Enregistrer', 'attr'=> array('class'=> 'btn btn-green')));

        return $form;
    }
    /**
     * Edits an existing Inscription entity.
     *
     */
    public function updateAction(Request $request, $id, $idformation)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCIMFormationsBundle:Inscription')->find($id);
        
		if (!$entity) {
            throw $this->createNotFoundException('Unable to find Inscription entity.');
        }

        $deleteForm = $this->createDeleteForm($id, $idformation);
        $editForm = $this->createEditForm($entity, $idformation);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
			
            $em->flush();

            return $this->redirect($this->generateUrl('inscription_edit', array('id' => $id, 'idformation'=>$idformation)));
        }

        return $this->render('OCIMFormationsBundle:Inscription:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'idformation' => $idformation,
        ));
    }
    /**
     * Deletes a Inscription entity.
     *
     */
    public function deleteAction(Request $request, $id, $idformation)
    {
        $form = $this->createDeleteForm($id, $idformation);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OCIMFormationsBundle:Inscription')->find($id);
			
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Inscription entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('inscription', array('id'=> $idformation)));
    }

    /**
     * Creates a form to delete a Inscription entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id, $idformation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('inscription_delete', array('id' => $id, 'idformation'=> $idformation)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => ' Supprimer', 'attr'=> array('class'=>'btn btn-red') ))
            ->getForm()
        ;
    }
}
