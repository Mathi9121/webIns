<?php

namespace OCIM\FormationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Convention
 */
class Convention
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $numero;

    /**
     * @var \DateTime
     */
    private $edition;

    /**
     * @var \DateTime
     */
    private $envoiPresidentU2ex;

    /**
     * @var \DateTime
     */
    private $retourPresidentU2ex;

    /**
     * @var \DateTime
     */
    private $envoiOrganisme2ex;

    /**
     * @var \DateTime
     */
    private $retourOrganisme1ex;

    /**
     * @var \DateTime
     */
    private $envoiPresidentU1ex;


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
     * Set numero
     *
     * @param string $numero
     * @return Convention
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set edition
     *
     * @param \DateTime $edition
     * @return Convention
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;

        return $this;
    }

    /**
     * Get edition
     *
     * @return \DateTime 
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * Set envoiPresidentU2ex
     *
     * @param \DateTime $envoiPresidentU2ex
     * @return Convention
     */
    public function setEnvoiPresidentU2ex($envoiPresidentU2ex)
    {
        $this->envoiPresidentU2ex = $envoiPresidentU2ex;

        return $this;
    }

    /**
     * Get envoiPresidentU2ex
     *
     * @return \DateTime 
     */
    public function getEnvoiPresidentU2ex()
    {
        return $this->envoiPresidentU2ex;
    }

    /**
     * Set retourPresidentU2ex
     *
     * @param \DateTime $retourPresidentU2ex
     * @return Convention
     */
    public function setRetourPresidentU2ex($retourPresidentU2ex)
    {
        $this->retourPresidentU2ex = $retourPresidentU2ex;

        return $this;
    }

    /**
     * Get retourPresidentU2ex
     *
     * @return \DateTime 
     */
    public function getRetourPresidentU2ex()
    {
        return $this->retourPresidentU2ex;
    }

    /**
     * Set envoiOrganisme2ex
     *
     * @param \DateTime $envoiOrganisme2ex
     * @return Convention
     */
    public function setEnvoiOrganisme2ex($envoiOrganisme2ex)
    {
        $this->envoiOrganisme2ex = $envoiOrganisme2ex;

        return $this;
    }

    /**
     * Get envoiOrganisme2ex
     *
     * @return \DateTime 
     */
    public function getEnvoiOrganisme2ex()
    {
        return $this->envoiOrganisme2ex;
    }

    /**
     * Set retourOrganisme1ex
     *
     * @param \DateTime $retourOrganisme1ex
     * @return Convention
     */
    public function setRetourOrganisme1ex($retourOrganisme1ex)
    {
        $this->retourOrganisme1ex = $retourOrganisme1ex;

        return $this;
    }

    /**
     * Get retourOrganisme1ex
     *
     * @return \DateTime 
     */
    public function getRetourOrganisme1ex()
    {
        return $this->retourOrganisme1ex;
    }

    /**
     * Set envoiPresidentU1ex
     *
     * @param \DateTime $envoiPresidentU1ex
     * @return Convention
     */
    public function setEnvoiPresidentU1ex($envoiPresidentU1ex)
    {
        $this->envoiPresidentU1ex = $envoiPresidentU1ex;

        return $this;
    }

    /**
     * Get envoiPresidentU1ex
     *
     * @return \DateTime 
     */
    public function getEnvoiPresidentU1ex()
    {
        return $this->envoiPresidentU1ex;
    }
    /**
     * @var \OCIM\FormationsBundle\Entity\Inscription
     */
    private $inscription;


    /**
     * Set inscription
     *
     * @param \OCIM\FormationsBundle\Entity\Inscription $inscription
     * @return Convention
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
	
	public function __toString(){
		return $this->numero;
	}
    /**
     * @var \DateTime
     */
    private $etape1;

    /**
     * @var \DateTime
     */
    private $etape2;

    /**
     * @var \DateTime
     */
    private $etape3;


    /**
     * Set etape1
     *
     * @param \DateTime $etape1
     * @return Convention
     */
    public function setEtape1($etape1)
    {
        $this->etape1 = $etape1;

        return $this;
    }

    /**
     * Get etape1
     *
     * @return \DateTime 
     */
    public function getEtape1()
    {
        return $this->etape1;
    }

    /**
     * Set etape2
     *
     * @param \DateTime $etape2
     * @return Convention
     */
    public function setEtape2($etape2)
    {
        $this->etape2 = $etape2;

        return $this;
    }

    /**
     * Get etape2
     *
     * @return \DateTime 
     */
    public function getEtape2()
    {
        return $this->etape2;
    }

    /**
     * Set etape3
     *
     * @param \DateTime $etape3
     * @return Convention
     */
    public function setEtape3($etape3)
    {
        $this->etape3 = $etape3;

        return $this;
    }

    /**
     * Get etape3
     *
     * @return \DateTime 
     */
    public function getEtape3()
    {
        return $this->etape3;
    }
}
