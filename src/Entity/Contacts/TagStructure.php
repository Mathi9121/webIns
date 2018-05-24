<?php

namespace App\Entity\Contacts;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * TagStructure
 * @ORM\Table(name="TagStructure")
 * @ORM\Entity(repositoryClass="App\Repository\Contacts\TagStructureRepository")
 */
class TagStructure
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
    private $tag;



	public function __construct() {
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
     * Set tag
     *
     * @param string $tag
     * @return TagStructure
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }



	public function __toString(){
		return $this->tag;
	}
    /**
     * @var \Doctrine\Common\Collections\Collection
     * 
     * @ORM\ManyToMany(targetEntity="App\Entity\Contacts\Adresse", mappedBy="tags")
     */
    private $structures;


    /**
     * Add structures
     *
     * @param \Entity\Contacts\Adresse $structures
     * @return TagStructure
     */
    public function addStructure(\App\Entity\Contacts\Adresse $structures)
    {
        $this->structures[] = $structures;

        return $this;
    }

    /**
     * Remove structures
     *
     * @param \Entity\Contacts\Adresse $structures
     */
    public function removeStructure(\App\Entity\Contacts\Adresse $structures)
    {
        $this->structures->removeElement($structures);
    }

    /**
     * Get structures
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStructures()
    {
        return $this->structures;
    }
}
