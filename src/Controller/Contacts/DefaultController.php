<?php

namespace App\Controller\Contacts;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('Contacts:Default:index.html.twig', array('name' => $name));
    }
}
