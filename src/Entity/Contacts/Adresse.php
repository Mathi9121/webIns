<?php

namespace App\Entity\Contacts;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresse
 * @ORM\Entity
 */
class Adresse
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
     * @ORM\Column(type="string")
     */
    private $nomStructure;

    /**
     * @var string
     * 
     * @ORM\Column(type="string")
     */
    private $adresse;

    /**
     * @var string
     * 
     * @ORM\Column(type="string")
     */
    private $adresseComplement;

    /**
     * @var string
     * 
     * @ORM\Column(type="string")
     */
    private $cP;

    /**
     * @var string
     * 
     * @ORM\Column(type="string")
     */
    private $ville;

    /**
     * @var string
     * 
     * @ORM\Column(type="string")
     */
    private $pays;


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
     * Set nomStructure
     *
     * @param string $nomStructure
     * @return Adresse
     */
    public function setNomStructure($nomStructure)
    {
        $this->nomStructure = $nomStructure;

        return $this;
    }

    /**
     * Get nomStructure
     *
     * @return string
     */
    public function getNomStructure()
    {
        return $this->nomStructure;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set adresseComplement
     *
     * @param string $adresseComplement
     * @return Adresse
     */
    public function setAdresseComplement($adresseComplement)
    {
        $this->adresseComplement = $adresseComplement;

        return $this;
    }

    /**
     * Get adresseComplement
     *
     * @return string
     */
    public function getAdresseComplement()
    {
        return $this->adresseComplement;
    }

    /**
     * Set cP
     *
     * @param string $cP
     * @return Adresse
     */
    public function setCP($cP)
    {
        $this->cP = $cP;

        return $this;
    }

    /**
     * Get cP
     *
     * @return string
     */
    public function getCP()
    {
        return $this->cP;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Adresse
     */
    public function setVille($ville)
    {
        $this->ville = mb_strtoupper($ville);

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Adresse
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @var \Entity\Contacts\TypeStructure
     */
    private $type;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tags;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set type
     *
     * @param \Entity\Contacts\TypeStructure $type
     * @return Adresse
     */
    public function setType(\Entity\Contacts\TypeStructure $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Entity\Contacts\TypeStructure
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add tags
     *
     * @param \Entity\Contacts\TagStructure $tag
     * @return Adresse
     */
    public function addTag(\Entity\Contacts\TagStructure $tag)
    {
        $this->tags[] = $tag;

        return $this;
    }

    /**
     * Remove tags
     *
     * @param \Entity\Contacts\TagStructure $tag
     */
    public function removeTag(\Entity\Contacts\TagStructure $tag)
    {
        $this->tags->removeElement($tag);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags()
    {
        return $this->tags;
    }

	public function setTags($tags)
    {
        $this->tags = $tags;

		return $this;
    }

}
