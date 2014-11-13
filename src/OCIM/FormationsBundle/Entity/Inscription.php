<?php

namespace OCIM\FormationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Criteria;

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
     * @var string
     */
    private $ordre;

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
        
		$s = $this->statut;
		switch($s){
			case '1':
				$s = "accepté";
				break;
			case '2':
				$s = "en attente";
				break;
			case '3':
				$s = "annulé";
				break;
			}
		return $s;
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
     * Constructor
     */
    public function __construct()
    {
        $this->reponsesLogistique = new \Doctrine\Common\Collections\ArrayCollection();
        $this->personnes = new \Doctrine\Common\Collections\ArrayCollection();
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

   
    /**
     * @var \OCIM\ContactsBundle\Entity\Personne
     */
    private $stagiaire;


    /**
     * Set personne
     *
     * @param \OCIM\ContactsBundle\Entity\Personne $personne
     * @return Inscription
     */
    public function setStagiaire(\OCIM\ContactsBundle\Entity\Personne $stagiaire = null)
    {
        
		$this->stagiaire = $stagiaire;
		
		$this->addPersonne($stagiaire);
		
        return $this;
    }

    /**
     * Get personne
     *
     * @return \OCIM\ContactsBundle\Entity\Personne 
     */
    public function getStagiaire()
    {
		foreach($this->personnes as $personne){
			if($personne->getType() == 'stagiaire'){
				$this->stagiaire = $personne ;
			}
		}
		return $this->stagiaire;
    }
	
	 /**
     * @var \OCIM\ContactsBundle\Entity\Personne
     */
    private $signataire;


    /**
     * Set personne
     *
     * @param \OCIM\ContactsBundle\Entity\Personne $personne
     * @return Inscription
     */
    public function setSignataire(\OCIM\ContactsBundle\Entity\Personne $signataire = null)
    {
        
		$this->signataire = $signataire;
		
		$this->addPersonne($signataire);
		
        return $this;
    }

    /**
     * Get personne
     *
     * @return \OCIM\ContactsBundle\Entity\Personne 
     */
    public function getSignataire()
    {
		foreach($this->personnes as $personne){
			if($personne->getType() == 'signataire'){
				$this->signataire = $personne ;
			}
		}
		return $this->signataire;
    }
	
	
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $personnes;


    /**
     * Add personnes
     *
     * @param \OCIM\ContactsBundle\Entity\Personne $personnes
     * @return Inscription
     */
    public function addPersonne(\OCIM\ContactsBundle\Entity\Personne $personnes)
    {
        $this->personnes[] = $personnes;

        return $this;
    }

    /**
     * Remove personnes
     *
     * @param \OCIM\ContactsBundle\Entity\Personne $personnes
     */
    public function removePersonne(\OCIM\ContactsBundle\Entity\Personne $personnes)
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
	
	function onPrePersist() {
		$this->dateInscription = new \DateTime("now");
		$this->hash = hash("sha256", substr($this->getStagiaire()->getNom(), 0, 5).$this->dateInscription->format("d/m/Y"));
	}
	
	function __toString(){
		return $this->getStagiaire()->getNom();
	}
	
	
	public function setOrdre($ordre = null)
    {
        $this->ordre = $ordre;

        return $this;
    }

    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reponsesLogistique;


    /**
     * Add reponsesLogistique
     *
     * @param \OCIM\FormationsBundle\Entity\ReponsesLogistique $reponsesLogistique
     * @return Inscription
     */
    public function addReponsesLogistique(\OCIM\FormationsBundle\Entity\ReponsesLogistique $reponsesLogistique)
    {
        $this->reponsesLogistique[] = $reponsesLogistique;

        return $this;
    }

    /**
     * Remove reponsesLogistique
     *
     * @param \OCIM\FormationsBundle\Entity\ReponsesLogistique $reponsesLogistique
     */
    public function removeReponsesLogistique(\OCIM\FormationsBundle\Entity\ReponsesLogistique $reponsesLogistique)
    {
        $this->reponsesLogistique->removeElement($reponsesLogistique);
    }

    /**
     * Get reponsesLogistique
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReponsesLogistique()
    {
        return $this->reponsesLogistique;
    }
	
	public function getReponseByModeleId($modeleId, $return = null){
		
		$reponse =  $this->getReponsesLogistique()->filter(
			function($rl) use ($modeleId){
				if($rl->getModele()->getId() == $modeleId){
					return true;
				}
			}
		)->first();
		
		if($reponse){
			if(!is_null($return)){
				if($return == 'bool'){
					return ($reponse->getReponse())? '1' : '0' ;
				}
				else return $reponse->getReponseText();
			}
			else{
				return $reponse;
			}
		}
		else return 0;
	}
	
	public function setNumberStatut( $str){
	
		$this->statut = $str;
		
		if($str == '2'){
			if($this->ordre == null){
				$this->setOrdre(15000);
			}
		}
		
		return $this;
	}
	
	public function getNumberStatut(){
	
		return $this->statut;
		
	}
}
