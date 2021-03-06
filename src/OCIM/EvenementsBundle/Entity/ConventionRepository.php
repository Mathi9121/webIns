<?php

namespace OCIM\EvenementsBundle\Entity;

use Doctrine\ORM\EntityRepository;
use OCIM\EvenementsBundle\DQL\Year;


/**
 * ConventionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ConventionRepository extends EntityRepository
{
  public function lastConventionNumber(){
    return $this->getEntityManager()
      ->createQuery(
        'SELECT MAX(c.numero) as num FROM OCIMEvenementsBundle:Convention c
        WHERE YEAR(c.edition) = YEAR(:date)'
      )
      ->setParameter('date', new \DateTime('now'))
      ->getSingleResult();
  }

  public function findConventionsByInscriptions($slug){
    return $this->getEntityManager()
      ->createQuery(
        'SELECT i FROM OCIMEvenementsBundle:Inscription i
          WHERE i.statutConvention = 1
          ORDER BY i.dateInscription DESC
          '
      )
      ->setMaxResults(10)
      ->setFirstResult(10 * ($slug-1))
      ->getResult();
  }
  public function countConventionsByInscriptions(){
    return $this->getEntityManager()
      ->createQuery(
        'SELECT count(i.id) FROM OCIMEvenementsBundle:Inscription i
        WHERE i.statutConvention = 1
        '
      )
    ->getSingleResult();
  }
}
