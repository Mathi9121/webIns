<?php

namespace OCIM\FormationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * formationFormule
 */
class formationFormule
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $modeles;

    /**
     * @var \OCIM\FormationsBundle\Entity\Formule
     */
    private $formule;

    /**
     * @var \OCIM\FormationsBundle\Entity\Formation
     */
    private $formation;

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
     * @param \OCIM\FormationsBundle\Entity\ModeleLogistique $modeles
     * @return formationFormule
     */
    public function addModele(\OCIM\FormationsBundle\Entity\ModeleLogistique $modeles)
    {
        $this->modeles[] = $modeles;

        return $this;
    }

    /**
     * Remove modeles
     *
     * @param \OCIM\FormationsBundle\Entity\ModeleLogistique $modeles
     */
    public function removeModele(\OCIM\FormationsBundle\Entity\ModeleLogistique $modeles)
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
     * @param \OCIM\FormationsBundle\Entity\Formule $formule
     * @return formationFormule
     */
    public function setFormule(\OCIM\FormationsBundle\Entity\Formule $formule = null)
    {
        $this->formule = $formule;

        return $this;
    }

    /**
     * Get formule
     *
     * @return \OCIM\FormationsBundle\Entity\Formule 
     */
    public function getFormule()
    {
        return $this->formule;
    }

    /**
     * Set formation
     *
     * @param \OCIM\FormationsBundle\Entity\Formation $formation
     * @return formationFormule
     */
    public function setFormation(\OCIM\FormationsBundle\Entity\Formation $formation = null)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formation
     *
     * @return \OCIM\FormationsBundle\Entity\Formation 
     */
    public function getFormation()
    {
        return $this->formation;
    }
	
	public function __toString(){
		return $this->getFormule()->getDescription();
	}
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $inscriptions;


    /**
     * Add inscriptions
     *
     * @param \OCIM\FormationsBundle\Entity\Inscription $inscriptions
     * @return formationFormule
     */
    public function addInscription(\OCIM\FormationsBundle\Entity\Inscription $inscriptions)
    {
        $this->inscriptions[] = $inscriptions;

        return $this;
    }

    /**
     * Remove inscriptions
     *
     * @param \OCIM\FormationsBundle\Entity\Inscription $inscriptions
     */
    public function removeInscription(\OCIM\FormationsBundle\Entity\Inscription $inscriptions)
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
}
