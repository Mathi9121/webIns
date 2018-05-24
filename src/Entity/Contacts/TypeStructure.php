<?php

namespace App\Entity\Contacts;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeStructure
 * @ORM\Table(name="TypeStructure")
 * @ORM\Entity(repositoryClass="App\Repository\Contacts\TypeStructureRepository")
 */
class TypeStructure
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
     * @ORM\Column(type="string", length=255)
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
     * Set type
     *
     * @param string $type
     * @return TypeStructure
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $structure;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->adresse = new \Doctrine\Common\Collections\ArrayCollection();
    }


	
	public function __toString(){
		return $this->type;
	}
    /**
     * @var \Doctrine\Common\Collections\Collection
     * 
     * @ORM\OneToMany(targetEntity="App\Entity\Contacts\Adresse", mappedBy="type")
     */
    private $adresse;


    /**
     * Add adresse
     *
     * @param \Entity\Contacts\Adresse $adresse
     * @return TypeStructure
     */
    public function addAdresse(\App\Entity\Contacts\Adresse $adresse)
    {
        $this->adresse[] = $adresse;

        return $this;
    }

    /**
     * Remove adresse
     *
     * @param \Entity\Contacts\Adresse $adresse
     */
    public function removeAdresse(\App\Entity\Contacts\Adresse $adresse)
    {
        $this->adresse->removeElement($adresse);
    }

    /**
     * Get adresse
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
}
