<?php

namespace OCIM\FormationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OCIM\FormationsBundle\Entity\Inscription;
use OCIM\FormationsBundle\Form\InscriptionPubliqueType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Validator\Constraints as Assert;

class InscriptionPubliqueController extends Controller
{
    public function inscriptionAction(Request $request)
    {

        $id = $request->query->get('id');

        $entity = $request->query->get('entity');
        $entity = (( $entity !== null )&&(!empty($entity)))? $entity : false ;

        $inscription = new Inscription();

        $form = $this->createCreateForm($inscription, $id);

        $em = $this->getDoctrine()->getManager();
        $idformation = $id;

        if($entity == 'formule'){
          $formule = $em->getRepository("OCIMFormationsBundle:Formule")->find($id);
          $idformation = $formule->getFormationFormule()->get(0)->getFormation()->getId();
        }

        $formation = $em->getRepository("OCIMFormationsBundle:Formation")->find($idformation);

        if (!$formation) {
          throw $this->createNotFoundException(
          "Aucune formation ne correspond à l'id : ".$id
          );
        }

        if($entity == 'formule' ){

          //exit(\Doctrine\Common\Util\Debug::dump($formationType));
          $form->add('formations', 'entity', array(
            'mapped' => false,
            'label' => 'Vous participerez à la journée / aux journées',
            'required'      => false,
            'expanded' => true,
            'multiple' => true,
            'constraints' => new Assert\Count(array('min' => 1, 'minMessage' => 'Vous devez choisir au moins un evenement',)),
            'property' => 'intitule',
            'class'         => 'OCIMFormationsBundle:Formation',
            'query_builder' => function(EntityRepository $er) use ($id){
              return $er->createQueryBuilder('u')
              ->where('u.type  = :id')
              ->setParameter('id', $id);
            }
          ));

          $form->add('formationformule', 'hidden', array(
            'mapped' => false,
            'data' => 'type',
          ));
          $form->add('typeid', 'hidden', array(
            'mapped' => false,
            'data' => $id,
          ));
        }

        return $this->render('OCIMFormationsBundle:InscriptionPublique:form-public.html.twig', array(
          'form'   => $form->createView(),
          'id' => $id
          ));
	}

    public function createInscriptionAction(Request $request)
    {
      	$partdonnees = $request->request->get('ocim_formationsbundle_inscription');

        $idff = $partdonnees['formationformule'];
        $idformation;


        if($idff == 'type'){
          $idformation = $partdonnees['formations'][0];
        }

        else{
          $idformation = $this->getDoctrine()->getManager()->getRepository('OCIMFormationsBundle:formationFormule')->find($idff)->getFormation()->getId();
        }

        $entity = new Inscription();

        $form = $this->createCreateForm($entity, $idformation);

        if($idff == 'type'){
          $typeid = $partdonnees['typeid'];
          $form->add('formations', 'entity', array(
            'mapped' => false,
            'label' => 'Vous participerez à la journée / aux journées',
            'required'      => false,
            'expanded' => true,
            'multiple' => true,
            'constraints' => new Assert\Count(array('min' => 1, 'minMessage' => 'Vous devez choisir au moins un evenement',)),
            'property' => 'intitule',
            'class'         => 'OCIMFormationsBundle:Formation',
            'query_builder' => function(EntityRepository $er) use ($typeid){
              return $er->createQueryBuilder('u')
              ->where('u.type  = :id')
              ->setParameter('id', $typeid);
            }
          ));
          $form->add('formationformule', 'hidden', array(
            'mapped' => false,
            'data' => 'type',
          ));
          $form->add('typeid', 'hidden', array(
            'mapped' => false,
            'data' => $typeid,
          ));
        }


        $form->handleRequest($request);
        // exit(\Doctrine\Common\Util\Debug::dump($form->isValid()));

        // formulaire valide
        if ($form->isValid()) {


          //FORMULAIRE SPECIAL
          if($idff == "type" && is_array($partdonnees['formations'])){
            $em = $this->getDoctrine()->getManager();
            $formations = $em->getRepository('OCIMFormationsBundle:Formation')->findById($partdonnees['formations']);

            foreach($formations as $formation){


              $inscription = new Inscription();

              $inscription->setStagiaire($entity->getStagiaire());
              $inscription->setAdmin($entity->getAdmin());

              $ffarray = $formation->getFormationFormule();
              $ff = $ffarray[0];
              $em = $this->getDoctrine()->getManager();

              $ordre = $em->getRepository('OCIMFormationsBundle:Inscription')->getOrdreMaxByFormation($formation->getId());

              $nouvelordre = (!is_null($ordre))? $ordre + 1000 : 0;

              $inscription->setOrdre($nouvelordre);

              $inscription->setStatut(2);

              $inscription->setFormationformule($ff);


              $em->persist($inscription);

              $em->flush();


            }
              $inscription_success = true;
              try{
                $em->flush();
              }
              catch(Exception $e){
                $inscription_success = false;
              }

              return $this->render('OCIMFormationsBundle:InscriptionPublique:confirmation.html.twig', array(
                //'success_mail' => $mail_success,
                'success_inscription' => $inscription_success,
              ));


          }
          //FORMULAIRE FORMATION
          else{
            $em = $this->getDoctrine()->getManager();
            $ordre = $em->getRepository('OCIMFormationsBundle:Inscription')->getOrdreMaxByFormation($idformation);
            $nouvelordre = (!is_null($ordre))? $ordre + 1000 : 0;
            $entity->setOrdre($nouvelordre);
            $entity->setStatut(2);
            $em->persist($entity);
            // bool pour vérification du bon déroulement de l'inscription
            $inscription_success = true;
            $mail_success = true;
            try{
              $em->flush();
            }
            catch(Exception $e){
              $inscription_success = false;
            }
            // on envoit le mail que si l'inscription a réussi
            if($inscription_success){
              // envoi de mails
              $message = \Swift_Message::newInstance()
              ->setSubject('[OCIM] Inscription à la formation : '.$entity->getFormationFormule()->getFormation()->getIntitule())
              ->setFrom('formation.ocim@u-bourgogne.fr')
              ->setContentType("text/html")
              ->setTo($entity->getStagiaire()->getMail())
              ->setBody($this->renderView('OCIMFormationsBundle:InscriptionPublique:email-inscription.html.twig', array('inscription' => $entity)))
              //->setCharset('utf-8')
              ;
              if(!$this->get('mailer')->send($message)){
                $mail_success = false;
              }
            }
            return $this->render('OCIMFormationsBundle:InscriptionPublique:confirmation.html.twig', array(
              'success_mail' => $mail_success,
              'success_inscription' => $inscription_success
            ));

          }


        }

        else{
  		    return $this->render('OCIMFormationsBundle:InscriptionPublique:form-public.html.twig', array(
  			       'form'   => $form->createView(),
        		   'idformation' => $idformation
        	  	));
        }
	}



	private function createCreateForm(Inscription $entity, $idformation)
    {
        $form = $this->createForm(new InscriptionPubliqueType($idformation), $entity, array(
            'method' => 'POST',
			      'em' => $this->getDoctrine()->getManager(),
        ));

        $form->add('submit', 'submit', array('label' => "Valider"));

        return $form;
    }

	public function confirmationAction(){

	}

}
