<?php

namespace OCIM\FormationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use OCIM\FormationsBundle\Entity\TypeFormation;
use OCIM\FormationsBundle\Entity\ModeleChampPerso;

/**
 * Formation
 */
class Formation extends Event
{

    /**
     * @ORM\PostLoad
     */
    public function __construct()
    {
        parent::__construct();
    }
}
