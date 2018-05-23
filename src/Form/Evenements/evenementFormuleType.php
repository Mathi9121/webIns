<?php

namespace App\Form\Evenements;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Evenements\evenementFormule;
use App\Entity\Evenements\Formule;

class evenementFormuleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('formule', EntityType::class, array(
                'class' => Formule::class,
                'choice_translation_domain' => true,
				'label'=> false,
				'attr'=> array('class'=>'width-100'),
			))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => evenementFormule::class
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
        return 'ocim_evenementsbundle_evenementformule';
    }
}
