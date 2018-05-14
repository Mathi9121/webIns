<?php

namespace App\Form\User;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array(
				'label'=> 'Nom',
			))
            ->add('prenom', TextType::class, array(
				'label'=> 'Prénom',
			))
			->add('mail', TextType::class, array(
				'label'=> '',
			))
            ->add('login', TextType::class, array(
				'label'=> 'Login',
			))
            ->add('password', 'password', array(
				'label'=> 'Mot de passe',
			))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OCIM\UserBundle\Entity\User',
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
        return 'ocim_userbundle_user';
    }
}
