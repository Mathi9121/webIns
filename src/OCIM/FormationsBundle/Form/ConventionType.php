<?php

namespace OCIM\FormationsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConventionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numero', 'text', array(
				'required' => false,
				'attr'=> array('class'=>'input-big text-centered','size' => 3 )

				))
            ->add('edition', 'date', array(
				'label' => "Date d'édition",
				'widget' => 'single_text',
				'required' => false,
				'attr'=> array('class'=>'input-big text-centered'),
				'format' => 'dd/MM/yyyy'
				))
            ->add('etape1', 'date', array(
				'widget' => 'single_text',
				'required' => false,
				'label' => "Etape 1",
				'format' => 'dd/MM/yyyy'
				))
            ->add('etape2', 'date', array(
				'widget' => 'single_text',
				'required' => false,
				'label' => "Etape 2",
				'format' => 'dd/MM/yyyy'
				))
            ->add('etape3', 'date', array(
				'widget' => 'single_text',
				'required' => false,
				'label' => "Etape 3",
				'format' => 'dd/MM/yyyy'
				))
            ->add('etape4', 'date', array(
				'widget' => 'single_text',
				'required' => false,
				'label' => "Etape 4",
				'format' => 'dd/MM/yyyy'
				))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OCIM\FormationsBundle\Entity\Convention',
			'attr' => array('class'=> "forms")
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ocim_formationsbundle_convention';
    }
}
