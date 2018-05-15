<?php

namespace App\Form\Evenements;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Form\Contacts\PersonneType;
use App\Form\Evenements\ConventionType;
use App\Form\Contacts\AdminType;
use App\Form\Contacts\SignataireType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class InscriptionType extends AbstractType
{
	private $idevenement;

	public function __construct($idevenement)
    {
        $this->idevenement = $idevenement;
    }

        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$entityManager = $options['em'];

		$idevenement = $this->idevenement;
        $builder
			->add('stagiaire', PersonneType::class, array(
				'data_class' => 'Entity\Contacts\Stagiaire',
				//'type'=> PersonneType::class
				'em' => $entityManager
				))
			->add('evenementformule', EntityType::class, array(
				'class' => 'Entity\Evenements\evenementFormule',
				'choice_translation_domain' => true,
				"attr" => array('class'=>'width-100'),
				"query_builder" => function(EntityRepository $er) use ($idevenement)
					{
						return $er->createQueryBuilder('u')
						->where('u.evenement = :idevenement')
						->setParameter('idevenement', $idevenement);
					},
				'label' => "Formule et Tarif"
				))
            ->add('dateInscription', DateTimeType::class, array(
				'widget' => 'single_text',
				'format' => 'dd/MM/yyyy HH:mm:ss',
				'required' => false,
				/*'read_only' => true,*/
				'disabled' => true,
				'attr' => array('class' => 'width-100', 'readonly' => true),
				'label' => "Date d'inscription",
				))
            ->add('numberStatut', ChoiceType::class, array(
				'choices'   => array('Validé' => '1', 'En attente' => '2', "Annulé" => "3"),
				'choices_as_values' => true,
				//'preferred_choices' => array('en attente')
				'attr' => array('class' => 'width-100'),
				"label" => "Statut de l'inscription"
				))
				->add('provenancePCST', null, array(
					'label' => "Provenance PCST",
				))
            ->add('attentes', TextareaType::class, array(
				'attr' => array("class"=>"width-100", 'rows'=> 5),
				'required' => false,
				))
            //->add('statutOrgFinanceur')
            ->add('statutConvention', ChoiceType::class, array(
				'choices' => array(
					'OUI' => true,
					'NON' => false,
					),
				'choices_as_values' => true,
				'required' => false,
				'empty_value' => "Ne sais pas",
				'label' => "Le stagiaire a-t-il besoin d'une convention?"
			))
            ->add('statutFinancement', ChoiceType::class, array(
				'choices' => array(
					'Accordé' => true,
					'NON' => false ,
					),
				'choices_as_values' => true,
				'required' => false,
				'empty_value' => "En attente",
				'label' => "Statut du financement :"
			))
            //->add('hash')
      ->add('convention', ConventionType::class, array(
				'data_class' => 'Entity\Evenements\Convention',
				'required' => false,
			))
			->add('admin', AdminType::class, array(
				'data_class' => 'Entity\Contacts\Admin',
				'required' => false,

			))
			->add('signataire', SignataireType::class, array(
				'data_class' => 'Entity\Contacts\Signataire',
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
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Entity\Evenements\Inscription',
			'attr' => array('class' => 'forms')
        ));
		$resolver->setRequired(array(
            'em',
        ));

        $resolver->setAllowedTypes('em', 'Doctrine\Common\Persistence\ObjectManager');
	}
	
	/**
     * @return getBlockPrefix()
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'ocim_evenementsbundle_inscription';
    }
}
