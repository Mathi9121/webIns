<?php

namespace OCIM\FormationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use OCIM\FormationsBundle\Entity\TypeFormation;

/**
 * Formation
 */
class Formation
{
	
	protected $type;
	
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $intitule;

    /**
     * @var string
     */
    private $lieu;

    /**
     * @var \DateTime
     */
    private $dateDebut;

    /**
     * @var \DateTime
     */
    private $dateFin;

    /**
     * @var string
     */
    private $dateText;

    /**
     * @var decimal
     */
    private $nbHeures;


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
     * Set intitule
     *
     * @param string $intitule
     * @return Formation
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     * @return Formation
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string 
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Formation
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Formation
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set dateText
     *
     * @param string $dateText
     * @return Formation
     */
    public function setDateText($dateText)
    {
        $this->dateText = $dateText;

        return $this;
    }

    /**
     * Get dateText
     *
     * @return string 
     */
    public function getDateText()
    {
        return $this->dateText;
    }

    /**
     * Set nbHeures
     *
     * @param integer $nbHeures
     * @return Formation
     */
    public function setNbHeures($nbHeures)
    {
        $this->nbHeures = $nbHeures;

        return $this;
    }

    /**
     * Get nbHeures
     *
     * @return integer 
     */
    public function getNbHeures()
    {
        return $this->nbHeures;
    }

    /**
     * Set type
     *
     * @param \OCIM\FormationsBundle\Entity\TypeFormation $type
     * @return Formation
     */
    public function setType(\OCIM\FormationsBundle\Entity\TypeFormation $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \OCIM\FormationsBundle\Entity\TypeFormation 
     */
    public function getType()
    {
        return $this->type;
    }


	/**
     * To string
     *
     * @return String
     */
    public function __toString()
    {
        return $this->getIntitule()." | ".$this->getLieu();
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $formationFormules;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->formationFormules = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add formationFormules
     *
     * @param \OCIM\FormationsBundle\Entity\formationFormule $formationFormules
     * @return Formation
     */
    public function addFormationFormule(\OCIM\FormationsBundle\Entity\formationFormule $formationFormules)
    {
        $this->formationFormules[] = $formationFormules;

        return $this;
    }

    /**
     * Remove formationFormules
     *
     * @param \OCIM\FormationsBundle\Entity\formationFormule $formationFormules
     */
    public function removeFormationFormule(\OCIM\FormationsBundle\Entity\formationFormule $formationFormules)
    {
        $this->formationFormules->removeElement($formationFormules);
    }

    /**
     * Get formationFormules
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFormationFormules()
    {
        return $this->formationFormules;
    }
	
	public function getFormules(){
		$formules = array();
		foreach($this->getFormationFormules() as $assoformules){
			$formules[] = $assoformules->getFormule();
		}
		return $formules;
	}
	
	public function setFormules($formules = null){
		
		foreach($formules as $formule){
			if(!$this->formationFormules->contains($formule)){
				$ff = new formationFormule();
				$ff->setFormule($formule);
				$ff->setFormation($this);
				$this->formationFormules[] = $ff;
			}
		}
		return $this;
	}

}
