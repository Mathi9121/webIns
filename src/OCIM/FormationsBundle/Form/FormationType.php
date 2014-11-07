<?php

namespace OCIM\FormationsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use OCIM\FormationsBundle\Entity\Formule;

class FormationType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

		
        $builder
			->add('intitule', null, array(
				'required' => true,
				'label'  => 'Intitulé de la formation',
				'attr' => array('class'=>'width-100')
				))
            ->add('lieu', null, array(
				'required' => true,
				'label'  => 'Lieu',
				'attr' => array('class'=>'width-100')
				))
            ->add('dateDebut', 'date', array(
				'required' => true,
				'widget' => 'single_text',
				'label'  => 'Date de début',
				'format' => 'dd/MM/yyyy',
				'attr' => array(
					'placeholder'=>'JJ/MM/AAAA',
					'size' => '10',
					'class' => 'width-100 datepicker',
				)))
            ->add('dateFin', 'date', array(
				'required' => true,
				'widget' => 'single_text',
				'format' => 'dd/MM/yyyy',
				'label'  => 'Date de fin',
				'attr' => array('placeholder'=>'JJ/MM/AAAA','size' => '10', 'max-length'=>'10', 'class'=>'width-100 datepicker')
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
            ->add('type', null, array(
				'required' => true,
				'label'  => 'Type de formation',
				'attr' => array('class'=>'width-100')
				))
            ->add('formationFormule', 'collection', array(
				'type'   => new formationFormuleType(),
				'label' => 'Formules liées à la formation',
				'options' => array('label' => false),
				'attr'=> array('class'=>'width-100'),
				'required' => false,
				'allow_add' => true,
				'allow_delete' => true,
				'by_reference' => false
				))
			;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OCIM\FormationsBundle\Entity\Formation'
        ));

    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ocim_formationsbundle_formation';
    }
}
