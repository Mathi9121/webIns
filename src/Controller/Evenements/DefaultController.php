<?php

namespace App\Controller\Evenements;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Entity\Evenements\Evenement;
use App\Entity\Evenements\Inscription;
use App\Entity\Evenements\Event;
use App\Entity\Evenements\Formation;
use App\Entity\Evenements\Formule;
use App\Entity\Evenements\Convention;
use App\Entity\Contacts\Intervenant;

/**
 * Evenement controller.
 *
 */
class DefaultController extends Controller
{
	public function indexAction(){

		$em = $this->getDoctrine()->getManager();

        $evenements = $em->getRepository(Evenement::class)->findAllFutursEvents();
        $formations = $em->getRepository(Evenement::class)->findAllFutursFormations();
        $inscriptions = $em->getRepository(Inscription::class)->lastInscriptions();

		//COUNT
		$qb = $em->createQueryBuilder();
		$qb->select('count(f.id)');
		$qb->from(Event::class,'f');
		$countEvents = $qb->getQuery()->getSingleScalarResult();

		$qb = $em->createQueryBuilder();
		$qb->select('count(f.id)');
		$qb->from(Formation::class,'f');
		$countFormations = $qb->getQuery()->getSingleScalarResult();

		$qb = $em->createQueryBuilder();
		$qb->select('count(i.id)');
		$qb->from(Inscription::class,'i');
		$countInscriptions = $qb->getQuery()->getSingleScalarResult();

		$qb = $em->createQueryBuilder();
		$qb->select('count(f.id)');
		$qb->from(Formule::class,'f');
		$countFormules = $qb->getQuery()->getSingleScalarResult();

		$qb = $em->createQueryBuilder();
		$qb->select('count(i.id)');
		$qb->from(Intervenant::class,'i');
		$countIntervenant = $qb->getQuery()->getSingleScalarResult();

		$qb = $em->createQueryBuilder();
		$qb->select('count(c.id)');
		$qb->from(Convention::class,'c');
		$countConvention = $qb->getQuery()->getSingleScalarResult();

		foreach($evenements as $evenement){
			$evenement->_count = $em->getRepository(Inscription::class)->countInscriptionsByEvenement($evenement->getId());
		}

		foreach($formations as $formation){
			$formation->_count = $em->getRepository(Inscription::class)->countInscriptionsByEvenement($formation->getId());
		}

		return $this->render('Evenements/Default/index.html.twig', array(
			'evenements'=> $evenements,
			'formations'=> $formations,
			'inscriptions'=> $inscriptions,
			'countEvents' => $countEvents,
			'countFormations' => $countFormations,
			'countInscriptions' => $countInscriptions,
			'countIntervenant' => $countIntervenant,
			'countConvention' => $countConvention
		));
	}
}
