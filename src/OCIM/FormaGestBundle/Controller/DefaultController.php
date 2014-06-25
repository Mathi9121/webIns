<?php

namespace OCIM\FormaGestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OCIMFormaGestBundle:Default:index.html.twig', array('name' => $name));
    }
}
