<?php

namespace OCIM\FormationsBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * InscriptionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class InscriptionRepository extends EntityRepository
{
	public function findAllByFormation($formation_id)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT i, f FROM OCIMFormationsBundle:Inscription i
				JOIN i.formationformule f
				JOIN i.personnes p
				WHERE f.formation = :id
				AND p INSTANCE OF OCIMContactsBundle:Stagiaire
				ORDER BY i.statut ASC, p.nom ASC'
            )->setParameter('id', $formation_id)
            ->getResult();
    }
	public function countInscriptionsByFormation($formation_id){
		return $this->getEntityManager()
            ->createQuery(
                'SELECT distinct COUNT(i.statut), i.statut FROM OCIMFormationsBundle:Inscription i
				JOIN i.formationformule f
				WHERE f.formation = :id
				GROUP BY i.statut
				'
            )->setParameter('id', $formation_id)
            ->getResult();
	}

	public function lastInscriptions(){
		return $this->getEntityManager()
            ->createQuery(
                'SELECT p.nom, p.prenom, i.dateInscription FROM OCIMFormationsBundle:Inscription i
				JOIN i.personnes p
				WHERE p INSTANCE OF OCIMContactsBundle:Stagiaire
				ORDER BY i.dateInscription DESC'
            )
			->setMaxResults(10)
            ->getResult();
	}

	public function getOrdreMaxByFormation($formation_id){
		return $this->getEntityManager()
			->createQuery(
					'SELECT MAX(i.ordre) FROM OCIMFormationsBundle:Inscription i
					JOIN i.formationformule f
					WHERE f.formation = :id'
				)->setParameter('id', $formation_id)
				->getSingleScalarResult();
	}
}
