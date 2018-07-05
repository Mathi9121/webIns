<?php

namespace OCIM\EvenementsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use OCIM\ContactsBundle\Form\PersonneType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Validator\Constraints\Email;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use OCIM\ContactsBundle\Entity\Stagiaire;
use OCIM\EvenementsBundle\Entity\Inscription;

class InscriptionPubliqueType extends AbstractType
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
			->add('evenementformule', EntityType::class, array(
				'class' => 'OCIM\EvenementsBundle\Entity\evenementFormule',
				'choice_translation_domain' => true,
				"attr" => array('class'=>'width-100'),
				"query_builder" => function(EntityRepository $er) use ($idevenement)
					{
						return $er->createQueryBuilder('u')
						->where('u.evenement = :idevenement')
						->setParameter('idevenement', $idevenement);
					},
				'label' => "Tarif(s)",
				'expanded' => true,
				))
			->add(
				$builder->create('stagiaire', FormType::class, array(
						'required' => true,
						'data_class' => Stagiaire::class,
						'label' => false))
					->add('civilite', ChoiceType::class, array(
						'choices' => array(
							'Mlle' => 'Mlle',
							'Mme' => 'Mme',
							'Mr' => 'Mr',
							),
						'choices_as_values' => true,
						//'empty_value' => 'Choisissez une option',
						'attr' => array('class'=> 'width-100'),
						'required' => true,
						'label' => "Civilité"
					))
					->add('nom', TextType::class, array(
						'attr' => array('class'=> 'width-100'),
						'required' => true
					))
					->add('prenom', TextType::class, array(
						'attr' => array('class'=> 'width-100'),
						'required' => true,
						'label' => "Prénom"
					))
					->add('fonction', TextType::class, array(
						'attr' => array('class'=> 'width-100'),
						'required' => true,
						'label' => "Fonction",
					))
					->add('telFixe', TextType::class, array(
						'attr' => array('class'=> 'width-100'),
						'label' => 'Téléphone Fixe',
						'required' => true,
					))
					->add('telPortable', TextType::class, array(
					 	'required' => false,
					 	'attr' => array('class'=> 'width-100'),
						'label' => 'Téléphone Portable',
					))
					->add('mail', TextType::class, array(
						'attr' => array('class'=> 'width-100'),
						'label' => "Adresse Mail",
						'required' => true,
						'constraints' => new Email(array(
							'message' => "'{{ value }}' n'est pas une adresse mail valide.",
							'checkMX' => true))
					))
					->add(
						$builder->create("adresse", FormType::class, array("by_reference"=>false, "label" => false, "data_class" => 'OCIM\ContactsBundle\Entity\Adresse',))
							->add('nomStructure', TextType::class, array(
								'attr' => array('class' => 'width-100'),
								'label' => 'Nom de la structure',
								'required' => true
							))
							->add('adresse', TextType::class, array(
								'attr' => array('class' => 'width-100'),
								'label' => 'Adresse',
								'required' => true
							))
							->add('adresseComplement', TextType::class, array(
								'attr' => array('class' => 'width-100'),
								'label' => "Complément d'adresse",
								'required' => false
							))
							->add('cP', TextType::class, array(
								'attr' => array('class' => 'width-100'),
								'label' => 'Code postal',
								'required' => true
							))
							->add('ville', TextType::class, array(
								'attr' => array('class' => 'width-100'),
								'required' => true
							))
							->add('pays', TextType::class, array(
								'attr' => array('class' => 'width-100'),
								'required' => false
							))
						)
				)
            ->add('attentes', "textarea", array(
				'attr' => array("class"=>"width-100", 'rows'=> 5),
				'required' => true
				))

			->add(
				$builder->create('admin', FormType::class, array('by_reference' => false, 'label' => false, "data_class"=> 'OCIM\ContactsBundle\Entity\Admin'))
					->add('mail', TextType::class, array(
						'label' => "Mail du contact administratif",
						'required' => false,
						'constraints' => new Email(array(
							'message' => "'{{ value }}' n'est pas une adresse mail valide.",
							'checkMX' => true))
					))
			)
			->add('adhererListe', CheckboxType::class, array(
				'label' => 'Je donne mon accord pour recevoir l\'offre de formation de l\'OCIM.',
				'required' => false,
				'mapped' => false,
			))
			->add('accordListe', CheckboxType::class, array(
				'label' => 'J\'autorise la diffusion de mes coordonnées professionnelles aux personnes présentes lors de la formation OCIM.',
				'required' => false,
				'mapped' => false,
			))
			->add('accordOrganisme', CheckboxType::class, array(
				'label' => 'Je donne mon accord pour recevoir l'\offre de formation de l\OCIM. (Organisme financeur)',
				'required' => false,
				'mapped' => false,
			))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Inscription::class,
						'attr' => array('class' => 'forms'),
						'csrf_protection' => false,

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
