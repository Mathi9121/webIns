<?php

namespace OCIM\FormationsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InscriptionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateInscription')
            ->add('statut')
            ->add('attentes')
            ->add('statutOrgFinanceur')
            ->add('statutConvention')
            ->add('hash')
            ->add('convention')
            ->add('formationformule')
            ->add('personnes')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OCIM\FormationsBundle\Entity\Inscription'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ocim_formationsbundle_inscription';
    }
}
