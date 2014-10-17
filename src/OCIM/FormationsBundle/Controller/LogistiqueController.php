<?php

namespace OCIM\FormationsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OCIM\FormationsBundle\Entity\formationFormule;
use OCIM\FormationsBundle\Entity\Formation;
use OCIM\FormationsBundle\Entity\ModeleLogistique;
use OCIM\FormationsBundle\Form\LogistiqueType;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * formationFormule controller.
 *
 */
class LogistiqueController extends Controller
{

    /**
     * Lists all formationFormule entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OCIMFormationsBundle:Formation')->findAll();
		
		foreach($entities as $entity){
			$countmodeles = 0;
			
			foreach($entity->getFormationFormule() as $ff){
				$countmodeles += $ff->getModeles()->count();
			}
			$entity->_logistique = $countmodeles;
		}
		
        return $this->render('OCIMFormationsBundle:logistique:index.html.twig', array(
            'entities' => $entities,
        ));
    }
	
	public function reponseAction(Request $request){
		if($request->isXmlHttpRequest()){
		
			$em = $this->getDoctrine()->getManager();
			
			$data = json_decode($request->getContent());
			
				$inscription = $em->getRepository('OCIMFormationsBundle:Inscription')->find($data[0]->id);
				$date = new \DateTime($data[0]->date);
				
				$modele = 0;
				foreach($inscription->getFormationFormule()->getModeles() as $mo){
					if($mo->getDate() == $date){
						$modele = $mo;
					}
				}
				
				
			
			//$em->flush();
			return new Response( $modele , Response::HTTP_OK);
		}
	}
	
    /**
     * Creates a new formationFormule entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new formationFormule();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('logistique_show', array('id' => $entity->getId())));
        }

        return $this->render('OCIMFormationsBundle:logistique:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a formationFormule entity.
     *
     * @param formationFormule $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(formationFormule $entity)
    {
        $form = $this->createForm(new LogistiqueType(), $entity, array(
            'action' => $this->generateUrl('logistique_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer'));

        return $form;
    }

    /**
     * Displays a form to create a new formationFormule entity.
     *
     */
    public function newAction()
    {
        $entity = new formationFormule();
        $form   = $this->createCreateForm($entity);

        return $this->render('OCIMFormationsBundle:logistique:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a formationFormule entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCIMFormationsBundle:formationFormule')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find formationFormule entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OCIMFormationsBundle:logistique:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing formationFormule entity.
     *
     */
    public function editAction($idformation, $generation)
    {
        $em = $this->getDoctrine()->getManager();

        $modeles = $em->getRepository('OCIMFormationsBundle:ModeleLogistique')->findModelesByIdFormation($idformation);
        $formation = $em->getRepository('OCIMFormationsBundle:Formation')->find($idformation);

		$formation->setModeles($modeles);
		
		//exit(\Doctrine\Common\Util\Debug::dump($formation->getModeles()[0]));
		
		if($generation == "generate"){
			
			// On détermine les variables nécessaires à la génération des objets ModeleLogistique
			$dateDebut = $formation->getDateDebut();
			$dateFin = $formation->getDateFin();
			$journee = array();
			
			$dateDebut->setTime(00, 00);
			$dateFin->setTime(24, 00);
			
			foreach($formation->getFormationFormule() as $ff){
				if($ff->getFormule()->getMidi()){$journee[$ff->getId()] = 'Midi';}
				if($ff->getFormule()->getSoir()){$journee[$ff->getId()] = 'Soir';}
				if($ff->getFormule()->getNuit()){$journee[$ff->getId()] = 'Nuit';}
			}
			
			
			$period = new \DatePeriod($dateDebut, new \DateInterval('P1D'), $dateFin);

			
			foreach($period as $date)
			{
				foreach($journee as $key=>$value)
				{
					$m = new ModeleLogistique();
					$m->addFormationFormule($em->getReference('OCIMFormationsBundle:formationFormule' , $key));
					$m->setDate($date);
					$m->setDescription($value);
					$m->setTypeReponse("bool");
					$formation->addModele($m);
				}
			}
			
		}
        $editForm = $this->createEditForm($formation);
        $deleteForm = $this->createDeleteForm($idformation);

        return $this->render('OCIMFormationsBundle:logistique:edit.html.twig', array(
            'entity'      => $formation,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a formationFormule entity.
    *
    * @param formationFormule $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm($entity)
    {
        $form = $this->createForm(new LogistiqueType($entity->getId()), $entity, array(
            'action' => $this->generateUrl('logistique_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => ' Enregistrer', 'attr'=> array('class'=>'btn btn-green oi','data-glyph'=>"check")));

        return $form;
    }
    /**
     * Edits an existing formationFormule entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OCIMFormationsBundle:Formation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find formationFormule entity.');
        }
		
		$anciensModeles = new ArrayCollection();
		
		foreach($entity->getFormationFormule() as $ff){
			foreach($ff->getModeles() as $modele){
				$anciensModeles->add($modele); 
			}
		}
		
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
		
		//exit(\Doctrine\Common\Util\Debug::dump($anciensModeles).\Doctrine\Common\Util\Debug::dump($entity->getModeles()));
		
        if ($editForm->isValid()) {
			foreach($entity->getModeles() as $modele){
				foreach($modele->getFormationFormule() as $ff){
					$ff->addModele($modele);
				}
			}
			
			/* foreach($entity->getModeles() as $modele){
				foreach($modele->getFormationFormule() as $ff){
					// Suppression dun modele plus existant
					if(!$anciensModeles->contains($modele)){
						$ff->removeModele($modele);
						$modele->removeFormationFormule($ff);
						$em->remove($modele);
					}
					$em->persist($modele);
				}
			} */
			
            $em->flush();

            return $this->redirect($this->generateUrl('logistique_edit', array('idformation' => $id)));
        }

        return $this->render('OCIMFormationsBundle:logistique:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a formationFormule entity.
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
                throw $this->createNotFoundException('Unable to find formationFormule entity.');
            }
			
			foreach($entity->getModeles() as $mo){
				$em->remove($mo);
			}
			
            $em->flush();
        }

        return $this->redirect($this->generateUrl('logistique'));
    }

    /**
     * Creates a form to delete a formationFormule entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('logistique_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer', 'attr'=>array('class'=>'btn btn-red oi', 'data-glyph'=>'trash')))
            ->getForm()
        ;
    }
}
