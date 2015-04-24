<?php

namespace OCIM\FormationsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OCIM\FormationsBundle\Entity\formationFormule;
use OCIM\FormationsBundle\Entity\Formation;
use OCIM\FormationsBundle\Entity\ModeleChampPerso;
use OCIM\FormationsBundle\Entity\ReponsesChampPerso;
use OCIM\FormationsBundle\Entity\Inscription;
use OCIM\FormationsBundle\Form\ChampPersoType;
use Doctrine\Common\Collections\ArrayCollection;
use OCIM\ContactsBundle\Entity\Personne;


/**
 * formationFormule controller.
 *
 */
class ChampPersoController extends Controller
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
			$champPerso = $em->getRepository('OCIMFormationsBundle:ModeleChampPerso')->findModelesByIdFormation($entity->getId());
			$entity->setModeles(new ArrayCollection($champPerso));
		}

		foreach($entities as $entity){
			$countmodeles = 0;

			foreach($entity->getFormationFormule() as $ff){
				$countmodeles += $ff->getModeles()->count();
			}
			$entity->_champPerso = $countmodeles;
		}

        return $this->render('OCIMFormationsBundle:champPerso:index.html.twig', array(
            'entities' => $entities,
        ));
    }

	public function reponseAction(Request $request){
		if($request->isXmlHttpRequest()){

			$em = $this->getDoctrine()->getManager();

			$data = json_decode($request->getContent());

			$personne = new Personne();
			$personne = $em->getRepository('OCIMContactsBundle:Personne')->find($data[0]->idpersonne);

			$reponseChampPerso = new ReponsesChampPerso();
			// un objet ReponseChampPerso existe
			if(!empty($data[0]->idreponse)){
				$reponseChampPerso = $em->getRepository('OCIMFormationsBundle:ReponsesChampPerso')->find($data[0]->idreponse);
			}

			// construction et enregistrement de la nouvelle reponse
			$nouvelleReponse;

		 	if($data[0]->type == "bool"){
				$nouvelleReponse = ($data[0]->reponse == "")? true : (($data[0]->reponse == "0")? null : false);
				if(is_null($nouvelleReponse)){
          $em->remove($reponseChampPerso);
        }
        $reponseChampPerso->setReponse($nouvelleReponse);
			}
			elseif($data[0]->type == "text"){
				$nouvelleReponse = $data[0]->reponse;
				$reponseChampPerso->setReponseText($nouvelleReponse);
			}


			if($reponseChampPerso->getId() == null){
				$reponseChampPerso->setPersonne($personne);
				$reponseChampPerso->setModele($em->getReference('OCIMFormationsBundle:ModeleChampPerso', $data[0]->idmodele));
				$personne->addReponsesChampPerso($reponseChampPerso);
				$em->persist($reponseChampPerso);
			}

			$em->flush();

			$data[0]->idreponse = $reponseChampPerso->getId();
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

            return $this->redirect($this->generateUrl('champPerso_show', array('id' => $entity->getId())));
        }

        return $this->render('OCIMFormationsBundle:champPerso:new.html.twig', array(
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
        $form = $this->createForm(new ChampPersoType(), $entity, array(
            'action' => $this->generateUrl('champPerso_create'),
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

        return $this->render('OCIMFormationsBundle:champPerso:new.html.twig', array(
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

        return $this->render('OCIMFormationsBundle:champPerso:show.html.twig', array(
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

		if($generation == "generate"){

			$modeles = new ArrayCollection();

			// On détermine les variables nécessaires à la génération des objets ModeleChampPerso
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
			$m = new ModeleChampPerso();
			$m->setDescription('Arrivée');
			$m->setTypeReponse('text');
			$m->setIntervenant(true);
			$formation->addModele($m);

			foreach($period as $date)
			{
				foreach($journee as $key=>$j){
					$m = new ModeleChampPerso();

					foreach($j as $ff){
						if($ff){
							$m->addFormationFormule($ff);
						}
					}
          $date->modify('+1 hour');
					$m->setIntervenant(true);
					$m->setDate($date);
					$m->setDescription(ucfirst($key));
					$m->setTypeReponse("bool");
					$formation->addModele($m);
				}
			}

			//départ pour les intervenants
			$m = new ModeleChampPerso();
			$m->setDescription('Départ');
			$m->setTypeReponse('text');
			$m->setIntervenant(true);
			$formation->addModele($m);

		}
		else{
			$modeles = $em->getRepository('OCIMFormationsBundle:ModeleChampPerso')->findModelesByIdFormation($idformation);
			if(!$modeles){
				$modeles[] = new ModeleChampPerso();
				$formation->setModeles(new ArrayCollection($modeles));
			}
			else{
				$formation->setModeles(new ArrayCollection($modeles));
			}
		}

        $editForm = $this->createEditForm($formation);
        $deleteForm = $this->createDeleteForm($idformation);

        return $this->render('OCIMFormationsBundle:champPerso:edit.html.twig', array(
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
        $form = $this->createForm(new ChampPersoType($entity->getId()), $entity, array(
            'action' => $this->generateUrl('champPerso_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Enregistrer', 'attr'=> array('class'=>'btn btn-green btn-save')));

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
        $modeles = $em->getRepository('OCIMFormationsBundle:ModeleChampPerso')->findModelesByIdFormation($id);

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
            $this->get('session')->getFlashBag()->add('success','Modifications enregistrées.');
              return $this->redirect($this->generateUrl('champPerso_edit', array('idformation' => $id)));
        }

        return $this->render('OCIMFormationsBundle:champPerso:edit.html.twig', array(
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
            $entity = $em->getRepository('OCIMFormationsBundle:ModeleChampPerso')->findModelesByIdFormation($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find formationFormule entity.');
            }

			foreach($entity as $mo){
				$em->remove($mo);
			}

            $em->flush();
        }

        return $this->redirect($this->generateUrl('champPerso'));
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
            ->setAction($this->generateUrl('champPerso_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer', 'attr'=>array('class'=>'btn btn-red btn-delete')))
            ->getForm()
        ;
    }
}
