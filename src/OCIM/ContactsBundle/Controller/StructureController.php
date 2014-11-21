<?php

namespace OCIM\ContactsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OCIM\ContactsBundle\Entity\Structure;
use OCIM\ContactsBundle\Entity\TypeStructure;
use OCIM\ContactsBundle\Form\StructureType;

/**
 * Structure controller.
 *
 */
class StructureController extends Controller
{

    /**
     * Lists all Structure entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OCIMContactsBundle:Structure')->findAll();

        return $this->render('OCIMContactsBundle:Structure:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Structure entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Structure();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('structures_show', array('id' => $entity->getId())));
        }

        return $this->render('OCIMContactsBundle:Structure:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
	
		
	public function ajoutTypeStructureAction(Request $request){
		
		
		if($request->isXmlHttpRequest()){
			
			$em = $this->getDoctrine()->getManager();
			
			$data = json_decode($request->getContent());
			
			$s = new TypeStructure();
			
			if( !empty($data->structure) && isset($data->structure) ){
				
				$s->setType( $data->structure);
				$em->persist($s);
				
				$em->flush();
			}
			
			return new Response( $s->getId(), Response::HTTP_OK);
		}
		
	}
	
    /**
     * Creates a form to create a Structure entity.
     *
     * @param Structure $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Structure $entity)
    {
        $form = $this->createForm(new StructureType(), $entity, array(
            'action' => $this->generateUrl('structures_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Structure entity.
     *
     */
    public function newAction()
    {
        $entity = new Structure();
        $form   = $this->createCreateForm($entity);

        return $this->render('OCIMContactsBundle:Structure:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Structure entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCIMContactsBundle:Structure')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Structure entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OCIMContactsBundle:Structure:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Structure entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCIMContactsBundle:Structure')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Structure entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OCIMContactsBundle:Structure:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Structure entity.
    *
    * @param Structure $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Structure $entity)
    {
        $form = $this->createForm(new StructureType(), $entity, array(
            'action' => $this->generateUrl('structures_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Structure entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCIMContactsBundle:Structure')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Structure entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('structures_edit', array('id' => $id)));
        }

        return $this->render('OCIMContactsBundle:Structure:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Structure entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OCIMContactsBundle:Structure')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Structure entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('structures'));
    }

    /**
     * Creates a form to delete a Structure entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('structures_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
