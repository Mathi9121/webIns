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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var \OCIM\FormationsBundle\Entity\Formule
     */
    private $formule;

    /**
     * @var \OCIM\FormationsBundle\Entity\Formation
     */
    private $formation;


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
    /**
     * @var \OCIM\FormationsBundle\Entity\Formule
     */
    private $formules;

    /**
     * @var \OCIM\FormationsBundle\Entity\Formation
     */
    private $formations;


    /**
     * Set formules
     *
     * @param \OCIM\FormationsBundle\Entity\Formule $formules
     * @return formationFormule
     */
    public function setFormules(\OCIM\FormationsBundle\Entity\Formule $formules = null)
    {
        $this->formules = $formules;

        return $this;
    }

    /**
     * Get formules
     *
     * @return \OCIM\FormationsBundle\Entity\Formule 
     */
    public function getFormules()
    {
        return $this->formules;
    }

    /**
     * Set formations
     *
     * @param \OCIM\FormationsBundle\Entity\Formation $formations
     * @return formationFormule
     */
    public function setFormations(\OCIM\FormationsBundle\Entity\Formation $formations = null)
    {
        $this->formations = $formations;

        return $this;
    }

    /**
     * Get formations
     *
     * @return \OCIM\FormationsBundle\Entity\Formation 
     */
    public function getFormations()
    {
        return $this->formations;
    }
    /**
     * @var \OCIM\FormationsBundle\Entity\Inscription
     */
    private $inscription;


    /**
     * Set inscription
     *
     * @param \OCIM\FormationsBundle\Entity\Inscription $inscription
     * @return formationFormule
     */
    public function setInscription(\OCIM\FormationsBundle\Entity\Inscription $inscription = null)
    {
        $this->inscription = $inscription;

        return $this;
    }

    /**
     * Get inscription
     *
     * @return \OCIM\FormationsBundle\Entity\Inscription 
     */
    public function getInscription()
    {
        return $this->inscription;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $modeles;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->modeles = new \Doctrine\Common\Collections\ArrayCollection();
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
}
