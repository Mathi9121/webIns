<?php

namespace OCIM\FormationsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OCIM\FormationsBundle\Entity\formationFormule;
use OCIM\FormationsBundle\Entity\Formation;
use OCIM\FormationsBundle\Entity\ModeleLogistique;
use OCIM\FormationsBundle\Entity\ReponsesLogistique;
use OCIM\FormationsBundle\Entity\Inscription;
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
			$logistique = $em->getRepository('OCIMFormationsBundle:ModeleLogistique')->findModelesByIdFormation($entity->getId());
			$entity->setModeles(new ArrayCollection($logistique));
		}
		
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
			
			$inscription = new Inscription();
			$inscription = $em->getRepository('OCIMFormationsBundle:Inscription')->find($data[0]->idinscription);
			
			$reponseLogistique = new ReponsesLogistique;
			// un objet ReponseLogistique existe
			if($data[0]->idreponse){
				$reponseLogistique = $em->getRepository('OCIMFormationsBundle:ReponsesLogistique')->find($data[0]->idreponse);
			}
			
			// construction et enregistrement de la nouvelle reponse
			$nouvelleReponse;
		 	if($data[0]->type == "bool"){
				$nouvelleReponse = (($data[0]->reponse == "0") OR ($data[0]->reponse == ""))? true : false;
				$reponseLogistique->setReponse($nouvelleReponse);
			}
			elseif($data[0]->type == "text"){
				$nouvelleReponse = $data[0]->reponse;
				$reponseLogistique->setReponseText($nouvelleReponse);
			}
			

			if($reponseLogistique->getId() == null){
				$reponseLogistique->setInscription($inscription);
				$reponseLogistique->setModele($em->getReference('OCIMFormationsBundle:ModeleLogistique', $data[0]->idmodele));
				$inscription->addReponsesLogistique($reponseLogistique);
				$em->persist($reponseLogistique);
			}
			
			$em->flush();
			
			$data[0]->idreponse = $reponseLogistique->getId();
			$data[0]->reponse = $nouvelleReponse;
			
			return new Response( json_encode($data) , Response::HTTP_OK);
			
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

        
        $formation = $em->getRepository('OCIMFormationsBundle:Formation')->find($idformation);

		
		
		//exit(\Doctrine\Common\Util\Debug::dump($formation->getModeles()[0]));
		
		if($generation == "generate"){
			
			$modeles = new ArrayCollection();
			
			// On détermine les variables nécessaires à la génération des objets ModeleLogistique
			$dateDebut = $formation->getDateDebut();
			$dateFin = $formation->getDateFin();
			
			$dateDebut->setTime(00, 00);
			$dateFin->setTime(24, 00);
			
			$period = new \DatePeriod($dateDebut, new \DateInterval('P1D'), $dateFin);

			$journee = array();
			
			foreach($formation->getFormationFormule() as $ff){
				$journee['midi'][] = ($ff->getFormule()->getMidi())? $ff : false;
				$journee['soir'][] = ($ff->getFormule()->getSoir())? $ff : false;
				$journee['nuit'][] = ($ff->getFormule()->getNuit())? $ff : false;
			}
			
			//arrivée pour les intervenants
			$m = new ModeleLogistique();
			$m->setDescription('Arrivée');
			$m->setTypeReponse('dateTime');
			$m->setIntervenant(true);
			$formation->addModele($m);
			
			foreach($period as $date)
			{
				foreach($journee as $key=>$j){
					$m = new ModeleLogistique();
					
					foreach($j as $ff){
						if($ff){
							$m->addFormationFormule($ff);
						}
					}
					$m->setIntervenant(true);
					$m->setDate($date);
					$m->setDescription(ucfirst($key));
					$m->setTypeReponse("bool");
					$formation->addModele($m);
				}
			}
			
			//départ pour les intervenants
			$m = new ModeleLogistique();
			$m->setDescription('Départ');
			$m->setTypeReponse('dateTime');
			$m->setIntervenant(true);
			$formation->addModele($m);
			
		}
		else{
			$modeles = $em->getRepository('OCIMFormationsBundle:ModeleLogistique')->findModelesByIdFormation($idformation);
			if(!$modeles){
				$modeles[] = new ModeleLogistique();
				$formation->setModeles(new ArrayCollection($modeles));
			}
			else{
				$formation->setModeles(new ArrayCollection($modeles));
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
        $modeles = $em->getRepository('OCIMFormationsBundle:ModeleLogistique')->findModelesByIdFormation($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find formationFormule entity.');
        }
		
		$entity->setModeles(new ArrayCollection($modeles));
		
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
		
		
		
        if ($editForm->isValid()) {
			
			//suppression des anciens modeles
			foreach($modeles as $modele){
				if(!$entity->getModeles()->contains($modele)){
					// le modele a été supprimé, on supprime ses relations
					foreach($modele->getFormationFormule() as $ff){
						$modele->removeFormationFormule($ff);
						$ff->removeModele($modele);
					}
					$entity->removeModele($modele);
					$modele->setFormation(null);
					$em->remove($modele);
				}
				else{
					//On recherche les modification sur les formationFormule des modeles
					foreach($entity->getFormationFormule() as $ff){
						if(!$modele->getFormationFormule()->contains($ff)){
							$ff->removeModele($modele);
						}
					}
				}
			}
			//exit( \Doctrine\Common\Util\Debug::dump($entity->getModeles()[0]->getIntervenant()));
			
			
			foreach($entity->getModeles() as $modele){
				foreach($modele->getFormationFormule() as $ff){
					$ff->addModele($modele);
				}
				$modele->setFormation(($modele->getIntervenant())? $entity : null);
				if($modele->getFormationFormule()->count() == 0){
					if($modele->getIntervenant() === false){
						$em->remove($modele);
					}
					else{
						$em->persist($modele);
					}
				}
			}
			
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
