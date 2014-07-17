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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $responses;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->responses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add responses
     *
     * @param \OCIM\FormationsBundle\Entity\ReponsesLogistique $responses
     * @return ModeleLogistique
     */
    public function addResponse(\OCIM\FormationsBundle\Entity\ReponsesLogistique $responses)
    {
        $this->responses[] = $responses;

        return $this;
    }

    /**
     * Remove responses
     *
     * @param \OCIM\FormationsBundle\Entity\ReponsesLogistique $responses
     */
    public function removeResponse(\OCIM\FormationsBundle\Entity\ReponsesLogistique $responses)
    {
        $this->responses->removeElement($responses);
    }

    /**
     * Get responses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getResponses()
    {
        return $this->responses;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $responsesL;


    /**
     * Add responsesL
     *
     * @param \OCIM\FormationsBundle\Entity\ReponsesLogistique $responsesL
     * @return ModeleLogistique
     */
    public function addResponsesL(\OCIM\FormationsBundle\Entity\ReponsesLogistique $responsesL)
    {
        $this->responsesL[] = $responsesL;

        return $this;
    }

    /**
     * Remove responsesL
     *
     * @param \OCIM\FormationsBundle\Entity\ReponsesLogistique $responsesL
     */
    public function removeResponsesL(\OCIM\FormationsBundle\Entity\ReponsesLogistique $responsesL)
    {
        $this->responsesL->removeElement($responsesL);
    }

    /**
     * Get responsesL
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getResponsesL()
    {
        return $this->responsesL;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reponses;


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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reponsesLog;


    /**
     * Add reponsesLog
     *
     * @param \OCIM\FormationsBundle\Entity\ReponsesLogistique $reponsesLog
     * @return ModeleLogistique
     */
    public function addReponsesLog(\OCIM\FormationsBundle\Entity\ReponsesLogistique $reponsesLog)
    {
        $this->reponsesLog[] = $reponsesLog;

        return $this;
    }

    /**
     * Remove reponsesLog
     *
     * @param \OCIM\FormationsBundle\Entity\ReponsesLogistique $reponsesLog
     */
    public function removeReponsesLog(\OCIM\FormationsBundle\Entity\ReponsesLogistique $reponsesLog)
    {
        $this->reponsesLog->removeElement($reponsesLog);
    }

    /**
     * Get reponsesLog
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReponsesLog()
    {
        return $this->reponsesLog;
    }
    /**
     * @var \OCIM\FormationsBundle\Entity\formationFormule
     */
    private $formationformule;


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
}