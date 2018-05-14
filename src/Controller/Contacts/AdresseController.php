<?php

namespace App\Controller\Contacts;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Entity\Contacts\TypeStructure;

class AdresseController extends Controller
{
    public function ajoutTypeStructureAction(Request $request)
    {

  		if($request->isXmlHttpRequest()){

  			$em = $this->getDoctrine()->getManager();

  			$data = json_decode($request->getContent());

			$s = new TypeStucture();

  			if( !empty($data->structure) && isset($data->structure) ){

  				$s->setType( $data->structure);
  				$em->persist($s);

  				$em->flush();
  			}

			return new Response( $s->getId(), Response::HTTP_OK);
      }
		}

    public function indexAction(){

      return $this->render('Contacts:Adresse:index.html.twig', array(

      ));
    }
}
