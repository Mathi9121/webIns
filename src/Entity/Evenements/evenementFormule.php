<?php

namespace App\Entity\Evenements;

use Doctrine\ORM\Mapping as ORM;

/**
 * evenementFormule
 * @ORM\Table(name="evenement_formule")
 * @ORM\Entity
 */
class evenementFormule
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
     * @var \Doctrine\Common\Collections\Collection
     * 
     * @ORM\ManyToMany(targetEntity="App\Entity\Evenements\ModeleChampPerso", inversedBy="evenementFormule", cascade={"all"})
     * @ORM\JoinTable(name="evenementformule_modele",
     *      joinColumns={@ORM\JoinColumn(name="evenementformule_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="modele_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $modeles;

    /**
     * @var \Entity\Evenements\Formule
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\Evenements\Formule", inversedBy="evenementFormule", fetch="EAGER", cascade={"persist"})
     * @ORM\JoinColumn(name="formule_id", referencedColumnName="id", onDelete= "CASCADE")
     */
    private $formule;

    /**
     * @var \Entity\Evenements\Evenement
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\Evenements\Evenement", inversedBy="evenementFormule", fetch="EAGER", cascade={"persist"})
     * @ORM\JoinColumn(name="evenement_id", referencedColumnName="id", onDelete= "CASCADE")
     */
    private $evenement;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->modeles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->inscriptions = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Add modeles
     *
     * @param \Entity\Evenements\ModeleChampPerso $modeles
     * @return evenementFormule
     */
    public function addModele(\App\Entity\Evenements\ModeleChampPerso $modeles)
    {
		if(!$this->modeles->contains($modeles)){
			$this->modeles[] = $modeles;
		}


        return $this;
    }

    /**
     * Remove modeles
     *
     * @param \Entity\Evenements\ModeleChampPerso $modeles
     */
    public function removeModele(\App\Entity\Evenements\ModeleChampPerso $modeles)
    {
        $this->modeles->removeElement($modeles);
    }

    /**
     * Get modeles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModeles()
    {
        return $this->modeles;
    }

    /**
     * Set formule
     *
     * @param \Entity\Evenements\Formule $formule
     * @return evenementFormule
     */
    public function setFormule(\App\Entity\Evenements\Formule $formule = null)
    {
        $this->formule = $formule;

        return $this;
    }

    /**
     * Get formule
     *
     * @return \Entity\Evenements\Formule
     */
    public function getFormule()
    {
        return $this->formule;
    }

    /**
     * Set evenement
     *
     * @param \Entity\Evenements\Evenement $evenement
     * @return evenementFormule
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

	public function __toString(){
		$tarif = $this->getFormule()->getTarif();
		$tarif = (is_numeric($tarif))? $tarif."€": $tarif;
		return $tarif." --- ".$this->getFormule()->getDescription();
	}
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Evenements\Inscription", mappedBy="evenementformule", cascade={"persist"})
     */
    private $inscriptions;


    /**
     * Add inscriptions
     *
     * @param \Entity\Evenements\Inscription $inscriptions
     * @return evenementFormule
     */
    public function addInscription(\App\Entity\Evenements\Inscription $inscriptions)
    {
        $this->inscriptions[] = $inscriptions;

        return $this;
    }

    /**
     * Remove inscriptions
     *
     * @param \Entity\Evenements\Inscription $inscriptions
     */
    public function removeInscription(\App\Entity\Evenements\Inscription $inscriptions)
    {
        $this->inscriptions->removeElement($inscriptions);
    }

    /**
     * Get inscriptions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInscriptions()
    {
        return $this->inscriptions;
    }

	public function getFormuleId(){
		return $this->getFormule()->getId();
	}
}
