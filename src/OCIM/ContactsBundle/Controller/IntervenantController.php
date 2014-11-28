<?php

namespace OCIM\ContactsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OCIM\ContactsBundle\Entity\Intervenant;
use OCIM\ContactsBundle\Form\IntervenantType;

/**
 * Intervenant controller.
 *
 */
class IntervenantController extends Controller
{

    /**
     * Lists all Intervenant entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OCIMContactsBundle:Intervenant')->findAll();

        return $this->render('OCIMContactsBundle:Intervenant:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Intervenant entity.
     *
     */
    public function createAction(Request $request, $idformation)
    {
        $entity = new Intervenant();
        $form = $this->createCreateForm($entity, $idformation);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
			$em->getRepository('OCIMFormationsBundle:Formation')->find($idformation)->addIntervenant($entity);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('intervenants_show', array('id' => $entity->getId(), 'idformation' => $idformation)));
        }

        return $this->render('OCIMContactsBundle:Intervenant:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
			'idformation' => $idformation
        ));
    }

    /**
     * Creates a form to create a Intervenant entity.
     *
     * @param Intervenant $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Intervenant $entity, $idformation)
    {
        $form = $this->createForm(new IntervenantType(), $entity, array(
            'action' => $this->generateUrl('intervenants_create', array('idformation'=> $idformation)),
            'method' => 'POST',
			'em' => $this->getDoctrine()->getManager(),
        ));

        $form->add('submit', 'submit', array('label' => 'Enregistrer'));

        return $form;
    }

    /**
     * Displays a form to create a new Intervenant entity.
     *
     */
    public function newAction($idformation)
    {
        $entity = new Intervenant();
        $form   = $this->createCreateForm($entity,$idformation);

        return $this->render('OCIMContactsBundle:Intervenant:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
			'idformation' => $idformation
        ));
    }

    /**
     * Finds and displays a Intervenant entity.
     *
     */
    public function showAction($id, $idformation)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCIMContactsBundle:Intervenant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Intervenant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OCIMContactsBundle:Intervenant:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
			'idformation' => $idformation
        ));
    }

    /**
     * Displays a form to edit an existing Intervenant entity.
     *
     */
    public function editAction($id, $idformation)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCIMContactsBundle:Intervenant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Intervenant entity.');
        }

        $editForm = $this->createEditForm($entity, $idformation);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OCIMContactsBundle:Intervenant:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'idformation' => $idformation
        ));
    }

    /**
    * Creates a form to edit a Intervenant entity.
    *
    * @param Intervenant $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Intervenant $entity, $idformation)
    {
        $form = $this->createForm(new IntervenantType(), $entity, array(
            'action' => $this->generateUrl('intervenants_update', array('id' => $entity->getId(), 'idformation' => $idformation)),
            'method' => 'PUT',
			'em' => $this->getDoctrine()->getManager()
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Intervenant entity.
     *
     */
    public function updateAction(Request $request, $id, $idformation)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCIMContactsBundle:Intervenant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Intervenant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity, $idformation);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('intervenants_edit', array('id' => $id, 'idformation' => $idformation)));
        }

        return $this->render('OCIMContactsBundle:Intervenant:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Intervenant entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OCIMContactsBundle:Intervenant')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Intervenant entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('intervenants'));
    }

    /**
     * Creates a form to delete a Intervenant entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('intervenants_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
