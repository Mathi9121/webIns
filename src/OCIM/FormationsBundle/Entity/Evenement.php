<?php

namespace OCIM\FormationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use OCIM\FormationsBundle\Entity\TypeFormation;
use OCIM\FormationsBundle\Entity\ModeleChampPerso;
use OCIM\FormationsBundle\Entity\Event;

/**
 * Formation
 */
class Evenement extends Event
{



    /**
     * @ORM\PostLoad
     */
    public function __construct()
    {
        parent::__construct();
    }
}
