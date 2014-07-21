<?php

namespace OCIM\FormationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OCIM\FormationsBundle\Entity\Formation;
use OCIM\FormationsBundle\Entity\Formule;
use OCIM\FormationsBundle\Entity\formationFormule;
use OCIM\FormationsBundle\Entity\TypeFormation;

class DefaultController extends Controller
{

    public function indexAction()
    {
		//test creation formations
	/*	$typeF = new TypeFormation();
		$typeF->setType("Formation");
		
		$formation = new Formation();
		$formation->setIntitule("Formation blabla");
		$formation->setDateDebut(new \DateTime("2012-12-12"));
		$formation->setDateFin(new \DateTime("2012-12-12"));
		$formation->setDateText("Le 12 decembre 2012");
		$formation->setLieu("Dijon");
		$formation->setNbHeures(12);
		$formation->setType($typeF);
		
		//enregistrement en BDD
		$em = $this->getDoctrine()->getManager();
		$em->persist($typeF);
		$em->persist($formation);
		$em->flush(); */
		
		//Nouvelle formule
		/* $formule = new Formule();
		$formule->setTarif(300);
		$formule->setDescription("Formule test : repas seulement");
		$formule->setMidi(true);
		$formule->setSoir(true);
		$formule->setNuit(false);
		 */
		//recup de la formation id=1
		/* $formation = $this->getDoctrine()
			->getRepository('OCIMFormationsBundle:Formation')
			->find(1);
		
		$formule->addFormation($formation); */
		
		//Enregistrement en BDD
		/* $em = $this->getDoctrine()->getManager();
		$em->persist($formule);
		$em->flush(); */
		
		// Liaison entre une formation et une formule
/* 		$formation = $this->getDoctrine()->getRepository('OCIMFormationsBundle:Formation')->find(2);
		$formule = $this->getDoctrine()->getRepository('OCIMFormationsBundle:Formule')->find(2);
		$ff = new formationFormule();
		$ff->setFormation($formation);
		$ff->setFormule($formule);
		$em = $this->getDoctrine()->getManager();
		$em->persist($ff);
		$em->flush();  */

		$inscriptions = $this->getDoctrine()->getRepository('OCIMFormationsBundle:Inscription')->findAllByFormation(6);
		
		//Info de l'utilisateur connecté.
		$user = $this->getUser();
        return $this->render('OCIMFormationsBundle:Default:index.html.twig', array('user' => $user, 'inscriptions'=> \Doctrine\Common\Util\Debug::dump($inscriptions)));
    }
}