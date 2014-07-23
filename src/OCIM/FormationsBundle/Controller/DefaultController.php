<?php

namespace OCIM\FormationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OCIM\FormationsBundle\Entity\Formation;
use OCIM\FormationsBundle\Entity\Formule;
use OCIM\FormationsBundle\Entity\formationFormule;
use OCIM\FormationsBundle\Entity\TypeFormation;

class DefaultController extends Controller
{

    public function indexAction()
    {
		
		return $this->render('OCIMFormationsBundle:Default:index.html.twig', array());
    }
}