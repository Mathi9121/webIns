<?php

namespace OCIM\FormationsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use OCIM\ContactsBundle\Form\DataTransformer\StringToTagsTransformer;

class AjoutIntervenantType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('intervenants', 'entity', array(
            'class' => 'OCIM\ContactsBundle\Entity\Intervenant',
            'multiple' => true,
            'expanded' => true,
            'required' => false,
            'property' => 'id'
          ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
			     'data_class' => 'OCIM\FormationsBundle\Entity\Formation',
		       'attr' => array('class'=> ''),
        ));

    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ocim_formationsocim_formation';
    }
}
