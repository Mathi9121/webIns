<?php

namespace OCIM\FormationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModeleChampPerso
 */
class ModeleChampPerso
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $typeReponse;


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
     * Set date
     *
     * @param \DateTime $date
     * @return ModeleChampPerso
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return ModeleChampPerso
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
     * Set typeReponse
     *
     * @param string $typeReponse
     * @return ModeleChampPerso
     */
    public function setTypeReponse($typeReponse)
    {
        $this->typeReponse = $typeReponse;

        return $this;
    }

    /**
     * Get typeReponse
     *
     * @return string 
     */
    public function getTypeReponse()
    {
        return $this->typeReponse;
    }
 
	
	public function __toString(){
		return $this->date->format('Y m d')."  ".$this->description." ".$this->typeReponse;
	}
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reponses;

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reponses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->formationFormule = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add reponses
     *
     * @param \OCIM\FormationsBundle\Entity\ReponsesChampPerso $reponses
     * @return ModeleChampPerso
     */
    public function addReponse(\OCIM\FormationsBundle\Entity\ReponsesChampPerso $reponses)
    {
        $this->reponses[] = $reponses;

        return $this;
    }

    /**
     * Remove reponses
     *
     * @param \OCIM\FormationsBundle\Entity\ReponsesChampPerso $reponses
     */
    public function removeReponse(\OCIM\FormationsBundle\Entity\ReponsesChampPerso $reponses)
    {
        $this->reponses->removeElement($reponses);
    }

    /**
     * Get reponses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReponses()
    {
        return $this->reponses;
    }

 
    /**
     * @var integer
     */
    private $ordre;


    /**
     * Set ordre
     *
     * @param integer $ordre
     * @return ModeleChampPerso
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre
     *
     * @return integer 
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

	
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $formationFormule;


    /**
     * Add formationFormule
     *
     * @param \OCIM\FormationsBundle\Entity\formationFormule $formationFormule
     * @return ModeleChampPerso
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
   
   
    /**
     * @var \OCIM\FormationsBundle\Entity\Formation
     */
    private $formation;


    /**
     * Set formation
     *
     * @param \OCIM\FormationsBundle\Entity\Formation $formation
     * @return ModeleChampPerso
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
	
	private $intervenant;
	
	public function setIntervenant($bool){
		$this->intervenant = $bool;
		return $this;
	}
	
	public function getIntervenant(){
		
		return $this->intervenant;
	}
	
	public function nombreReponsesPositives(){
		$nb = $this->getReponses()->filter(function($rep){
			if($rep->getReponse()) {return true;}
		});
		return $nb->count();
	}
}
