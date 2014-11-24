<?php

namespace OCIM\FormationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OCIM\FormationsBundle\Entity\Inscription;
use OCIM\FormationsBundle\Form\InscriptionPubliqueType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class InscriptionPubliqueController extends Controller
{
    public function inscriptionAction($idformation)
    {
		
		$inscription = new Inscription();
        $form = $this->createCreateForm($inscription, $idformation);
		$em = $this->getDoctrine()->getManager();
		$formation = $em->getRepository("OCIMFormationsBundle:Formation")->find($idformation);
		
        return $this->render('OCIMFormationsBundle:InscriptionPublique:form-public.html.twig', array(
			'form'   => $form->createView(),
            ));
	}

    public function createInscriptionAction(Request $request, $idformation)
    {
		$entity = new Inscription();
        $form = $this->createCreateForm($entity, $idformation);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

			$ordre = $em->getRepository('OCIMFormationsBundle:Inscription')->getOrdreMaxByFormation($idformation);
		

			$nouvelordre = (!is_null($ordre))? $ordre + 1000 : 0;
			$entity->setOrdre($nouvelordre);
		
			//exit(\Doctrine\Common\Util\Debug::dump($entity->getSignataire()->getAdresse()->getStructure()));
			
			$entity->setStatut(2);
			
            $em->persist($entity);

            $em->flush();

            return $this->render('OCIMFormationsBundle:InscriptionPublique:confirmation.html.twig', array(
			
			));
        }
	
		return $this->render('OCIMFormationsBundle:InscriptionPublique:form-public.html.twig', array(
			'form'   => $form->createView(),
        ));
	}
	
	
	
	private function createCreateForm(Inscription $entity, $idformation)
    {
        $form = $this->createForm(new InscriptionPubliqueType($idformation), $entity, array(
            'action' => $this->generateUrl('inscriptionpublique_creation', array('idformation'=>$idformation)),
            'method' => 'POST',
			'em' => $this->getDoctrine()->getManager(),
        ));

        $form->add('submit', 'submit', array('label' => "Valider"));

        return $form;
    }
	
	public function confirmationAction(){
		
	}

}
