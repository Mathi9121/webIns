<?php

namespace OCIM\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use OCIM\UserBundle\Entity\User;

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
//	      ->add('mail', TextType::class, array(
//				'label'=> '',
//			))
            ->add('login', TextType::class, array(
				'label'=> 'Login',
			))
            ->add('password', PasswordType::class, array(
				'label'=> 'Mot de passe',
			))
            ->add('username', TextType::class, array(
                                'label' => 'Username',
                        ))
            ->add('username_canonical', TextType::class, array(
                                'label' => 'UsernameCanonical',
                        ))
            ->add('email', TextType::class, array(
                                'label' => '',
                        ))
            ->add('email_canonical', TextType::class, array(
                                'label' => '',
                        ))
            ->add('enabled', null, array(
                                'label' => '',
                        ))
            ->add('salt', TextType::class, array(
                                'label' => '',
                        ))
            ->add('last_login', DateTimeType::class, array(
                                'widget' => 'single_text',
                                'format' => 'dd/MM/yyyy HH:mm:ss',
                                'required' => false,
                                'disabled' => true,
                                'label' => 'Date',
                        ))
            ->add('confirmation_token', TextType::class, array(
                                'label' => 'Confirmation',
                        ))
            ->add('password_requested_at', DateTimeType::class, array(
                                'widget' => 'single_text',
                                'format' => 'dd/MM/yyyy HH:mm:ss',
                                'required' => false,
                                'disabled' => true,
                                'label' => 'Date',
                        ))
            ->add('roles', TextareaType::class, array(
                                'attr' => array("class"=>"width-100", 'rows'=> 5),
                                'required' => false,
                        ))
            ->add('dn', TextType::class, array(
                                'label' => 'Dn',
                        ))
            ->add('name', TextType::class, array(
                                'label' => 'Name',
                        ))
            ->add('language', TextType::class, array(
                                'label' => 'Language',
                        ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
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
