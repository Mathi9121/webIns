<?php

namespace App\Entity\Contacts;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stagiaire
 * @ORM\Table(name="Stagiaire")
 * @ORM\Entity(repositoryClass="App\Repository\Contacts\StagiaireRepository")
 */
class Stagiaire extends Personne
{

}
