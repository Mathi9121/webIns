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
		$em = $this->getDoctrine()->getManager();

        $formations = $em->getRepository('OCIMFormationsBundle:Formation')->findAll();
		
		foreach($formations as $formation){
			$formation->_count = $em->getRepository('OCIMFormationsBundle:Inscription')->countInscriptionsByFormation($formation->getId());
		}
		
		return $this->render('OCIMFormationsBundle:Default:index.html.twig', array(
			'formations' => $formations,
		));
    }
}
