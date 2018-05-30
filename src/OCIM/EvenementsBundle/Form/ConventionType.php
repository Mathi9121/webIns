<?php

namespace OCIM\EvenementsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use OCIM\EvenementsBundle\Entity\Convention;

class ConventionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numero', TextType::class, array(
				'required' => false,
				'attr'=> array('class'=>'input-big text-centered','size' => 3, 'style'=> 'margin: 0 auto !important;' )

				))
            ->add('edition', DateType::class, array(
				'label' => "Date d'édition",
				'widget' => 'single_text',
				'required' => false,
				'attr'=> array('class'=>'input-big text-centered', 'data-tool' => 'datepicker', 'style'=> 'margin: 0 auto !important;'),
				'format' => 'dd/MM/yyyy'
				))
            ->add('etape1', DateType::class, array(
				'widget' => 'single_text',
				'required' => false,
				'label' => "Etape 1",
				'format' => 'dd/MM/yyyy',
        'attr'=> array('data-tool' => 'datepicker'),
				))
            ->add('etape2', DateType::class, array(
				'widget' => 'single_text',
				'required' => false,
				'label' => "Etape 2",
				'format' => 'dd/MM/yyyy',
        'attr'=> array('data-tool' => 'datepicker'),
				))
            ->add('etape3', DateType::class, array(
				'widget' => 'single_text',
				'required' => false,
				'label' => "Etape 3",
				'format' => 'dd/MM/yyyy',
        'attr'=> array('data-tool' => 'datepicker'),
				))
            ->add('etape4', DateType::class, array(
				'widget' => 'single_text',
				'required' => false,
				'label' => "Etape 4",
				'format' => 'dd/MM/yyyy',
        'attr'=> array('data-tool' => 'datepicker'),
				))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Convention::class,
			'attr' => array('class'=> "forms")
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
        return 'ocim_evenementsbundle_convention';
    }
}
