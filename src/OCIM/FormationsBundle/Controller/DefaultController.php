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

    $formations = $em->getRepository('OCIMFormationsBundle:Formation')->findAllFutursFormations();
    $inscriptions = $em->getRepository('OCIMFormationsBundle:Inscription')->lastInscriptions();

		//COUNT
		$qb = $em->createQueryBuilder();
		$qb->select('count(f.id)');
		$qb->from('OCIMFormationsBundle:Formation','f');
		$countFormations = $qb->getQuery()->getSingleScalarResult();

		$qb = $em->createQueryBuilder();
		$qb->select('count(i.id)');
		$qb->from('OCIMFormationsBundle:Inscription','i');
		$countInscriptions = $qb->getQuery()->getSingleScalarResult();

		$qb = $em->createQueryBuilder();
		$qb->select('count(i.id)');
		$qb->from('OCIMFormationsBundle:Formule','i');
		$countFormules = $qb->getQuery()->getSingleScalarResult();

		$qb = $em->createQueryBuilder();
		$qb->select('count(t.id)');
		$qb->from('OCIMExportBundle:Template','t');
		$countTemplate = $qb->getQuery()->getSingleScalarResult();

		foreach($formations as $formation){
			$formation->_count = $em->getRepository('OCIMFormationsBundle:Inscription')->countInscriptionsByFormation($formation->getId());
		}

		return $this->render('OCIMFormationsBundle:Default:index.html.twig', array(
			'formations'=> $formations,
			'inscriptions'=> $inscriptions,
			'countFormations' => $countFormations,
			'countInscriptions' => $countInscriptions,
			'countFormules' => $countFormules,
			'countTemplate' => $countTemplate
		));
	}
}
