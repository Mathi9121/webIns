<?php

namespace App\Entity\Evenements;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use App\Entity\Evenements\TypeEvenement;
use App\Entity\Evenements\ModeleChampPerso;

/**
 * Evenement
 */
class Evenement
{

	protected $type;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $intitule;

    /**
     * @var string
     */
    private $lieu;

    /**
     * @var \DateTime
     */
    private $dateDebut;

    /**
     * @var \DateTime
     */
    private $dateFin;

    /**
     * @var string
     */
    private $dateText;

    /**
     * @var decimal
     */
    private $nbHeures;


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
     * Set intitule
     *
     * @param string $intitule
     * @return Evenement
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     * @return Evenement
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Evenement
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Evenement
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set dateText
     *
     * @param string $dateText
     * @return Evenement
     */
    public function setDateText($dateText)
    {
        $this->dateText = $dateText;

        return $this;
    }

    /**
     * Get dateText
     *
     * @return string
     */
    public function getDateText()
    {
        return $this->dateText;
    }

    /**
     * Set nbHeures
     *
     * @param integer $nbHeures
     * @return Evenement
     */
    public function setNbHeures($nbHeures)
    {
        $this->nbHeures = $nbHeures;

        return $this;
    }

    /**
     * Get nbHeures
     *
     * @return integer
     */
    public function getNbHeures()
    {
        return $this->nbHeures;
    }

    /**
     * Set type
     *
     * @param \Entity\Evenements\TypeEvenement $type
     * @return Evenement
     */
    public function setType(\Entity\Evenements\TypeEvenement $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Entity\Evenements\TypeEvenement
     */
    public function getType()
    {
        return $this->type;
    }


	/**
     * To string
     *
     * @return String
     */
    public function __toString()
    {
        return $this->getIntitule()." | ".$this->getLieu();
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $evenementFormule;
	private $modeles;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->evenementFormule = new \Doctrine\Common\Collections\ArrayCollection();
        $this->modeles = new \Doctrine\Common\Collections\ArrayCollection();

    }

    /**
     * Add evenementFormule
     *
     * @param \Entity\Evenements\evenementFormule $evenementFormule
     * @return Evenement
     */
    public function addEvenementFormule(\Entity\Evenements\evenementFormule $evenementFormule)
    {
		$evenementFormule->setEvenement($this);
        $this->evenementFormule[] = $evenementFormule;

        return $this;
    }

    /**
     * Remove evenementFormule
     *
     * @param \Entity\Evenements\evenementFormule $evenementFormule
     */
    public function removeEvenementFormule(\Entity\Evenements\evenementFormule $evenementFormule)
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

	public function getFormules()
    {
		$formules = new ArrayCollection();
        foreach($this->evenementFormule as $ff){
			$formules->add($ff->getFormule());
		}
		return $formules;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $intervenants;


    /**
     * Add intervenants
     *
     * @param \Entity\Contacts\Intervenant $intervenants
     * @return Evenement
     */
    public function addIntervenant(\Entity\Contacts\Intervenant $intervenants)
    {
        $this->intervenants[] = $intervenants;

        return $this;
    }

    /**
     * Remove intervenants
     *
     * @param \Entity\Contacts\Intervenant $intervenants
     */
    public function removeIntervenant(\Entity\Contacts\Intervenant $intervenants)
    {
        $this->intervenants->removeElement($intervenants);
    }

    /**
     * Get intervenants
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIntervenants()
    {
        return $this->intervenants;
    }

	public function getModeles(){
		return $this->modeles;
	}

	public function addModele(\Entity\Evenements\ModeleChampPerso $ml)
    {
		$this->modeles[] = $ml;
        return $this;
    }

	public function removeModele(\Entity\Evenements\ModeleChampPerso $ml)
    {
        $this->modeles->removeElement($ml);
    }

	public function setModeles(ArrayCollection $modeles){
		$this->modeles = $modeles;

		foreach($this->modeles as $modele){
			if($modele->getEvenement() != null){
				$modele->setIntervenant(true);
			}
		}

		return $this;
	}
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $modelesIntervenants;


    /**
     * Add modelesIntervenants
     *
     * @param \Entity\Evenements\ModeleChampPerso $modelesIntervenants
     * @return Evenement
     */
    public function addModelesIntervenant(\Entity\Evenements\ModeleChampPerso $modelesIntervenants)
    {
        $this->modelesIntervenants[] = $modelesIntervenants;

        return $this;
    }

    /**
     * Remove modelesIntervenants
     *
     * @param \Entity\Evenements\ModeleChampPerso $modelesIntervenants
     */
    public function removeModelesIntervenant(\Entity\Evenements\ModeleChampPerso $modelesIntervenants)
    {
        $this->modelesIntervenants->removeElement($modelesIntervenants);
    }

    /**
     * Get modelesIntervenants
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModelesIntervenants()
    {
        return $this->modelesIntervenants;
    }
    /**
     * @var string
     */
    private $nbJours;


    /**
     * Set nbJours
     *
     * @param string $nbJours
     * @return Evenement
     */
    public function setNbJours($nbJours)
    {
        $this->nbJours = $nbJours;

        return $this;
    }

    /**
     * Get nbJours
     *
     * @return string
     */
    public function getNbJours()
    {
        return $this->nbJours;
    }


		private $eventType;

		public function getEventType(){
			if($this->eventType == null){
				$Rclass = new \ReflectionClass($this);
				return strtolower($Rclass->getShortName());
			}
			else return $this->eventType;
		}

		public function setEventType($str = null){
			$this->eventType = $str;
		}

		public function getPrettyEventType($multiple = false){
			$index = $this->getEventType();
			$index .= ($multiple)? 's': '';
			$eventTypes = array(
				"events" => "&Eacute;vénements",
				"event" => "&Eacute;vénement",
				"formation" => "Formation",
				"formations" => "Formations",
			);
			return $eventTypes[$index];
		}

}
