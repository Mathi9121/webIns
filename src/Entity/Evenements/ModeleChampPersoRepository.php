<?php

namespace App\Entity\Evenements;

use Doctrine\ORM\EntityRepository;

/**
 * ModeleChampPersoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ModeleChampPersoRepository extends EntityRepository
{
	public function findModelesByIdEvenement($idevenement){
			return $this->getEntityManager()
				->createQuery(
					'SELECT mo FROM App\Entity\Evenements\ModeleChampPerso mo
					LEFT JOIN mo.evenementFormule ff
					WHERE ff.evenement = :id
					OR mo.evenement = :id
					ORDER BY mo.ordre ASC'
				)->setParameter('id', $idevenement)
				->getResult();
		}
}
