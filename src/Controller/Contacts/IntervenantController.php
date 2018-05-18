<?php

namespace App\Controller\Contacts;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Entity\Contacts\Intervenant;
use App\Entity\Contacts\TagStructure;
use App\Entity\Evenements\Evenement;
use App\Form\Contacts\IntervenantType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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
    public function index(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $id = $request->query->get('id');

        $entities = $em->getRepository(Intervenant::class)->findAll();

        return $this->render('Contacts/Intervenant/index.html.twig', array(
            'entities' => $entities,
            'id' => $id,
        ));
    }
    /**
     * Creates a new Intervenant entity.
     *
     */
    public function create(Request $request, $idevenement)
    {
        $entity = new Intervenant();
        $form = $this->createCreateForm($entity, $idevenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            if($idevenement !== 'null'){
			         $em->getRepository(Evenement::class)->find($idevenement)->addIntervenant($entity);
            }
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success','Intervenant ajouté.');

            if($idevenement !== 'null'){
              return $this->redirect($this->generateUrl('inscription', array('id' => $entity->getId(), 'idevenement' => $idevenement)). '#intervenants');
            }
            else {
              return $this->redirect($this->generateUrl('personne'));
            }
        }

        $this->get('session')->getFlashBag()->add('error','Le formulaire contient des erreurs. Enregistrement impossible.');
        return $this->render('Contacts/Intervenant/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
			      'idevenement' => $idevenement,
        ));
    }

    /**
     * Creates a form to create a Intervenant entity.
     *
     * @param Intervenant $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Intervenant $entity, $idevenement)
    {
        $form = $this->createForm(IntervenantType::class, $entity, array(
            'action' => $this->generateUrl('intervenants_create', array('idevenement'=> $idevenement)),
            'method' => 'POST',
			'em' => $this->getDoctrine()->getManager(),
        ));

        $form->add('submit', SubmitType::class, array('label' => 'Enregistrer', 'attr'=>array('class'=> 'btn btn-green btn-save')));

        return $form;
    }

    /**
     * Displays a form to create a new Intervenant entity.
     *
     */
    public function new($idevenement = null)
    {
        $entity = new Intervenant();
        $form = $this->createCreateForm($entity,$idevenement);
        $em = $this->getDoctrine()->getManager();
        $tags = $em->getRepository(TagStructure::class)->findAll();

        return $this->render('Contacts/Intervenant/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
			      'idevenement' => $idevenement,
            'tags' => $tags,
        ));
    }

    /**
     * Finds and displays a Intervenant entity.
     *
     */
    public function show($id, $idevenement)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(Intervenant::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Intervenant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('Contacts/Intervenant/show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
			      'idevenement' => $idevenement
        ));
    }

    /**
     * Displays a form to edit an existing Intervenant entity.
     *
     */
    public function edit($id, $idevenement)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(Intervenant::class)->find($id);
        $tags = $em->getRepository(TagStructure::class)->findAll();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Intervenant entity.');
        }

        $editForm = $this->createEditForm($entity, $idevenement);
        $deleteForm = $this->createDeleteForm($id, $idevenement);

        return $this->render('Contacts/Intervenant/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			      'idevenement' => $idevenement,
            'tags'        => $tags
        ));
    }

    /**
    * Creates a form to edit a Intervenant entity.
    *
    * @param Intervenant $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Intervenant $entity, $idevenement)
    {
        $form = $this->createForm(IntervenantType::class, $entity, array(
            'action' => $this->generateUrl('intervenants_update', array('id' => $entity->getId(), 'idevenement' => $idevenement)),
            'method' => 'PUT',
			'em' => $this->getDoctrine()->getManager()
        ));

        $form->add('submit', SubmitType::class, array('label' => 'Enregistrer', 'attr' => array('class' => 'btn btn-green btn-save')));

        return $form;
    }
    /**
     * Edits an existing Intervenant entity.
     *
     */
    public function update(Request $request, $id, $idevenement)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(Intervenant::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Intervenant entity.');
        }

        $deleteForm = $this->createDeleteForm($id, $idevenement);
        $editForm = $this->createEditForm($entity, $idevenement);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice','Modifications sauvegardées');
            return $this->redirect($this->generateUrl('inscription', array('id' => $id, 'idevenement' => $idevenement)). "#intervenants");
        }
        $this->get('session')->getFlashBag()->add('error','Le formulaire contient des erreurs');
        return $this->render('Contacts/Intervenant/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }


    /**
     * Deletes a Intervenant entity.
     *
     */
    public function delete(Request $request, $id, $idevenement)
    {
        $form = $this->createDeleteForm($id, $idevenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $intervenant = $em->getRepository(Intervenant::class)->find($id);
            $evenement = $em->getRepository(Evenement::class)->find($idevenement);

            if (!$intervenant) {
                throw $this->createNotFoundException('Unable to find Intervenant entity.');
            }

            $evenement->removeIntervenant($intervenant);
            $intervenant->removeEvenement($evenement);
            $em->flush();
        }
        $this->get('session')->getFlashBag()->add('success','Intervenant supprimé de la evenement.');
        return $this->redirect($this->generateUrl('inscription', array('idevenement' => $idevenement)));
    }

    /**
     * Creates a form to delete a Intervenant entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id, $idevenement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('intervenants_delete', array('id' => $id, 'idevenement' => $idevenement)))
            ->setMethod('DELETE')
            ->add('submit', SubmitType::class, array('label' => 'Supprimer', 'attr'=> array('class' => 'btn btn-red btn-delete')))
            ->getForm()
        ;
    }
}
