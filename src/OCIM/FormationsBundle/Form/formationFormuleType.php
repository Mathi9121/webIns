<?php

namespace OCIM\FormationsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class formationFormuleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('formule', 'entity', array(
				'class' => 'OCIM\FormationsBundle\Entity\Formule',
			))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OCIM\FormationsBundle\Entity\formationFormule'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ocim_formationsbundle_formationformule';
    }
}
