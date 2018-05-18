<?php

namespace App\Controller\Evenements;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Entity\Evenements\Convention;
use App\Entity\Evenements\Inscription;
use App\Form\Evenements\ConventionType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * Convention controller.
 *
 */
class ConventionController extends Controller
{

    /**
     * Lists all Convention entities.
     *
     */
    public function index($slug)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository(Convention::class)->findConventionsByInscriptions($slug);
        $slugmax = $em->getRepository(Convention::class)->countConventionsByInscriptions();

        return $this->render('Evenements/Convention/index.html.twig', array(
            'entities' => $entities,
            'slug' => $slug,
            'slugmax' => $slugmax

        ));
    }
    /**
     * Creates a new Convention entity.
     *
     */
    public function create(Request $request, $idinscription)
    {
        $entity = new Convention();
		$inscription = $this->getDoctrine()->getManager()->getRepository(Inscription::class)->find($idinscription);

        $form = $this->createCreateForm($entity, $idinscription);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
			      $entity->setInscription($em->getReference(Inscription::class, $idinscription));
			      $inscription->setConvention($entity);
            $em->persist($entity);
            $em->persist($inscription);
            $em->flush();

            return $this->redirect($this->generateUrl('convention_show', array('id' => $entity->getId())));
        }

        return $this->render('Evenements/Convention/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }


    public function derniernumero(Request $request){
      if($request->isXMLHttpRequest()){

        $num_convention = $this->getDoctrine()->getManager()->getRepository(Convention::class)->lastConventionNumber();

        return new Response($num_convention['num'], 200);
      }
    }


    public function createConvention(Request $request){

      if($request->isXMLHttpRequest()){

        $convention = new Convention();
        $em = $this->getDoctrine()->getManager();

        $data = json_decode($request->getContent());
        $idinscription = $data[0]->idinscription;
        $numconvention = (int) $data[1]->numconvention;
        $inscription = $em->getRepository(Inscription::class)->find($idinscription);
        $convention->setNumero($numconvention);
        $convention->setEdition(new \DateTime('now'));
        $convention->setInscription($inscription);
        $inscription->setConvention($convention);

        $em->persist($convention);

        try{
          $em->flush();
        }
        catch(Exception $e){
          return new Response( "erreur", 200);
        }

        $reponse;
        $reponse['numconvention'] = $convention->getNumero();
        $reponse['edition'] = $convention->getEdition()->format('d/m/Y');
        $reponse['idconvention'] = $convention->getId();
        return new Response( json_encode($reponse) , 200);
      }
    }


    public function updateConvention(Request $request){
      if($request->isXMLHttpRequest()){
        $data = $request->getContent();

        $data = json_decode($data);

        $em = $this->getDoctrine()->getManager();
        $convention = $em->getRepository(Convention::class)->find($data['0']->idconvention);

        $reponse;

        // update de letape
        if(isset($data['0']->numetape)){
          $etape = $data['0']->numetape;
          $dateetape = $data['0']->dateetape;
          // on récupère letat
          $getnomfct = "getEtape".$etape;
          $setnomfct = "setEtape".$etape;
          $date = $convention->$getnomfct();
          $convention->$setnomfct(new \DateTime($dateetape));

          $em->persist($convention);
          $em->flush();

          $reponse = (is_null($convention->$getnomfct()))? null : $convention->$getnomfct()->format('d/m/Y');

        }
        elseif(isset($data['0']->edition)){
          $date= $data['0']->edition;
          $jour = substr($date, 0, 2);
          $mois = substr($date, 3, 2);
          $annee = substr($date, 6, 4);

          $date = new \DateTime();
          $date->setDate($annee, $mois, $jour);

          $convention->setEdition($date);
          $em->persist($convention);
          $em->flush();

          $reponse = $date->format('d/m/Y');

        }
        elseif(isset($data['0']->numconvention)){
          $convention->setNumero($data['0']->numconvention);
          $em->persist($convention);
          $em->flush();

          $reponse = $convention->getNumero();
        }
        else{
          return new Response( 'fail', 400);
        }

        return new Response( $reponse, 200);
      }
    }

    /**
     * Creates a form to create a Convention entity.
     *
     * @param Convention $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Convention $entity, $idinscription)
    {
        $form = $this->createForm(ConventionType::class, $entity, array(
            'action' => $this->generateUrl('convention_create', array('idinscription'=> $idinscription)),
            'method' => 'POST',
        ));

        $form->add('submit', SubmitType::class, array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Convention entity.
     *
     */
    public function new($idinscription)
    {
        $entity = new Convention();
        $form   = $this->createCreateForm($entity, $idinscription);
        $em = $this->getDoctrine()->getManager();
        $num_convention = $em->getRepository(Convention::class)->lastConventionNumber();

        return $this->render('Evenements/Convention/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'derniere_convention' => $num_convention,
        ));
    }

    /**
     * Finds and displays a Convention entity.
     *
     */
    public function show($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(Convention::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Convention entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('Evenements/Convention/show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Convention entity.
     *
     */
    public function edit($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(Convention::class)->find($id);
        $num_convention = $em->getRepository(Convention::class)->lastConventionNumber();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Convention entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('Evenements/Convention/edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'derniere_convention' => $num_convention,
        ));
    }

    /**
    * Creates a form to edit a Convention entity.
    *
    * @param Convention $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Convention $entity)
    {
        $form = $this->createForm(ConventionType::class, $entity, array(
            'action' => $this->generateUrl('convention_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', SubmitType::class, array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Convention entity.
     *
     */
    public function update(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(Convention::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Convention entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('convention_edit', array('id' => $id)));
        }

        return $this->render('Evenements/Convention/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Convention entity.
     *
     */
    public function delete(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository(Convention::class)->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Convention entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('convention'));
    }

    /**
     * Creates a form to delete a Convention entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('convention_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', SubmitType::class, array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
