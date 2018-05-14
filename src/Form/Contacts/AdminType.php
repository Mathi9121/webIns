<?php

namespace OCIM\ContactsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AdminType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		
        $builder
            ->add('civilite', ChoiceType::class, array(
				'choices' => array(
					'Mlle' => 'Mlle',
					'Mme' => 'Mme',
					'Mr' => 'Mr',
                    ),
                'choices_as_values' => true,
				'attr' => array('class'=> 'width-100'),
				'label' => 'Civilité',
				'required' => false,
			))
            ->add('nom', TextType::class, array(
				'attr' => array('class'=> 'width-100'),
				'required' => false,
			))
            ->add('prenom', TextType::class, array(
				'attr' => array('class'=> 'width-100'),
				'label' => 'Prénom',
				'required' => false,
			))
            ->add('fonction', TextType::class, array(
				'attr' => array('class'=> 'width-100'),
				'required' => false,
			))
            ->add('tel', TextType::class, array(
				'attr' => array('class'=> 'width-100'),
				'label' => 'Téléphone',
				'required' => false,
			))
            ->add('mail', TextType::class, array(
				'attr' => array('class'=> 'width-100'),
				'label' => 'Adresse Mail',
				'required' => false,
			))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OCIM\ContactsBundle\Entity\Admin',
			'attr' => array('class'=> 'forms'),
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
        return 'ocim_contactsbundle_admin';
    }
}
