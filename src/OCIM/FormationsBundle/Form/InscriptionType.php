<?php

namespace OCIM\FormationsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use OCIM\ContactsBundle\Form\PersonneType;
use Doctrine\ORM\EntityRepository;

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
			->add('personne', new \OCIM\ContactsBundle\Form\PersonneType(), array(
				'data_class' => 'OCIM\ContactsBundle\Entity\Personne',
				//'type'=> new \OCIM\ContactsBundle\Form\PersonneType()
				'em' => $entityManager
				))
			->add('formationformule', "entity", array(
				'class' => 'OCIM\FormationsBundle\Entity\formationFormule',
				"attr" => array('class'=>'width-100'),
				"query_builder" => function(EntityRepository $er) 
					{
						return $er->createQueryBuilder('u')
						->where('u.formation = :idformation')
						->setParameter('idformation', $this->idformation);
					},
				))
            ->add('dateInscription', 'text', array(
				'data_class' => 'DateTime',
				'read_only' => true,
				//'disabled' => true,
				'attr' => array('value'=> new \DateTime("now"), 'class'=>'text-centered width-100')
				))
            ->add('statut','choice', array(
				'choices'   => array('en attente' => 'En attente', 'accepté' => 'Accepté', "annulé" => "Annulé"),
				//'preferred_choices' => array('en attente')
				))
            ->add('attentes', "textarea", array(
				'attr' => array("class"=>"width-100")
				))
            //->add('statutOrgFinanceur')
            //->add('statutConvention')
            //->add('hash')
            //->add('convention')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OCIM\FormationsBundle\Entity\Inscription',
			'em' => null
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
