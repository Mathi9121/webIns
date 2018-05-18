<?php

namespace App\Controller\Export;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function index($name)
    {
        return $this->render('Export/Default/index.html.twig', array('name' => $name));
    }
}
