<?php

namespace App\Entity\Evenements;

use Doctrine\ORM\Mapping as ORM;

/**
 * evenementFormule
 * @ORM\Table(name="evenementFormule")
 * @ORM\Entity
 */
class evenementFormule
{
    /**
     * @var integer
     * 
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $modeles;

    /**
     * @var \Entity\Evenements\Formule
     */
    private $formule;

    /**
     * @var \Entity\Evenements\Evenement
     */
    private $evenement;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->modeles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->inscriptions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Add modeles
     *
     * @param \Entity\Evenements\ModeleChampPerso $modeles
     * @return evenementFormule
     */
    public function addModele(\Entity\Evenements\ModeleChampPerso $modeles)
    {
		if(!$this->modeles->contains($modeles)){
			$this->modeles[] = $modeles;
		}


        return $this;
    }

    /**
     * Remove modeles
     *
     * @param \Entity\Evenements\ModeleChampPerso $modeles
     */
    public function removeModele(\Entity\Evenements\ModeleChampPerso $modeles)
    {
        $this->modeles->removeElement($modeles);
    }

    /**
     * Get modeles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModeles()
    {
        return $this->modeles;
    }

    /**
     * Set formule
     *
     * @param \Entity\Evenements\Formule $formule
     * @return evenementFormule
     */
    public function setFormule(\Entity\Evenements\Formule $formule = null)
    {
        $this->formule = $formule;

        return $this;
    }

    /**
     * Get formule
     *
     * @return \Entity\Evenements\Formule
     */
    public function getFormule()
    {
        return $this->formule;
    }

    /**
     * Set evenement
     *
     * @param \Entity\Evenements\Evenement $evenement
     * @return evenementFormule
     */
    public function setEvenement(\Entity\Evenements\Evenement $evenement = null)
    {
        $this->evenement = $evenement;

        return $this;
    }

    /**
     * Get evenement
     *
     * @return \Entity\Evenements\Evenement
     */
    public function getEvenement()
    {
        return $this->evenement;
    }

	public function __toString(){
		$tarif = $this->getFormule()->getTarif();
		$tarif = (is_numeric($tarif))? $tarif."€": $tarif;
		return $tarif." --- ".$this->getFormule()->getDescription();
	}
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $inscriptions;


    /**
     * Add inscriptions
     *
     * @param \Entity\Evenements\Inscription $inscriptions
     * @return evenementFormule
     */
    public function addInscription(\Entity\Evenements\Inscription $inscriptions)
    {
        $this->inscriptions[] = $inscriptions;

        return $this;
    }

    /**
     * Remove inscriptions
     *
     * @param \Entity\Evenements\Inscription $inscriptions
     */
    public function removeInscription(\Entity\Evenements\Inscription $inscriptions)
    {
        $this->inscriptions->removeElement($inscriptions);
    }

    /**
     * Get inscriptions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInscriptions()
    {
        return $this->inscriptions;
    }

	public function getFormuleId(){
		return $this->getFormule()->getId();
	}
}
