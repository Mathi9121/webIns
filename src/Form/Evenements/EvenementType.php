<?php

namespace App\Form\Evenements;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Evenements\Formule;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

use App\Form\Evenements\evenementFormuleType;

class EvenementType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder
        ->add('eventType', ChoiceType::class, array(
          "label" => "Catégorie d'événement",
          "choices" => array(
			  'Formation' => "formation",
              'Evénement' => "event" 
		  ),
		  'choices_as_values' => true,
        ))
			   ->add('intitule', null, array(
				    'required' => true,
				    'label'  => 'Intitulé de l\'événement',
				    'attr' => array('class'=>'width-100')
				))
        ->add('lieu', null, array(
				'required' => true,
				'label'  => 'Lieu',
				'attr' => array('class'=>'width-100')
				))
        ->add('dateDebut', DateType::class, array(
  				'required' => true,
  				'widget' => 'single_text',
  				'label'  => 'Date de début',
  				'format' => 'dd/MM/yyyy',
  				'attr' => array(
  					'placeholder'=>'JJ/MM/AAAA',
  					'size' => '10',
  					'class' => 'width-100 datepicker',
            'data-tool' => 'datepicker'
				      )))
            ->add('dateFin', DateType::class, array(
				'required' => true,
				'widget' => 'single_text',
				'format' => 'dd/MM/yyyy',
				'label'  => 'Date de fin',
				'attr' => array('placeholder'=>'JJ/MM/AAAA','size' => '10', 'max-length'=>'10', 'class'=>'width-100 datepicker','data-tool' => 'datepicker')
				))
            ->add('dateText', null, array(
				'required' => true,
				'label'  => 'Date au format texte',
				'attr' => array('class'=>'width-100')
				))
            ->add('nbHeures', null, array(
				'required' => true,
				'label'  => 'Nombre d\'heures',
				'attr' => array('step' => '0.5', 'min'=> '0', 'size'=>'6', 'class' => 'width-100'),
				))
            ->add('nbJours', null, array(
				'required' => true,
				'label'  => 'Nombre de jours',
				'attr' => array('step' => '0.5', 'min'=> '0', 'size'=>'6', 'class' => 'width-100'),
				))
            ->add('type', null, array(
				'required' => true,
				'label'  => 'Type d\'événement',
				'attr' => array('class'=>'width-100')
				))
            ->add('evenementFormule', CollectionType::class, array(
				'entry_type'   => evenementFormuleType::class,
				'label' => 'Formules liées à l\'événement',
				'entry_options' => array('label' => false),
				'attr'=> array('class'=>'width-100'),
				'required' => false,
				'allow_add' => true,
				'allow_delete' => true,
				'by_reference' => false
				))
			;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Entity\Evenements\Evenement'
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
        return 'ocim_evenementsbundle_evenement';
    }
}
