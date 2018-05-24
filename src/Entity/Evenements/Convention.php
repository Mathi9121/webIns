<?php

namespace App\Entity\Evenements;

use Doctrine\ORM\Mapping as ORM;

/**
 * Convention
 * @ORM\Table(name="Convention")
 * @ORM\Entity(repositoryClass="App\Repository\Evenements\ConventionRepository")
 */
class Convention
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
     * @var string
     * 
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(type="date", nullable=true)
     */
    private $edition;

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
     * @var \Entity\Evenements\Inscription
     * 
     * @ORM\OneToOne(targetEntity="App\Entity\Evenements\Inscription", mappedBy="convention")
     */
    private $inscription;


    /**
     * Set inscription
     *
     * @param \Entity\Evenements\Inscription $inscription
     * @return Convention
     */
    public function setInscription(\App\Entity\Evenements\Inscription $inscription = null)
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

	public function __toString(){
		return $this->numero;
	}
    /**
     * @var \DateTime
     *
     * @ORM\Column(type="date", nullable=true)
     */
    private $etape1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="date", nullable=true)
     */
    private $etape2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="date", nullable=true)
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
    /**
     * @var \DateTime
     *
     * @ORM\Column(type="date", nullable=true)
     */
    private $etape4;


    /**
     * Set etape4
     *
     * @param \DateTime $etape4
     * @return Convention
     */
    public function setEtape4($etape4)
    {
        $this->etape4 = $etape4;

        return $this;
    }

    /**
     * Get etape4
     *
     * @return \DateTime
     */
    public function getEtape4()
    {
        return $this->etape4;
    }

    public function getNumeroToString(){
      if((!is_null($this->getNUmero()))&&(!is_null($this->getEdition()))){
        return $this->getEdition()->format('Y/m/').$this->getNumero();
      }
      else return false;
    }
}
