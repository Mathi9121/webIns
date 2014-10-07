<?php

namespace OCIM\ContactsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Structure
 */
class Structure
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

	private $tags;
	
    public function __construct() {
        $this->tags = new ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     * @return Structure
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

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
     * @var \OCIM\ContactsBundle\Entity\TypeStructure
     */
    private $TypeStructure;


    /**
     * Set TypeStructure
     *
     * @param \OCIM\ContactsBundle\Entity\TypeStructure $TypeStructure
     * @return Structure
     */
    public function setTypeStructure(\OCIM\ContactsBundle\Entity\TypeStructure $TypeStructure = null)
    {
        $this->TypeStructure = $TypeStructure;

        return $this;
    }

    /**
     * Get TypeStructure
     *
     * @return \OCIM\ContactsBundle\Entity\TypeStructure 
     */
    public function getTypeStructure()
    {
        return $this->TypeStructure;
    }
    /**
     * @var \OCIM\ContactsBundle\Entity\typeStructure
     */
    private $typeStructure;

    /**
     * @var \OCIM\ContactsBundle\Entity\Adresse
     */
    private $adresse;


    /**
     * Set adresse
     *
     * @param \OCIM\ContactsBundle\Entity\Adresse $adresse
     * @return Structure
     */
    public function setAdresse(\OCIM\ContactsBundle\Entity\Adresse $adresse = null)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return \OCIM\ContactsBundle\Entity\Adresse 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
    /**
     * @var \OCIM\ContactsBundle\Entity\TypeStructure
     */
    private $type;


    /**
     * Set type
     *
     * @param \OCIM\ContactsBundle\Entity\TypeStructure $type
     * @return Structure
     */
    public function setType(\OCIM\ContactsBundle\Entity\TypeStructure $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \OCIM\ContactsBundle\Entity\TypeStructure 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add tags
     *
     * @param \OCIM\ContactsBundle\Entity\TagStructure $tags
     * @return Structure
     */
    public function addTag(\OCIM\ContactsBundle\Entity\TagStructure $tags)
    {
        $this->tags[] = $tags;

        return $this;
    }

    /**
     * Remove tags
     *
     * @param \OCIM\ContactsBundle\Entity\TagStructure $tags
     */
    public function removeTag(\OCIM\ContactsBundle\Entity\TagStructure $tags)
    {
        $this->tags->removeElement($tags);
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
