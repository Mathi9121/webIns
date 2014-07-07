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
	
	protected $formations;
	
	public function __construct(){
		$this->formations = new \Doctrine\Common\Collections\ArrayCollection();
	}
	
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

    /**
     * Add formations
     *
     * @param \OCIM\FormationsBundle\Entity\Formation $formations
     * @return Formule
     */
    public function addFormation(\OCIM\FormationsBundle\Entity\Formation $formations)
    {
        $this->formations[] = $formations;

        return $this;
    }

    /**
     * Remove formations
     *
     * @param \OCIM\FormationsBundle\Entity\Formation $formations
     */
    public function removeFormation(\OCIM\FormationsBundle\Entity\Formation $formations)
    {
        $this->formations->removeElement($formations);
    }

    /**
     * Get formations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFormations()
    {
        return $this->formations;
    }
	
	public function __toString()
	{
		return $this->getTarif()."€ | ".$this->getDescription();
	}
}