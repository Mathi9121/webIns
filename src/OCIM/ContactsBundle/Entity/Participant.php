<?php

namespace OCIM\ContactsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Intervenant
 */
class Participant extends Personne
{
  public function __construct(){
    parent::__construct('participant');
  }
}
