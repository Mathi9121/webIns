<?php

namespace OCIM\FormationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
		$user = $this->getUser();
        return $this->render('OCIMFormationsBundle:Default:index.html.twig', array('user' => $user));
    }
}
