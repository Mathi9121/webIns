<?php

namespace OCIM\FormationsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OCIM\FormationsBundle\Entity\Formule;
use OCIM\FormationsBundle\Form\FormuleType;

/**
 * Formule controller.
 *
 */
class FormuleController extends Controller
{

    /**
     * Lists all Formule entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OCIMFormationsBundle:Formule')->findAll();
		
		foreach($entities as $entity){
			//nombre d'inscriptions liées à la formule
			$qb = $em->createQueryBuilder();
			$qb->select('count(i.id)');
			$qb->from('OCIMFormationsBundle:Inscription','i');
			$qb->join('OCIMFormationsBundle:formationFormule', 'f', 'WITH', 'f.id = i.formationformule');
			$qb->where('f.formule = :id');
			$qb->setParameter('id', $entity->getId());
			$entity->_countInscriptions = $qb->getQuery()->getSingleResult();
			
			// nombre de formations liées à la formule
			$qb = $em->createQueryBuilder();
			$qb->select('count(ff.id)');
			$qb->from('OCIMFormationsBundle:formationFormule','ff');
			$qb->where('ff.formule = :id');
			$qb->setParameter('id', $entity->getId());
			$entity->_countFormations = $qb->getQuery()->getSingleResult();
		}

        return $this->render('OCIMFormationsBundle:Formule:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Formule entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Formule();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('formule_show', array('id' => $entity->getId())));
        }

        return $this->render('OCIMFormationsBundle:Formule:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Formule entity.
     *
     * @param Formule $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Formule $entity)
    {
        $form = $this->createForm(new FormuleType(), $entity, array(
            'action' => $this->generateUrl('formule_create'),
            'method' => 'POST',
			'attr' => array('class' => 'forms')
        ));

        $form->add('submit', 'submit', array('label' => 'Créer', 'attr'=> array('class'=> 'btn btn-green')));

        return $form;
    }

    /**
     * Displays a form to create a new Formule entity.
     *
     */
    public function newAction()
    {
        $entity = new Formule();
        $form   = $this->createCreateForm($entity);

        return $this->render('OCIMFormationsBundle:Formule:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Formule entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCIMFormationsBundle:Formule')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formule entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OCIMFormationsBundle:Formule:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Formule entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCIMFormationsBundle:Formule')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formule entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OCIMFormationsBundle:Formule:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Formule entity.
    *
    * @param Formule $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Formule $entity)
    {
        $form = $this->createForm(new FormuleType(), $entity, array(
            'action' => $this->generateUrl('formule_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Enregistrer', 'attr'=> array('class'=>'btn btn-green')));

        return $form;
    }
    /**
     * Edits an existing Formule entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCIMFormationsBundle:Formule')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formule entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('formule_edit', array('id' => $id)));
        }

        return $this->render('OCIMFormationsBundle:Formule:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Formule entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OCIMFormationsBundle:Formule')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Formule entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('formule'));
    }

    /**
     * Creates a form to delete a Formule entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('formule_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer', 'attr'=> array('class'=>'btn btn-red')))
            ->getForm()
        ;
    }
}
