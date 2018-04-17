<?php

namespace OCIM\ExportBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TemplateType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
     public function buildForm(FormBuilderInterface $builder, array $options)
     {
       $builder
       ->add('nom', 'text', array(
         'attr' => array('class'=>'width-100'),
         'required' => true,
       ))
       ->add('type', 'choice', array(
         'choices' => array(
           "PDF (.pdf)" => 'pdf',
           "Convention (.pdf)" => 'convention',
         )
         'choices_as_values' => true,
       ))
       ->add('filename', 'text', array(
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
            'data_class' => 'OCIM\ExportBundle\Entity\Template'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ocim_exportbundle_template';
    }
}
