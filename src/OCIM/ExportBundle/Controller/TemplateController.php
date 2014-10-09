<?php

namespace OCIM\ExportBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OCIM\ExportBundle\Entity\Template;
use OCIM\ExportBundle\Form\TemplateType;

/**
 * Template controller.
 *
 */
class TemplateController extends Controller
{

    /**
     * Lists all Template entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OCIMExportBundle:Template')->findAll();

        return $this->render('OCIMExportBundle:Template:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Template entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Template();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('documents_show', array('id' => $entity->getId())));
        }

        return $this->render('OCIMExportBundle:Template:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Template entity.
     *
     * @param Template $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Template $entity)
    {
        $form = $this->createForm(new TemplateType(), $entity, array(
            'action' => $this->generateUrl('documents_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Template entity.
     *
     */
    public function newAction()
    {
        $entity = new Template();
        $form   = $this->createCreateForm($entity);

        return $this->render('OCIMExportBundle:Template:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Template entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCIMExportBundle:Template')->find($id);
        $formation = $em->getRepository('OCIMFormationsBundle:Formation')->find(49);
        $inscription = $em->getRepository('OCIMFormationsBundle:Inscription')->find(2);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Template entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
		
		// Nom du fichier
		$filename = $entity->getFilename();
		$filename = str_replace('{{formation.intitule}}', $formation->getIntitule(), $filename);
		$filename = str_replace('{{formation.id}}', $formation->getId(), $filename);
		$filename = str_replace('{{inscription.stagiaire.nom}}', $inscription->getStagiaire()->getNom(), $filename);
		$filename = str_replace('{{inscription.stagiaire.prenom}}', $inscription->getStagiaire()->getPrenom(), $filename);
		$filename = str_replace('{{inscription.convention.numero}}', $inscription->getConvention()->getNumero(), $filename);
		
		
		// Ajout de la fonction twig pour calculer la durée entre deux date
		$env = new \Twig_Environment(new \Twig_Loader_String());
		$function = new \Twig_SimpleFunction('date_difference', function ($start, $end) {
			return $start->diff($end, true)->format('%a') + 1;
		});
		
		// ajout à l'environnement
		$env->addFunction($function);
		
		$contenu = "<html><head><meta charset='utf-8'/>
					</head><body>".$entity->getContenu()."</body></html>";

		// contenu et valeurs
		$contenu = $env->render(
			$contenu,
			array("formation" => $formation, "inscription" => $inscription)
		);

		return new Response(
			$this->get('knp_snappy.pdf')->getOutputFromHtml($contenu),
			200,
			array(
				'Content-Type'          => 'application/pdf',
				'Content-Disposition'   => 'attachment; filename="'.$filename.'.pdf"'
			)
		);
    }

    /**
     * Displays a form to edit an existing Template entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCIMExportBundle:Template')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Template entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OCIMExportBundle:Template:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Template entity.
    *
    * @param Template $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Template $entity)
    {
        $form = $this->createForm(new TemplateType(), $entity, array(
            'action' => $this->generateUrl('documents_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Template entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCIMExportBundle:Template')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Template entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('documents_edit', array('id' => $id)));
        }

        return $this->render('OCIMExportBundle:Template:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Template entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OCIMExportBundle:Template')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Template entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('documents'));
    }

    /**
     * Creates a form to delete a Template entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('documents_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
