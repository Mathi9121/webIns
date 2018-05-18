<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    public function connexion(Request $request)
    {
		$session = $request->getSession();

		//On regarde les erreurs
		if($request->attributes->has(Security::AUTHENTICATION_ERROR)){
			$error = $request->attributes->get(Security::AUTHENTICATION_ERROR);
		}
		else{
			$error = $session->get(Security::AUTHENTICATION_ERROR);
			$session->remove(Security::AUTHENTICATION_ERROR);
		}
		return $this->render("User/Admin/connexion.html.twig", 
			array(
			'last_username' => $session->get(Security::LAST_USERNAME),
			'error'=> $error
			));
    }
}
