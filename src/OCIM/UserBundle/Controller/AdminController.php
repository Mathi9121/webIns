<?php

namespace OCIM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    public function connexionAction()
    {
		$user = $this->getDoctrine()->getRepository("OCIMUserBundle:User")->find(1);
		return $this->render("OCIMUserBundle:Admin:connexion.html.twig", array('user'=>$user));
    }
}
