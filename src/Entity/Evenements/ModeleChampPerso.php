<?php

namespace App\Entity\Evenements;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModeleChampPerso
 * @ORM\Table(name="ModeleChampPerso")
 * @ORM\Entity(repositoryClass="App\Repository\Evenements\ModeleChampPersoRepository")
 */
class ModeleChampPerso
{
    /**
     * @var integer
     * 
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=255)
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
     * 
     * @ORM\OneToMany(targetEntity="App\Entity\Evenements\ReponsesChampPerso", mappedBy="modele", cascade={"all"})
     */
    private $reponses;

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reponses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->evenementFormule = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add reponses
     *
     * @param \Entity\Evenements\ReponsesChampPerso $reponses
     * @return ModeleChampPerso
     */
    public function addReponse(\App\Entity\Evenements\ReponsesChampPerso $reponses)
    {
        $this->reponses[] = $reponses;

        return $this;
    }

    /**
     * Remove reponses
     *
     * @param \Entity\Evenements\ReponsesChampPerso $reponses
     */
    public function removeReponse(\App\Entity\Evenements\ReponsesChampPerso $reponses)
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
     *
     * @ORM\Column(type="integer", nullable=true)
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
     * 
     * @ORM\ManyToMany(targetEntity="App\Entity\Evenements\evenementFormule", mappedBy="modeles", cascade={"persist"})
     */
    private $evenementFormule;


    /**
     * Add evenementFormule
     *
     * @param \Entity\Evenements\evenementFormule $evenementFormule
     * @return ModeleChampPerso
     */
    public function addEvenementFormule(\App\Entity\Evenements\evenementFormule $evenementFormule)
    {
        $this->evenementFormule[] = $evenementFormule;

        return $this;
    }

    /**
     * Remove evenementFormule
     *
     * @param \Entity\Evenements\evenementFormule $evenementFormule
     */
    public function removeEvenementFormule(\App\Entity\Evenements\evenementFormule $evenementFormule)
    {
        $this->evenementFormule->removeElement($evenementFormule);
    }

    /**
     * Get evenementFormule
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvenementFormule()
    {
        return $this->evenementFormule;
    }
   
   
    /**
     * @var \Entity\Evenements\Evenement
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\Evenements\Evenement", inversedBy="modelesIntervenants")
     * @ORM\JoinColumn(name="evenement_id", referencedColumnName="id")
     */
    private $evenement;


    /**
     * Set evenement
     *
     * @param \Entity\Evenements\Evenement $evenement
     * @return ModeleChampPerso
     */
    public function setEvenement(\App\Entity\Evenements\Evenement $evenement = null)
    {
        $this->evenement = $evenement;

        return $this;
    }

    /**
     * Get evenement
     *
     * @return \Entity\Evenements\Evenement 
     */
    public function getEvenement()
    {
        return $this->evenement;
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
