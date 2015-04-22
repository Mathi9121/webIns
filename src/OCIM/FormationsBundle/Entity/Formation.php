<?php

namespace OCIM\FormationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use OCIM\FormationsBundle\Entity\TypeFormation;
use OCIM\FormationsBundle\Entity\ModeleChampPerso;

/**
 * Formation
 */
class Formation
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
     * @return Formation
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
     * @return Formation
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
     * @return Formation
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
     * @return Formation
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
     * @return Formation
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
     * @return Formation
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
     * @param \OCIM\FormationsBundle\Entity\TypeFormation $type
     * @return Formation
     */
    public function setType(\OCIM\FormationsBundle\Entity\TypeFormation $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \OCIM\FormationsBundle\Entity\TypeFormation
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
    private $formationFormule;
	private $modeles;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->formationFormule = new \Doctrine\Common\Collections\ArrayCollection();
        $this->modeles = new \Doctrine\Common\Collections\ArrayCollection();

    }

    /**
     * Add formationFormule
     *
     * @param \OCIM\FormationsBundle\Entity\formationFormule $formationFormule
     * @return Formation
     */
    public function addFormationFormule(\OCIM\FormationsBundle\Entity\formationFormule $formationFormule)
    {
		$formationFormule->setFormation($this);
        $this->formationFormule[] = $formationFormule;

        return $this;
    }

    /**
     * Remove formationFormule
     *
     * @param \OCIM\FormationsBundle\Entity\formationFormule $formationFormule
     */
    public function removeFormationFormule(\OCIM\FormationsBundle\Entity\formationFormule $formationFormule)
    {
        $this->formationFormule->removeElement($formationFormule);
    }

    /**
     * Get formationFormule
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFormationFormule()
    {
        return $this->formationFormule;
    }

	public function getFormules()
    {
		$formules = new ArrayCollection();
        foreach($this->formationFormule as $ff){
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
     * @param \OCIM\ContactsBundle\Entity\Intervenant $intervenants
     * @return Formation
     */
    public function addIntervenant(\OCIM\ContactsBundle\Entity\Intervenant $intervenants)
    {
        $this->intervenants[] = $intervenants;

        return $this;
    }

    /**
     * Remove intervenants
     *
     * @param \OCIM\ContactsBundle\Entity\Intervenant $intervenants
     */
    public function removeIntervenant(\OCIM\ContactsBundle\Entity\Intervenant $intervenants)
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

	public function addModele(\OCIM\FormationsBundle\Entity\ModeleChampPerso $ml)
    {
		$this->modeles[] = $ml;
        return $this;
    }

	public function removeModele(\OCIM\FormationsBundle\Entity\ModeleChampPerso $ml)
    {
        $this->modeles->removeElement($ml);
    }

	public function setModeles(ArrayCollection $modeles){
		$this->modeles = $modeles;

		foreach($this->modeles as $modele){
			if($modele->getFormation() != null){
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
     * @param \OCIM\FormationsBundle\Entity\ModeleChampPerso $modelesIntervenants
     * @return Formation
     */
    public function addModelesIntervenant(\OCIM\FormationsBundle\Entity\ModeleChampPerso $modelesIntervenants)
    {
        $this->modelesIntervenants[] = $modelesIntervenants;

        return $this;
    }

    /**
     * Remove modelesIntervenants
     *
     * @param \OCIM\FormationsBundle\Entity\ModeleChampPerso $modelesIntervenants
     */
    public function removeModelesIntervenant(\OCIM\FormationsBundle\Entity\ModeleChampPerso $modelesIntervenants)
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
     * @return Formation
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
}
