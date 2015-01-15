<?php

namespace OCIM\ContactsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Intervenant
 */
class Intervenant extends Personne
{
	public function __construct(){
		parent::__construct('intervenant');
		$this->formations = new ArrayCollection();
	}
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $formations;


    /**
     * Add formations
     *
     * @param \OCIM\FormationsBundle\Entity\Formation $formations
     * @return Intervenant
     */
    public function addFormation(\OCIM\FormationsBundle\Entity\Formation $formations)
    {
        $this->formations[] = $formations;

        return $this;
    }

    /**
     * Remove formations
     *
     * @param \OCIM\FormationsBundle\Entity\Formation $formations
     */
    public function removeFormation(\OCIM\FormationsBundle\Entity\Formation $formations)
    {
        $this->formations->removeElement($formations);
    }

    /**
     * Get formations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFormations()
    {
        return $this->formations;
    }
}
