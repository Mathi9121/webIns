<?php

namespace OCIM\FormationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OCIM\FormationsBundle\Entity\Inscription;
use OCIM\FormationsBundle\Form\InscriptionPubliqueType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class InscriptionPubliqueController extends Controller
{
    public function inscriptionAction(Request $request)
    {
        $idformation = $request->query->get('idformation');
		    $inscription = new Inscription();
        $form = $this->createCreateForm($inscription, $idformation);
		    $em = $this->getDoctrine()->getManager();
		    $formation = $em->getRepository("OCIMFormationsBundle:Formation")->find($idformation);
        if (!$formation) {
          throw $this->createNotFoundException(
          "Aucune formation ne correspond à l'id : ".$idformation
          );
        }
        return $this->render('OCIMFormationsBundle:InscriptionPublique:form-public.html.twig', array(
          'form'   => $form->createView(),
          'idformation' => $idformation
          ));
	}

    public function createInscriptionAction(Request $request)
    {
        $idformation = $request->query->get('idformation');
		    $entity = new Inscription();
        $form = $this->createCreateForm($entity, $idformation);
        $form->handleRequest($request);
        // exit(\Doctrine\Common\Util\Debug::dump($form->isValid()));

        if ($form->isValid()) {
          $em = $this->getDoctrine()->getManager();

    			$ordre = $em->getRepository('OCIMFormationsBundle:Inscription')->getOrdreMaxByFormation($idformation);


    			$nouvelordre = (!is_null($ordre))? $ordre + 1000 : 0;
    			$entity->setOrdre($nouvelordre);

    			//exit(\Doctrine\Common\Util\Debug::dump($entity->getSignataire()->getAdresse()->getStructure()));

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
            'action' => $this->generateUrl('inscriptionpublique_creation', array('idformation' => $idformation)),
            'method' => 'POST',
			'em' => $this->getDoctrine()->getManager(),
        ));

        $form->add('submit', 'submit', array('label' => "Valider"));

        return $form;
    }

	public function confirmationAction(){

	}

}
