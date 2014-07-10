<?php

namespace OCIM\FormationsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OCIM\FormationsBundle\Entity\Formation;
use OCIM\FormationsBundle\Form\FormationType;

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

        $entities = $em->getRepository('OCIMFormationsBundle:Formation')->findAll();

        return $this->render('OCIMFormationsBundle:Formation:index.html.twig', array(
            'entities' => $entities,
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
				foreach($entity->getFormules() as $formule){
					$formule->addFormation($entity);
				}
			$em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('formation_show', array('id' => $entity->getId())));
        }

        return $this->render('OCIMFormationsBundle:Formation:new.html.twig', array(
            'entity' => $entity,
            'edit_form'   => $form->createView(),
        ));
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

        $form->add('submit', 'submit', array('label' => 'Créer la formation', 'attr' => array('class'=>'btn')));

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
		
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formation entity.');
        }
		
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OCIMFormationsBundle:Formation:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'formules' => $entity->getFormules(),
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
			'attr'	 => array('class' => 'forms'),
        ));

        $form->add('submit', 'submit', array('label' => 'Mettre à jour', 'attr' => array('class'=>'btn')));

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
		
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
			
			$nouvellesformules = $entity->getFormules();
			
			foreach($em->getRepository('OCIMFormationsBundle:Formule')->findAll() as $formule){
				$formule->removeFormation($entity);
			}
			
			foreach($nouvellesformules as $formuleform){
				$formuleform->addFormation($entity);
			}
			
			$em->persist($entity);
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
		$em = $this->getDoctrine()->getManager();
		$entity = $em->getRepository('OCIMFormationsBundle:Formation')->find($id);

		if (!$entity) {
			throw $this->createNotFoundException('Unable to find Formation entity.');
		}
		else{
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
            ->add('submit', 'submit', array('label' => 'Supprimer', 'attr' => array('class'=>'btn oi btn-red', 'data-glyph'=>'trash')))
            ->getForm()
        ;
    }
}
