<?php

namespace OCIM\FormationsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Formation controller.
 *
 */
class DefaultController extends Controller
{
	public function indexAction(){
	
		$em = $this->getDoctrine()->getManager();

        $formations = $em->getRepository('OCIMFormationsBundle:Formation')->findAll();
		$types = $em->getRepository('OCIMFormationsBundle:TypeFormation')->findAll();
		
		foreach($formations as $formation){
			$formation->_count = $em->getRepository('OCIMFormationsBundle:Inscription')->countInscriptionsByFormation($formation->getId());
		}
		
		return $this->render('OCIMFormationsBundle:Default:index.html.twig', array(
			
		));
	}
}