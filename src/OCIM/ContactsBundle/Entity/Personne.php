<?php

namespace OCIM\ContactsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personne
 */
class Personne
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $civilite;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $fonction;

    /**
     * @var string
     */
    private $tel;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var string
     */
    private $mailAdmin;


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
     * Set civilite
     *
     * @param string $civilite
     * @return Personne
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return string 
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Personne
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Personne
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     * @return Personne
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return string 
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Personne
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Personne
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set mailAdmin
     *
     * @param string $mailAdmin
     * @return Personne
     */
    public function setMailAdmin($mailAdmin)
    {
        $this->mailAdmin = $mailAdmin;

        return $this;
    }

    /**
     * Get mailAdmin
     *
     * @return string 
     */
    public function getMailAdmin()
    {
        return $this->mailAdmin;
    }
    /**
     * @var \OCIM\ContactsBundle\Entity\TypePersonne
     */
    private $type;


    /**
     * Set type
     *
     * @param \OCIM\ContactsBundle\Entity\TypePersonne $type
     * @return Personne
     */
    public function setType(\OCIM\ContactsBundle\Entity\TypePersonne $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \OCIM\ContactsBundle\Entity\TypePersonne 
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @var string
     */
    private $fax;


    /**
     * Set fax
     *
     * @param string $fax
     * @return Personne
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }
    /**
     * @var \OCIM\ContactsBundle\Entity\Adresse
     */
    private $adresse;


    /**
     * Set adresse
     *
     * @param \OCIM\ContactsBundle\Entity\Adresse $adresse
     * @return Personne
     */
    public function setAdresse(\OCIM\ContactsBundle\Entity\Adresse $adresse = null)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return \OCIM\ContactsBundle\Entity\Adresse 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
	
	public function __toString(){
		return $this->prenom." ".$this->prenom;
	}
    /**
     * @var \OCIM\FormationsBundle\Entity\Inscription
     */
    private $inscription;


    /**
     * Set inscription
     *
     * @param \OCIM\FormationsBundle\Entity\Inscription $inscription
     * @return Personne
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
    private $intervenant;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->intervenant = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add intervenant
     *
     * @param \OCIM\ContactsBundle\Entity\Intervenant $intervenant
     * @return Personne
     */
    public function addIntervenant(\OCIM\ContactsBundle\Entity\Intervenant $intervenant)
    {
        $this->intervenant[] = $intervenant;

        return $this;
    }

    /**
     * Remove intervenant
     *
     * @param \OCIM\ContactsBundle\Entity\Intervenant $intervenant
     */
    public function removeIntervenant(\OCIM\ContactsBundle\Entity\Intervenant $intervenant)
    {
        $this->intervenant->removeElement($intervenant);
    }

    /**
     * Get intervenant
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIntervenant()
    {
        return $this->intervenant;
    }
}
