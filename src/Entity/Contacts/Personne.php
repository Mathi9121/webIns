<?php

namespace App\Entity\Contacts;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Personne
 * @ORM\Table(name="Personne")
 * @ORM\Entity(repositoryClass="App\Repository\Contacts\PersonneRepository")
 */
class Personne
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
     * @var string
     * 
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $civilite;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fonction;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tel;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mail;

    /**
     * @var string
     * 
     * @ORM\Column(type="string")
     */
	private $type;

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
        $this->nom = mb_strtoupper($nom);

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


    public function getType()
    {
        $Rclass = new \ReflectionClass($this);
        return strtolower($Rclass->getShortName());
    }

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
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
     * @var \Entity\Contacts\Adresse
     * 
     * @ORM\OneToOne(targetEntity="App\Entity\Contacts\Adresse")
     * @ORM\JoinColumn(name="adresse_id", referencedColumnName="id")
     */
    private $adresse;


    /**
     * Set adresse
     *
     * @param \Entity\Contacts\Adresse $adresse
     * @return Personne
     */
    public function setAdresse(\Entity\Contacts\Adresse $adresse = null)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return \Entity\Contacts\Adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

	public function __toString(){
		return $this->prenom;
	}
    /**
     * @var \Entity\Evenements\Inscription
     * 
     * @ORM\ManyToMany(targetEntity="App\Entity\Evenements\Inscription", mappedBy="personnes")
     */
    private $inscription;


    /**
     * Set inscription
     *
     * @param \Entity\Evenements\Inscription $inscription
     * @return Personne
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $intervenant;

    /**
     * Constructor
     */
    public function __construct($type = null)
    {
        $this->intervenant = new ArrayCollection();
        $this->inscription = new ArrayCollection();
		    $this->type = $type;
    }

    /**
     * Add intervenant
     *
     * @param \Entity\Contacts\Intervenant $intervenant
     * @return Personne
     */
    public function addIntervenant(\Entity\Contacts\Intervenant $intervenant)
    {
        $this->intervenant[] = $intervenant;

        return $this;
    }

    /**
     * Remove intervenant
     *
     * @param \Entity\Contacts\Intervenant $intervenant
     */
    public function removeIntervenant(\Entity\Contacts\Intervenant $intervenant)
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

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
     private $commentaire;

	/**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Personne
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return $commentaire
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     * 
     * @ORM\OneToMany(targetEntity="App\Entity\Evenements\ReponsesChampPerso", mappedBy="personne")
     */
    private $reponsesChampPerso;


    /**
     * Add reponsesChampPerso
     *
     * @param \Entity\Evenements\ReponsesChampPerso $reponsesChampPerso
     * @return Personne
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

	public function getReponseByModeleId($modeleId, $return = null){

		$reponse =  $this->getReponsesChampPerso()->filter(
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
		else return null;
	}

  public function getCivilitepretty(){
    $array = array(
      'Mme' => 'Madame',
      'Mr' => 'Monsieur',
      'Mlle' => 'Mademoiselle',
    );
    return $array[$this->getCivilite()];
  }


    /**
     * Add inscription
     *
     * @param \Entity\Evenements\Inscription $inscription
     * @return Personne
     */
    public function addInscription(\Entity\Evenements\Inscription $inscription)
    {
        $this->inscription[] = $inscription;

        return $this;
    }

    /**
     * Remove inscription
     *
     * @param \Entity\Evenements\Inscription $inscription
     */
    public function removeInscription(\Entity\Evenements\Inscription $inscription)
    {
        $this->inscription->removeElement($inscription);
    }
}
