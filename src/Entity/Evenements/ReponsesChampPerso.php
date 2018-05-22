<?php

namespace App\Entity\Evenements;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReponsesChampPerso
 * @ORM\Table(name="ReponsesChampPerso")
 * @ORM\Entity(repositoryClass="App\Repository\Evenements\ReponsesChampPersoRepository")
 */
class ReponsesChampPerso
{
    /**
     * @var integer
     * 
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var boolean
     * 
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $reponse;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $reponseText;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(type="datetime", nullable=true)
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
     * @return ReponsesChampPerso
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
     * @return ReponsesChampPerso
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
     * @return ReponsesChampPerso
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
     * @param \Entity\Evenements\ModeleChampPerso $modele
     * @return ReponsesChampPerso
     */
    public function setModele(\Entity\Evenements\ModeleChampPerso $modele = null)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return \Entity\Evenements\ModeleChampPerso 
     */
    public function getModele()
    {
        return $this->modele;
    }

	
    private $inscription;


    /**
     * Set inscription
     *
     * @param \Entity\Evenements\Inscription $inscription
     * @return ReponsesChampPerso
     */
    public function setInscription(\Entity\Evenements\Inscription $inscription = null)
    {
        $this->inscription = $inscription;

        return $this;
    }

    /**
     * Get inscription
     *
     * @return \Entity\Evenements\Inscription 
     */
    public function getInscription()
    {
        return $this->inscription;
    }
    /**
     * @var \Entity\Contacts\Personne
     */
    private $personne;


    /**
     * Set personne
     *
     * @param \Entity\Contacts\Personne $personne
     * @return ReponsesChampPerso
     */
    public function setPersonne(\Entity\Contacts\Personne $personne = null)
    {
        $this->personne = $personne;

        return $this;
    }

    /**
     * Get personne
     *
     * @return \Entity\Contacts\Personne 
     */
    public function getPersonne()
    {
        return $this->personne;
    }
}
