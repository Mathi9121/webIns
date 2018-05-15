<?php

namespace App\Entity\Contacts;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Intervenant
 */
class Intervenant extends Personne
{
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $evenements;


    /**
     * Add evenements
     *
     * @param \Entity\Evenements\Evenement $evenements
     * @return Intervenant
     */
    public function addEvenement(\Entity\Evenements\Evenement $evenements)
    {
        $this->evenements[] = $evenements;

        return $this;
    }

    /**
     * Remove evenements
     *
     * @param \Entity\Evenements\Evenement $evenements
     */
    public function removeEvenement(\Entity\Evenements\Evenement $evenements)
    {
        $this->evenements->removeElement($evenements);
    }

    /**
     * Get evenements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEvenements()
    {
        return $this->evenements;
    }
}
