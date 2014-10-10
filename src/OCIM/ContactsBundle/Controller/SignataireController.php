<?php

namespace OCIM\ContactsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OCIM\ContactsBundle\Entity\Signataire;
use OCIM\ContactsBundle\Form\SignataireType;

/**
 * Signataire controller.
 *
 */
class SignataireController extends Controller
{

    /**
     * Lists all Signataire entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OCIMContactsBundle:Signataire')->findAll();

        return $this->render('OCIMContactsBundle:Signataire:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Signataire entity.
     *
     */
    public function createAction(Request $request, $idinscription, $idformation)
    {
        $entity = new Signataire();
        $form = $this->createCreateForm($entity, $idinscription, $idformation);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $inscription = $em->getRepository('OCIMFormationsBundle:Inscription')->find($idinscription);
			$inscription->setSignataire($entity);
			$em->persist($entity);
			$structure = $entity->getAdresse()->getStructure();
			$structure->setAdresse($entity->getAdresse());
			$em->persist($structure);
			$em->persist($inscription);
            $em->flush();

            return $this->redirect($this->generateUrl('signataire_show', array('id' => $entity->getId())));
        }

        return $this->render('OCIMContactsBundle:Signataire:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
			'idformation' => $idformation
        ));
    }

    /**
     * Creates a form to create a Signataire entity.
     *
     * @param Signataire $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Signataire $entity, $idinscription, $idformation)
    {
        $form = $this->createForm(new SignataireType(), $entity, array(
            'action' => $this->generateUrl('signataire_create', array('idinscription'=>$idinscription, 'idformation'=> $idformation)),
            'method' => 'POST',
			'em' => $this->getDoctrine()->getManager(),
        ));

        $form->add('submit', 'submit', array('label' => 'Enregistrer'));

        return $form;
    }

    /**
     * Displays a form to create a new Signataire entity.
     *
     */
    public function newAction($idinscription, $idformation)
    {
        $entity = new Signataire();
        $form   = $this->createCreateForm($entity, $idinscription, $idformation);

        return $this->render('OCIMContactsBundle:Signataire:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
			'idformation' => $idformation
        ));
    }

    /**
     * Finds and displays a Signataire entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCIMContactsBundle:Signataire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Signataire entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OCIMContactsBundle:Signataire:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Signataire entity.
     *
     */
    public function editAction($id, $idformation)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCIMContactsBundle:Signataire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Signataire entity.');
        }

        $editForm = $this->createEditForm($entity, $idformation);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OCIMContactsBundle:Signataire:new.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'idformation' => $idformation
        ));
    }

    /**
    * Creates a form to edit a Signataire entity.
    *
    * @param Signataire $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Signataire $entity, $idformation)
    {
        $form = $this->createForm(new SignataireType(), $entity, array(
            'action' => $this->generateUrl('signataire_update', array('id' => $entity->getId(), 'idformation'=>$idformation)),
            'method' => 'PUT',
			'em' => $this->getDoctrine()->getManager(),
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Signataire entity.
     *
     */
    public function updateAction(Request $request, $id, $idformation)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCIMContactsBundle:Signataire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Signataire entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity, $idformation);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('signataire_edit', array('id' => $id, 'idformation'=>$idformation)));
        }

        return $this->render('OCIMContactsBundle:Signataire:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Signataire entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OCIMContactsBundle:Signataire')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Signataire entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('signataire'));
    }

    /**
     * Creates a form to delete a Signataire entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('signataire_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
