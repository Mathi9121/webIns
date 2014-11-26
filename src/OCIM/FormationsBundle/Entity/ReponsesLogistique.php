<?php

namespace OCIM\FormationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReponsesLogistique
 */
class ReponsesLogistique
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $reponse;

    /**
     * @var string
     */
    private $reponseText;

    /**
     * @var \DateTime
     */
    private $date;
	

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
     * Set reponse
     *
     * @param boolean $reponse
     * @return ReponsesLogistique
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get reponse
     *
     * @return boolean 
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * Set reponseText
     *
     * @param string $reponseText
     * @return ReponsesLogistique
     */
    public function setReponseText($reponseText)
    {
        $this->reponseText = $reponseText;

        return $this;
    }

    /**
     * Get reponseText
     *
     * @return string 
     */
    public function getReponseText()
    {
        return $this->reponseText;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return ReponsesLogistique
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
  
  
  
    private $modele;


    /**
     * Set modele
     *
     * @param \OCIM\FormationsBundle\Entity\ModeleLogistique $modele
     * @return ReponsesLogistique
     */
    public function setModele(\OCIM\FormationsBundle\Entity\ModeleLogistique $modele = null)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return \OCIM\FormationsBundle\Entity\ModeleLogistique 
     */
    public function getModele()
    {
        return $this->modele;
    }

	
    private $inscription;


    /**
     * Set inscription
     *
     * @param \OCIM\FormationsBundle\Entity\Inscription $inscription
     * @return ReponsesLogistique
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
     * @var \OCIM\ContactsBundle\Entity\Personne
     */
    private $personne;


    /**
     * Set personne
     *
     * @param \OCIM\ContactsBundle\Entity\Personne $personne
     * @return ReponsesLogistique
     */
    public function setPersonne(\OCIM\ContactsBundle\Entity\Personne $personne = null)
    {
        $this->personne = $personne;

        return $this;
    }

    /**
     * Get personne
     *
     * @return \OCIM\ContactsBundle\Entity\Personne 
     */
    public function getPersonne()
    {
        return $this->personne;
    }
}
