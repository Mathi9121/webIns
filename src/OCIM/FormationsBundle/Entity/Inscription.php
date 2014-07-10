<?php

namespace OCIM\FormationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscription
 */
class Inscription
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateInscription;

    /**
     * @var string
     */
    private $statut;

    /**
     * @var string
     */
    private $attentes;

    /**
     * @var string
     */
    private $statutOrgFinanceur;

    /**
     * @var string
     */
    private $statutConvention;

    /**
     * @var string
     */
    private $hash;


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
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     * @return Inscription
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime 
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set statut
     *
     * @param string $statut
     * @return Inscription
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set attentes
     *
     * @param string $attentes
     * @return Inscription
     */
    public function setAttentes($attentes)
    {
        $this->attentes = $attentes;

        return $this;
    }

    /**
     * Get attentes
     *
     * @return string 
     */
    public function getAttentes()
    {
        return $this->attentes;
    }

    /**
     * Set statutOrgFinanceur
     *
     * @param string $statutOrgFinanceur
     * @return Inscription
     */
    public function setStatutOrgFinanceur($statutOrgFinanceur)
    {
        $this->statutOrgFinanceur = $statutOrgFinanceur;

        return $this;
    }

    /**
     * Get statutOrgFinanceur
     *
     * @return string 
     */
    public function getStatutOrgFinanceur()
    {
        return $this->statutOrgFinanceur;
    }

    /**
     * Set statutConvention
     *
     * @param string $statutConvention
     * @return Inscription
     */
    public function setStatutConvention($statutConvention)
    {
        $this->statutConvention = $statutConvention;

        return $this;
    }

    /**
     * Get statutConvention
     *
     * @return string 
     */
    public function getStatutConvention()
    {
        return $this->statutConvention;
    }

    /**
     * Set hash
     *
     * @param string $hash
     * @return Inscription
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get hash
     *
     * @return string 
     */
    public function getHash()
    {
        return $this->hash;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $personnes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->personnes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reponsesInscription = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add personnes
     *
     * @param \OCIM\FormationsBundle\Entity\Personne $personnes
     * @return Inscription
     */
    public function addPersonne(\OCIM\FormationsBundle\Entity\Personne $personnes)
    {
        $this->personnes[] = $personnes;

        return $this;
    }

    /**
     * Remove personnes
     *
     * @param \OCIM\FormationsBundle\Entity\Personne $personnes
     */
    public function removePersonne(\OCIM\FormationsBundle\Entity\Personne $personnes)
    {
        $this->personnes->removeElement($personnes);
    }

    /**
     * Get personnes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPersonnes()
    {
        return $this->personnes;
    }
    /**
     * @var \OCIM\FormationsBundle\Entity\Convention
     */
    private $convention;


    /**
     * Set convention
     *
     * @param \OCIM\FormationsBundle\Entity\Convention $convention
     * @return Inscription
     */
    public function setConvention(\OCIM\FormationsBundle\Entity\Convention $convention = null)
    {
        $this->convention = $convention;

        return $this;
    }

    /**
     * Get convention
     *
     * @return \OCIM\FormationsBundle\Entity\Convention 
     */
    public function getConvention()
    {
        return $this->convention;
    }


    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reponsesInscription;


    /**
     * Add reponsesInscription
     *
     * @param \OCIM\FormationsBundle\Entity\ReponsesLogistique $reponsesInscription
     * @return Inscription
     */
    public function addReponsesInscription(\OCIM\FormationsBundle\Entity\ReponsesLogistique $reponsesInscription)
    {
        $this->reponsesInscription[] = $reponsesInscription;

        return $this;
    }

    /**
     * Remove reponsesInscription
     *
     * @param \OCIM\FormationsBundle\Entity\ReponsesLogistique $reponsesInscription
     */
    public function removeReponsesInscription(\OCIM\FormationsBundle\Entity\ReponsesLogistique $reponsesInscription)
    {
        $this->reponsesInscription->removeElement($reponsesInscription);
    }

    /**
     * Get reponsesInscription
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReponsesInscription()
    {
        return $this->reponsesInscription;
    }
    /**
     * @var \OCIM\FormationsBundle\Entity\formationFormule
     */
    private $formationformule;


    /**
     * Set formationformule
     *
     * @param \OCIM\FormationsBundle\Entity\formationFormule $formationformule
     * @return Inscription
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
