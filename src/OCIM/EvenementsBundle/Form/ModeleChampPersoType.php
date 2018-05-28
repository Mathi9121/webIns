<?php

namespace OCIM\EvenementsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;

use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ModeleChampPersoType extends AbstractType
{
	public $idevenement;

	function __construct($idevenement){
		$this->idevenement = $idevenement;
	}

        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$idevenement = $this->idevenement;
        $builder
			->add('ordre', HiddenType::class, array(
				'attr' => array('class' => 'ordreModeles'),
				'required'=> true,
			))
            ->add('date', DateType::class, array(
				'widget' => 'single_text',
				'format' => 'dd/MM/yyyy',
				'attr' => array('placeholder'=>'JJ/MM/AAAA', 'class'=>'datepicker', 'data-tool'=> "datepicker"),
				'required'=> false,
			))
            ->add('description', TextType::class, array(
				'attr' => array('placeholder' => "Description")
			))
            ->add('typeReponse', ChoiceType::class, array(
				'choices'   => array(
					'Texte'	=> 'text',
					'Oui/Non' => 'bool',
					//'Date/Heure'	=> 'dateTime',
				),
				'choices_as_values' => true,
				'empty_value' => 'Type de réponse',
				'required' => true,
			))
			->add('evenementFormule', EntityType::class, array(
				'class' => 'OCIM\EvenementsBundle\Entity\evenementFormule',
				'choice_translation_domain' => true,
				'multiple' => true,
				'expanded' => true,
				'by_reference' => false,
				'query_builder' => function(EntityRepository $er) use($idevenement)
					{
						return $er->createQueryBuilder('u')
						->where('u.evenement = :idevenement')
						->setParameter('idevenement', $idevenement);
					},
				'choice_label' => "FormuleId",
			))
			->add('intervenant', CheckboxType::class, array(
				'label' => 'Intervenant',
				'required' => false,
			));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OCIM\EvenementsBundle\Entity\ModeleChampPerso',
			'attr' => array('class'=> 'forms'),
        ));
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
        return 'ocim_evenementsbundle_modelechampPerso';
    }
}
