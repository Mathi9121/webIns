<?php

namespace OCIM\EvenementsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use OCIM\EvenementsBundle\Entity\Formule;

class FormuleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description', null, array(
				'required' => true,
				'label'  => 'Description',
				'attr' => array('class'=>'width-100')
			))
            ->add('tarif', null, array(
				'required' => true,
				'label'  => 'Tarif de la formule',
				'attr' => array('class'=>'width-100', "placeholder"=>'"250" ou "Gratuit"...'),
			))
            ->add('midi', null, array(
				'required' => false,
				'label'  => 'Repas du midi',
			))
            ->add('soir', null, array(
				'required' => false,
				'label'  => 'Repas du soir',
			))
            ->add('nuit', null, array(
				'required' => false,
				'label'  => 'Hébergement',
			))

        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Formule::class
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
        return 'ocim_evenementsbundle_formule';
    }
}
