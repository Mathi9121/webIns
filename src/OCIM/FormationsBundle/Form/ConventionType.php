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
				'attr'=> array('class'=>'input-big text-centered')
				))
            ->add('edition', 'date', array(
				'label' => "Date d'édition",
				'widget' => 'single_text',
				'required' => false,
				'attr'=> array('class'=>'input-big text-centered'),
				'format' => 'dd/MM/yyyy'
				))
            ->add('envoiPresidentU2ex', 'date', array(
				'widget' => 'single_text',
				'required' => false,
				'label' => "Envoi au Président de l'UB en 2 ex",
				'format' => 'dd/MM/yyyy'
				))
            ->add('retourPresidentU2ex', 'date', array(
				'widget' => 'single_text',
				'required' => false,
				'label' => "Retour de l'UB en 2 ex",
				'format' => 'dd/MM/yyyy'
				))
            ->add('envoiOrganisme2ex', 'date', array(
				'widget' => 'single_text',
				'required' => false,
				'label' => "Envoi à l'organisme financeur en 2 ex",
				'format' => 'dd/MM/yyyy'
				))
            ->add('retourOrganisme1ex', 'date', array(
				'widget' => 'single_text',
				'required' => false,
				'label' => "Retour de l'organisme en 1 ex",
				'format' => 'dd/MM/yyyy'
				))
            ->add('envoiPresidentU1ex', 'date', array(
				'widget' => 'single_text',
				'required' => false,
				'label' => "Envoi au Président de l'UB 1 ex",
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
