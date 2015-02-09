<?php

namespace OCIM\FormationsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OCIM\FormationsBundle\Entity\Inscription;
use OCIM\FormationsBundle\Form\InscriptionType;
use OCIM\FormationsBundle\Form\FinancementType;
use OCIM\ContactsBundle\Entity\Signataire;



/**
* Inscription controller.
*
*/
class InscriptionController extends Controller
{


  /**
  * liste toutes les entités en fonction d'une formation (id passé en paramètre)
  *
  */
  public function indexAction(Request $request, $idformation)
  {
    $em = $this->getDoctrine()->getManager();

    $id = $request->query->get('id');

    $entities = $em->getRepository('OCIMFormationsBundle:Inscription')->findAllByFormation($idformation);
    $formation = $em->getRepository('OCIMFormationsBundle:Formation')->find($idformation);
    $champPerso = $em->getRepository('OCIMFormationsBundle:ModeleChampPerso')->findModelesByIdFormation($idformation);


    //exit(\Doctrine\Common\Util\Debug::dump($champPerso));

    return $this->render('OCIMFormationsBundle:Inscription:index.html.twig', array(
      'entities' => $entities,
      'formation' => $formation,
      'champPerso' => $champPerso,
      'id' => $id,
    ));
  }

  public function ordreAction(Request $request, $idformation){
    if($request->isXmlHttpRequest()){

      $em = $this->getDoctrine()->getManager();

      $data = json_decode($request->getContent());

      foreach($data as $d){
        $inscription = $em->getRepository('OCIMFormationsBundle:Inscription')->find($d->id);
        $inscription->setOrdre($d->ordre);
      }

      $em->flush();
      return new Response( 'ok' , Response::HTTP_OK);

    }
  }

  public function updateStatutInscriptionAction(Request $request){
    if($request->isXmlHttpRequest()){
      $data = json_decode($request->getContent());

      $em = $this->getDoctrine()->getManager();

      $idinscription = $data['0']->idinscription;

      $inscription = $em->getRepository('OCIMFormationsBundle:Inscription')->find($idinscription);

      $inscription->setStatut($data['0']->statut);

      $em->flush();

      return new Response( $inscription->getNumberStatut() , Response::HTTP_OK);
    }
  }

  public function updateStatutConventionAction(Request $request){
    if($request->isXmlHttpRequest()){
      $data = json_decode($request->getContent());

      $em = $this->getDoctrine()->getManager();

      $idinscription = $data['0']->idinscription;

      $inscription = $em->getRepository('OCIMFormationsBundle:Inscription')->find($idinscription);

      $statut = $data['0']->statut;
      $statut = ($statut == "null")? null : (bool)$statut;

      $inscription->setStatutConvention($statut);

      $em->flush();

      $reponse;
      if(is_null($inscription->getStatutConvention())){
        $reponse = "null";
      }
      else{
        $reponse = ($inscription->getStatutConvention() == false )? '0' : '1' ;
      }


      return new Response(  $reponse , Response::HTTP_OK);
    }
  }

  /**
  * Creates a new Inscription entity.
  *
  */
  public function createAction(Request $request, $idformation)
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

      $em->persist($entity);

