<?php

namespace OCIM\EvenementsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
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
            'choice_translation_domain' => true,
            'multiple' => true,
            'expanded' => true,
            'required' => false,
            'choice_label' => 'id'
          ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
			     'data_class' => 'OCIM\EvenementsBundle\Entity\Evenement',
		       'attr' => array('class'=> ''),
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
        return 'ocim_evenementsocim_evenement';
    }
}
