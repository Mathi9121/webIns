<?php

namespace OCIM\FormationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Formule
 */
class Formule
{
    /**
     * @var integer
     */
    private $id;
	
    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $tarif;

    /**
     * @var boolean
     */
    private $midi;

    /**
     * @var boolean
     */
    private $soir;

    /**
     * @var boolean
     */
    private $nuit;


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
     * Set description
     *
     * @param string $description
     * @return Formule
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set tarif
     *
     * @param string $tarif
     * @return Formule
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return string 
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set midi
     *
     * @param boolean $midi
     * @return Formule
     */
    public function setMidi($midi)
    {
        $this->midi = $midi;

        return $this;
    }

    /**
     * Get midi
     *
     * @return boolean 
     */
    public function getMidi()
    {
        return $this->midi;
    }

    /**
     * Set soir
     *
     * @param boolean $soir
     * @return Formule
     */
    public function setSoir($soir)
    {
        $this->soir = $soir;

        return $this;
    }

    /**
     * Get soir
     *
     * @return boolean 
     */
    public function getSoir()
    {
        return $this->soir;
    }

    /**
     * Set nuit
     *
     * @param boolean $nuit
     * @return Formule
     */
    public function setNuit($nuit)
    {
        $this->nuit = $nuit;

        return $this;
    }

    /**
     * Get nuit
     *
     * @return boolean 
     */
    public function getNuit()
    {
        return $this->nuit;
    }
	
	public function __toString()
	{
		return $this->getTarif()."€ | ".$this->getDescription();
	}
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $formationsFormule;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->formationsFormule = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add formationsFormule
     *
     * @param \OCIM\FormationsBundle\Entity\formationFormule $formationsFormule
     * @return Formule
     */
    public function addFormationsFormule(\OCIM\FormationsBundle\Entity\formationFormule $formationsFormule)
    {
        $this->formationsFormule[] = $formationsFormule;

        return $this;
    }

    /**
     * Remove formationsFormule
     *
     * @param \OCIM\FormationsBundle\Entity\formationFormule $formationsFormule
     */
    public function removeFormationsFormule(\OCIM\FormationsBundle\Entity\formationFormule $formationsFormule)
    {
        $this->formationsFormule->removeElement($formationsFormule);
    }

    /**
     * Get formationsFormule
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFormationsFormule()
    {
        return $this->formationsFormule;
    }
}
