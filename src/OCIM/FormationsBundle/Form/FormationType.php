<?php

namespace OCIM\FormationsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

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
				))
            ->add('lieu', null, array(
				'required' => true,
				'label'  => 'Lieu',
				))
            ->add('dateDebut', 'date', array(
				'required' => true,
				'widget' => 'single_text',
				'label'  => 'Date de début',
				'attr' => array('placeholder'=>'AAAA-MM-JJ')
				))
            ->add('dateFin', 'date', array(
				'required' => true,
				'widget' => 'single_text',
				'label'  => 'Date de fin',
				'attr' => array('placeholder'=>'AAAA-MM-JJ')
				))
            ->add('dateText', null, array(
				'required' => true,
				'label'  => 'Date au format texte',
				))
            ->add('nbHeures', 'number', array(
				'required' => true,
				'label'  => 'Nombre d\'heures',
				'attr' => array('step' => '0.5', 'min'=> '0'),
				))
            ->add('type', null, array(
				'required' => true,
				'label'  => 'Type de formation',
				))
            ->add('formules', null, array(
				'required' => false,
				'label'  => 'Formules liées à la formation',
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
