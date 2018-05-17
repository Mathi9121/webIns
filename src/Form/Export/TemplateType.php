<?php

namespace App\Form\Export;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class TemplateType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
     public function buildForm(FormBuilderInterface $builder, array $options)
     {
       $builder
       ->add('nom', TextType::class, array(
         'attr' => array('class'=>'width-100'),
         'required' => true,
       ))
       ->add('type', ChoiceType::class, array(
         'choices' => array(
           "PDF (.pdf)" => 'pdf',
           "Convention (.pdf)" => 'convention',
         ),
         'choices_as_values' => true,
       ))
       ->add('filename', TextType::class, array(
         'attr' => array('class'=>'width-100'),
         'required' => false
       ))
       ->add('contenu', null, array(
         'required' => false
       ))
       ;
     }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Entity\Export\Template'
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
        return 'ocim_exportbundle_template';
    }
}
