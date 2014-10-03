<?php

namespace OCIM\ContactsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Signataire
 */
class Signataire extends Personne
{
	public function __construct(){
		parent::__construct('signataire');
	}
}
