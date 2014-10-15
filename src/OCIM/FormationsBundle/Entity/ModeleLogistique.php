<?php

namespace OCIM\FormationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModeleLogistique
 */
class ModeleLogistique
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
     * @return ModeleLogistique
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
     * @return ModeleLogistique
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
     * @return ModeleLogistique
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
     * @var \OCIM\FormationsBundle\Entity\formationFormule
     */
    private $formationformule;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reponses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add reponses
     *
     * @param \OCIM\FormationsBundle\Entity\ReponsesLogistique $reponses
     * @return ModeleLogistique
     */
    public function addReponse(\OCIM\FormationsBundle\Entity\ReponsesLogistique $reponses)
    {
        $this->reponses[] = $reponses;

        return $this;
    }

    /**
     * Remove reponses
     *
     * @param \OCIM\FormationsBundle\Entity\ReponsesLogistique $reponses
     */
    public function removeReponse(\OCIM\FormationsBundle\Entity\ReponsesLogistique $reponses)
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
     * Set formationformule
     *
     * @param \OCIM\FormationsBundle\Entity\formationFormule $formationformule
     * @return ModeleLogistique
     */
    public function setFormationformule(\OCIM\FormationsBundle\Entity\formationFormule $formationformule = null)
    {
        $this->formationformule = $formationformule;

        return $this;
    }

    /**
     * Get formationformule
     *
     * @return \OCIM\FormationsBundle\Entity\formationFormule 
     */
    public function getFormationformule()
    {
        return $this->formationformule;
    }
    /**
     * @var integer
     */
    private $ordre;


    /**
     * Set ordre
     *
     * @param integer $ordre
     * @return ModeleLogistique
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
     * Add formationformule
     *
     * @param \OCIM\FormationsBundle\Entity\formationFormule $formationformule
     * @return ModeleLogistique
     */
    public function addFormationformule(\OCIM\FormationsBundle\Entity\formationFormule $formationformule)
    {
        $this->formationformule[] = $formationformule;

        return $this;
    }

    /**
     * Remove formationformule
     *
     * @param \OCIM\FormationsBundle\Entity\formationFormule $formationformule
     */
    public function removeFormationformule(\OCIM\FormationsBundle\Entity\formationFormule $formationformule)
    {
        $this->formationformule->removeElement($formationformule);
    }
}
