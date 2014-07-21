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
		$unit = (is_numeric($this->tarif))? '€' : '' ;
		return $this->tarif.$unit.'  |  '.$this->description;
	}
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $formationFormule;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->formationFormule = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add formationFormule
     *
     * @param \OCIM\FormationsBundle\Entity\formationFormule $formationFormule
     * @return Formule
     */
    public function addFormationFormule(\OCIM\FormationsBundle\Entity\formationFormule $formationFormule)
    {
        $this->formationFormule[] = $formationFormule;

        return $this;
    }

    /**
     * Remove formationFormule
     *
     * @param \OCIM\FormationsBundle\Entity\formationFormule $formationFormule
     */
    public function removeFormationFormule(\OCIM\FormationsBundle\Entity\formationFormule $formationFormule)
    {
        $this->formationFormule->removeElement($formationFormule);
    }

    /**
     * Get formationFormule
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFormationFormule()
    {
        return $this->formationFormule;
    }
}