      $em->flush();
      $this->get('session')->getFlashBag()->add('success','Inscription ajoutée.');
      return $this->redirect($this->generateUrl('inscription', array('id' => $entity->getId(), 'idformation'=> $idformation)));
    }

    $this->get('session')->getFlashBag()->add('error','Le formulaire contient des erreurs');
    return $this->render('OCIMFormationsBundle:Inscription:new.html.twig', array(
      'entity' => $entity,
      'form'   => $form->createView(),
      'idformation' => $idformation,
    ));
  }

  /**
  * Creates a form to create a Inscription entity.
  *
  * @param Inscription $entity The entity
  *
  * @return \Symfony\Component\Form\Form The form
  */
  private function createCreateForm(Inscription $entity, $idformation)
  {
    $form = $this->createForm(new InscriptionType($idformation), $entity, array(
      'action' => $this->generateUrl('inscription_create', array('idformation'=>$idformation)),
      'method' => 'POST',
      'em' => $this->getDoctrine()->getManager(),
    ));

    $form->add('submit', 'submit', array('label' => 'Ajouter le stagiaire', 'attr'=> array('class' => 'btn btn-green btn-save')
    ));

    return $form;
  }

  /**
  * Displays a form to create a new Inscription entity.
  *
  */
  public function newAction($idformation)
  {
    $entity = new Inscription();
    $form   = $this->createCreateForm($entity, $idformation);
    $em = $this->getDoctrine()->getManager();
    $formation = $em->getRepository("OCIMFormationsBundle:Formation")->find($idformation);

    return $this->render('OCIMFormationsBundle:Inscription:new.html.twig', array(
      'entity' => $entity,
      'form'   => $form->createView(),
      'formation' => $formation,
    ));
  }

  /**
  * Finds and displays a Inscription entity.
  *
  */
  public function showAction(Request $request, $id, $idformation)
  {
    $type = $request->query->get('type');

    $em = $this->getDoctrine()->getManager();

    $entity = $em->getRepository('OCIMFormationsBundle:Inscription')->find($id);

    if (!$entity) {
      throw $this->createNotFoundException('Unable to find Inscription entity.');
    }

    $deleteForm = $this->createDeleteForm($id, $idformation);

    return $this->render('OCIMFormationsBundle:Inscription:show.html.twig', array(
      'entity'      => $entity,
      'delete_form' => $deleteForm->createView(),
      'idformation' => $idformation,
      'ignore_missing' => true,
      'type' => $type,
    ));
  }

  /**
  * Displays a form to edit an existing Inscription entity.
  *
  */
  public function editAction($id, $idformation)
  {
    $em = $this->getDoctrine()->getManager();

    $entity = $em->getRepository('OCIMFormationsBundle:Inscription')->find($id);

    if (!$entity) {
      throw $this->createNotFoundException('Unable to find Inscription entity.');
    }

    $editForm = $this->createEditForm($entity, $idformation);
    $deleteForm = $this->createDeleteForm($id, $idformation);

    return $this->render('OCIMFormationsBundle:Inscription:edit.html.twig', array(
      'entity'    	=> $entity,
      'form' 			=> $editForm->createView(),
      'delete_form' 	=> $deleteForm->createView(),
      'idformation' 	=> $idformation,
      //'personne'		=> \Doctrine\Common\Util\Debug::dump($personne),
    ));
  }

  /**
  * Creates a form to edit a Inscription entity.
  *
  * @param Inscription $entity The entity
  *
  * @return \Symfony\Component\Form\Form The form
  */
  private function createEditForm(Inscription $entity, $idformation)
  {
    $form = $this->createForm(new InscriptionType($idformation), $entity, array(
      'action' => $this->generateUrl('inscription_update', array('id' => $entity->getId(), 'idformation'=> $idformation)),
      'method' => 'PUT',
      'em' => $this->getDoctrine()->getManager(),
    ));

    $form->add('submit', 'submit', array('label' => 'Enregistrer', 'attr'=> array('class'=> 'btn btn-green btn-save'),));

    return $form;
  }
  /**
  * Edits an existing Inscription entity.
  *
  */
  public function updateAction(Request $request, $id, $idformation)
  {
    $em = $this->getDoctrine()->getManager();

    $entity = $em->getRepository('OCIMFormationsBundle:Inscription')->find($id);

    if (!$entity) {
      throw $this->createNotFoundException('Unable to find Inscription entity.');
    }

    $deleteForm = $this->createDeleteForm($id, $idformation);
    $editForm = $this->createEditForm($entity, $idformation);
    $editForm->handleRequest($request);

    if ($editForm->isValid()) {

      $em->flush();
      $this->get('session')->getFlashBag()->add('notice','Modifications sauvegardées');
      return $this->redirect($this->generateUrl('inscription', array('id' => $id, 'idformation'=>$idformation)));
    }

    $this->get('session')->getFlashBag()->add('error','Le formulaire contient des erreurs');
    return $this->render('OCIMFormationsBundle:Inscription:edit.html.twig', array(
      'entity'      => $entity,
      'edit_form'   => $editForm->createView(),
      'delete_form' => $deleteForm->createView(),
      'idformation' => $idformation,
    ));
  }
  /**
  * Deletes a Inscription entity.
  *
  */
  public function deleteAction(Request $request, $id, $idformation)
  {
    $form = $this->createDeleteForm($id, $idformation);
    $form->handleRequest($request);

    if ($form->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $entity = $em->getRepository('OCIMFormationsBundle:Inscription')->find($id);

      if (!$entity) {
        throw $this->createNotFoundException('Unable to find Inscription entity.');
      }

      $em->remove($entity);
      $em->flush();
    }
    $this->get('session')->getFlashBag()->add('success','Inscription supprimée.');
    return $this->redirect($this->generateUrl('inscription', array('idformation'=> $idformation)));
  }

  /**
  * Creates a form to delete a Inscription entity by id.
  *
  * @param mixed $id The entity id
  *
  * @return \Symfony\Component\Form\Form The form
  */
  private function createDeleteForm($id, $idformation)
  {
    return $this->createFormBuilder()
    ->setAction($this->generateUrl('inscription_delete', array('id' => $id, 'idformation'=> $idformation)))
    ->setMethod('DELETE')
    ->add('submit', 'submit', array('label' => ' Supprimer', 'attr'=> array('class'=>'btn btn-red btn-delete') ))
    ->getForm()
    ;
  }
}
