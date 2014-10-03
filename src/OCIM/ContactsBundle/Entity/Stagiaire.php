<?php

namespace OCIM\ContactsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stagiaire
 */
class Stagiaire extends Personne
{
	public function __construct(){
		parent::__construct('stagiaire');
	}
}
