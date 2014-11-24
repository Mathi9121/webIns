<?php

namespace OCIM\FormationsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use OCIM\ContactsBundle\Form\PersonneType;
use Doctrine\ORM\EntityRepository;


class InscriptionPubliqueType extends AbstractType
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
			->add('formationformule', "entity", array(
				'class' => 'OCIM\FormationsBundle\Entity\formationFormule',
				"attr" => array('class'=>'width-100'),
				"query_builder" => function(EntityRepository $er) use ($idformation)
					{
						return $er->createQueryBuilder('u')
						->where('u.formation = :idformation')
						->setParameter('idformation', $idformation);
					},
				'label' => "Formule d'hébergement",
				'expanded' => true,
				))
			->add(
				$builder->create('stagiaire', 'form', array(
						'required' => true,
						'data_class' => 'OCIM\ContactsBundle\Entity\Stagiaire',
						'label' => false))
					->add('civilite', 'choice', array(
						'choices' => array(
							'Mlle' => 'Mlle',
							'Mme' => 'Mme',
							'Mr' => 'Mr',
							),
						//'empty_value' => 'Choisissez une option',
						'attr' => array('class'=> 'width-100'),
						'required' => true,
						'label' => "Civilité"
					))
					->add('nom', 'text', array(
						'attr' => array('class'=> 'width-100'),
						'required' => true
					))
					->add('prenom', 'text', array(
						'attr' => array('class'=> 'width-100'),
						'required' => true,
						'label' => "Prénom"
					))
					->add('fonction', 'text', array(
						'attr' => array('class'=> 'width-100'),
						'required' => true,
						'label' => "Fonction",
					))
					->add('tel', 'text', array(
						'attr' => array('class'=> 'width-100'),
						'label' => 'Téléphone',
						'required' => true,
					))
					->add('fax', 'text', array(
						'required' => false,
						'attr' => array('class'=> 'width-100'),
						'required' => true,
					))
					->add('mail', 'text', array(
						'attr' => array('class'=> 'width-100'),
						'label' => "Adresse Mail",
						'required' => true
					))
					->add(
						$builder->create("adresse", 'form', array("by_reference"=>false, "label" => false, "data_class" => 'OCIM\ContactsBundle\Entity\Adresse',))
							->add('nomStructure', 'text', array(
								'attr' => array('class' => 'width-100'),
								'label' => 'Nom de la structure',
							))
							->add('adresse', 'text', array(
								'attr' => array('class' => 'width-100'),
								'label' => 'Adresse',
							))
							->add('adresseComplement', 'text', array(
								'attr' => array('class' => 'width-100'),
								'label' => "Complément d'adresse",
							))
							->add('cP', 'text', array(
								'attr' => array('class' => 'width-100'),
								'label' => 'Code postal',
							))
							->add('ville', 'text', array(
								'attr' => array('class' => 'width-100'),
							))
							->add('pays', 'text', array(
								'attr' => array('class' => 'width-100'),
							))
						)
				)
            ->add('attentes', "textarea", array(
				'attr' => array("class"=>"width-100", 'rows'=> 5),
				))

			->add(
				$builder->create('admin', 'form', array('by_reference' => false, 'label' => false, "data_class"=> 'OCIM\ContactsBundle\Entity\Admin'))
					->add('mail', 'text', array('label' => "Mail du contact administratif"))
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
