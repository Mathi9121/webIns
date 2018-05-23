<?php

namespace App\Entity\Evenements;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Criteria;

/**
 * Inscription
 * @ORM\Table(name="Inscription")
 * @ORM\Entity(repositoryClass="App\Repository\Evenements\InscriptionRepository")
 */
class Inscription
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
     * @var \DateTime
     * 
     * @ORM\Column(type="datetime")
     */
    private $dateInscription;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=255)
     */
    private $statut;

    /**
     * @var string
     * 
     * @ORM\Column(type="text", nullable=true)
     */
    private $attentes;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $statutOrgFinanceur;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", nullable=true)
     */
    private $statutConvention;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $hash;

	/**
     * @var string
     * 
     * @ORM\Column(type="integer", nullable=true)
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
        $this->reponsesChampPerso = new \Doctrine\Common\Collections\ArrayCollection();
        $this->personnes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @var \Entity\Evenements\Convention
     * 
     * @ORM\OneToOne(targetEntity="App\Entity\Evenements\Convention", inversedBy="inscription")
     * @ORM\JoinColumn(name="convention_id", referencedColumnName="id")
     */
    private $convention;


    /**
     * Set convention
     *
     * @param \Entity\Evenements\Convention $convention
     * @return Inscription
     */
    public function setConvention(\Entity\Evenements\Convention $convention = null)
    {
        $this->convention = $convention;

        return $this;
    }

    /**
     * Get convention
     *
     * @return \Entity\Evenements\Convention
     */
    public function getConvention()
    {
        return $this->convention;
    }


   /**
    *
    * @ORM\ManyToOne(targetEntity="App\Entity\Evenements\evenementFormule", inversedBy="inscriptions")
    * @ORM\JoinColumn(name="evenementformule_id", referencedColumnName="id")
    */
    private $evenementformule;


    /**
     * Set evenementformule
     *
     * @param \Entity\Evenements\evenementFormule $evenementformule
     * @return Inscription
     */
    public function setEvenementformule(\Entity\Evenements\evenementFormule $evenementformule = null)
    {
        $this->evenementformule = $evenementformule;

        return $this;
    }

    /**
     * Get evenementformule
     *
     * @return \Entity\Evenements\evenementFormule
     */
    public function getEvenementformule()
    {
        return $this->evenementformule;
    }


    /**
     * @var \Entity\Contacts\Personne
     */
    private $stagiaire;


    /**
     * Set personne
     *
     * @param \Entity\Contacts\Personne $personne
     * @return Inscription
     */
    public function setStagiaire(\Entity\Contacts\Stagiaire $stagiaire = null)
    {

		$this->stagiaire = $stagiaire;

		$this->addPersonne($stagiaire);

        return $this;
    }

    /**
     * Get personne
     *
     * @return \Entity\Contacts\Personne
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
     * @var \Entity\Contacts\Personne
     */
    private $signataire;


    /**
     * Set personne
     *
     * @param \Entity\Contacts\Personne $personne
     * @return Inscription
     */
    public function setSignataire(\Entity\Contacts\Signataire $signataire = null)
    {

		$this->signataire = $signataire;

		$this->addPersonne($signataire);

        return $this;
    }

    /**
     * Get personne
     *
     * @return \Entity\Contacts\Personne
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
     * @var \Entity\Contacts\Personne
     */
    private $admin;


    /**
     * Set personne
     *
     * @param \Entity\Contacts\Personne $personne
     * @return Inscription
     */
    public function setAdmin(\Entity\Contacts\Admin $admin = null)
    {

		$this->admin = $admin;

		$this->addPersonne($admin);

        return $this;
    }

    /**
     * Get personne
     *
     * @return \Entity\Contacts\Personne
     */
    public function getAdmin()
    {
		foreach($this->personnes as $personne){
			if($personne->getType() == 'admin'){
				$this->admin = $personne ;
			}
		}
		return $this->admin;
    }


    /**
     * @var \Doctrine\Common\Collections\Collection
     * 
     * @ORM\ManyToMany(targetEntity="App\Entity\Contacts\Personne", inversedBy="inscription")
     * @ORM\JoinTable(name="inscription_personnes",
     *      joinColumns={@ORM\JoinColumn(name="inscription_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="personne_id", referencedColumnName="id")}
     *      )
     */
    private $personnes;


    /**
     * Add personnes
     *
     * @param \Entity\Contacts\Personne $personnes
     * @return Inscription
     */
    public function addPersonne(\Entity\Contacts\Personne $personnes)
    {
        $this->personnes[] = $personnes;

        return $this;
    }

    /**
     * Remove personnes
     *
     * @param \Entity\Contacts\Personne $personnes
     */
    public function removePersonne(\Entity\Contacts\Personne $personnes)
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
		$this->hash = hash("sha256", substr($this->getStagiaire()->getNom(), 0, 5).$this->dateInscription->format("d/m/Y:H:i:s"));
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
    private $reponsesChampPerso;


    /**
     * Add reponsesChampPerso
     *
     * @param \Entity\Evenements\ReponsesChampPerso $reponsesChampPerso
     * @return Inscription
     */
    public function addReponsesChampPerso(\Entity\Evenements\ReponsesChampPerso $reponsesChampPerso)
    {
        $this->reponsesChampPerso[] = $reponsesChampPerso;

        return $this;
    }

    /**
     * Remove reponsesChampPerso
     *
     * @param \Entity\Evenements\ReponsesChampPerso $reponsesChampPerso
     */
    public function removeReponsesChampPerso(\Entity\Evenements\ReponsesChampPerso $reponsesChampPerso)
    {
        $this->reponsesChampPerso->removeElement($reponsesChampPerso);
    }

    /**
     * Get reponsesChampPerso
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReponsesChampPerso()
    {
        return $this->reponsesChampPerso;
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
    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $provenancePCST;


    /**
     * Set provenancePCST
     *
     * @param boolean $provenancePCST
     * @return Inscription
     */
    public function setProvenancePCST($provenancePCST)
    {
        $this->provenancePCST = $provenancePCST;

        return $this;
    }

    /**
     * Get provenancePCST
     *
     * @return boolean
     */
    public function getProvenancePCST()
    {
        return $this->provenancePCST;
    }
    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $statutFinancement;


    /**
     * Set statutFinancement
     *
     * @param boolean $statutFinancement
     * @return Inscription
     */
    public function setStatutFinancement($statutFinancement)
    {
        $this->statutFinancement = $statutFinancement;

        return $this;
    }

    /**
     * Get statutFinancement
     *
     * @return boolean
     */
    public function getStatutFinancement()
    {
        return $this->statutFinancement;
    }
}
