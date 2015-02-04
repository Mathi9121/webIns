<?php

namespace OCIM\FormationsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use OCIM\ContactsBundle\Form\PersonneType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class InscriptionType extends AbstractType
{
	private $idformation;

	public function __construct($idformation)
    {
        $this->idformation = $idformation;
    }

        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$entityManager = $options['em'];
		
		$idformation = $this->idformation;
        $builder
			->add('stagiaire', new \OCIM\ContactsBundle\Form\PersonneType(), array(
				'data_class' => 'OCIM\ContactsBundle\Entity\Stagiaire',
				//'type'=> new \OCIM\ContactsBundle\Form\PersonneType()
				'em' => $entityManager
				))
			->add('formationformule', "entity", array(
				'class' => 'OCIM\FormationsBundle\Entity\formationFormule',
				"attr" => array('class'=>'width-100'),
				"query_builder" => function(EntityRepository $er) use ($idformation)
					{
						return $er->createQueryBuilder('u')
						->where('u.formation = :idformation')
						->setParameter('idformation', $idformation);
					},
				'label' => "Formule et Tarif"
				))
            ->add('dateInscription', 'datetime', array(
				'widget' => 'single_text',
				'format' => 'dd/MM/yyyy HH:mm:ss',
				'required' => false,
				'read_only' => true,
				'disabled' => true,
				'attr' => array('class' => 'width-100'),
				'label' => "Date d'inscription",
				))
            ->add('numberStatut','choice', array(
				'choices'   => array( '1' => 'Validé', '2' => 'En attente', "3" => "Annulé"),
				//'preferred_choices' => array('en attente')
				'attr' => array('class' => 'width-100'),
				"label" => "Statut de l'inscription"
				))
				->add('provenancePCST', null, array(
					'label' => "Provenance PCST",
				))
            ->add('attentes', "textarea", array(
				'attr' => array("class"=>"width-100", 'rows'=> 5),
				'required' => false,
				))
            //->add('statutOrgFinanceur')
            ->add('statutConvention', 'choice', array(
				'choices' => array(
					true => 'OUI',
					false => 'NON',
					),
				'required' => false,
				'empty_value' => "Ne sais pas",
				'label' => "Le stagiaire a-t-il besoin d'une convention?"
			))
            //->add('hash')
      ->add('convention', new \OCIM\FormationsBundle\Form\ConventionType(), array(
				'data_class' => 'OCIM\FormationsBundle\Entity\Convention',
				'required' => false,
			))
			->add('admin', new \OCIM\ContactsBundle\Form\AdminType(), array(
				'data_class' => 'OCIM\ContactsBundle\Entity\Admin',
				'required' => false,

			))
			->add('signataire', new \OCIM\ContactsBundle\Form\SignataireType(), array(
				'data_class' => 'OCIM\ContactsBundle\Entity\Signataire',
				'required' => false,
				'em' => $entityManager
			))

			->addEventListener(
				FormEvents::POST_SUBMIT,
				function(FormEvent $event) {
					$entity = $event->getForm()->getData();
					$entity->setStatut($event->getForm()->get('numberStatut')->getData());
				}
			)
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OCIM\FormationsBundle\Entity\Inscription',
			'attr' => array('class' => 'forms')
        ));
		$resolver->setRequired(array(
            'em',
        ));

        $resolver->setAllowedTypes(array(
            'em' => 'Doctrine\Common\Persistence\ObjectManager',
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ocim_formationsbundle_inscription';
    }
}
