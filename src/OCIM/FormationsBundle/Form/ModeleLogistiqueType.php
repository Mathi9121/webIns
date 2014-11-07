<?php

namespace OCIM\FormationsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class ModeleLogistiqueType extends AbstractType
{
	public $idformation;
	
	function __construct($idformation){
		$this->idformation = $idformation;
	}
	
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('ordre', 'hidden', array(
				'attr' => array('class' => 'ordreModeles'),
				'required'=> true,
			))
            ->add('date', 'date', array(
				'widget' => 'single_text',
				'format' => 'dd/MM/yyyy',
				'attr' => array('placeholder'=>'JJ/MM/AAAA', 'class'=>'datepicker'),
				'required'=> false,
			))
            ->add('description', 'text', array(
				'attr' => array('placeholder' => "Description")
			))
            ->add('typeReponse', 'choice', array(
				'choices'   => array(
					'text'	=> 'Texte',
					'bool'	=> 'Oui/Non',
					'dateTime'	=> 'Date/Heure',
				),
				'empty_value' => 'Type de réponse',
				'required' => true,
			))
			->add('formationFormule', 'entity', array(
				'class' => 'OCIM\FormationsBundle\Entity\formationFormule',
				'multiple' => true,
				'expanded' => true,
				'by_reference' => false,
				'query_builder' => function(EntityRepository $er)
					{
						return $er->createQueryBuilder('u')
						->where('u.formation = :idformation')
						->setParameter('idformation', $this->idformation);
					},
				'property' => "FormuleId",
			))
			->add('intervenant', 'checkbox', array(
				'label' => 'Intervenant',
				'required' => false,
			));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OCIM\FormationsBundle\Entity\ModeleLogistique',
			'attr' => array('class'=> 'forms'),
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ocim_formationsbundle_modelelogistique';
    }
}
