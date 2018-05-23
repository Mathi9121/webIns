<?php

namespace App\Form\Contacts;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use App\Form\Contacts\AdresseType;
use App\Entity\Contacts\Personne;

class PersonneType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $entityManager = $options['em'];

        $builder
            ->add('civilite', ChoiceType::class, array(
				'choices' => array(
					'Mlle' => 'Mlle',
					'Mme' => 'Mme',
					'Mr' => 'Mr',
                    ),
				//'empty_value' => 'Choisissez une option',
				'attr' => array('class'=> 'width-100'),
				'required' => false,
				'label' => "Civilité"
			))
            ->add('nom', TextType::class, array(
				'attr' => array('class'=> 'width-100'),
				'required' => false
			))
            ->add('prenom', TextType::class, array(
				'attr' => array('class'=> 'width-100'),
				'required' => false,
				'label' => "Prénom"
			))
            ->add('fonction', TextType::class, array(
				'attr' => array('class'=> 'width-100'),
				'required' => false,
				'label' => "Fonction",
			))
            ->add('tel', TextType::class, array(
				'attr' => array('class'=> 'width-100'),
				'label' => 'Téléphone',
				'required' => false,
			))
            ->add('fax', TextType::class, array(
				'required' => false,
				'attr' => array('class'=> 'width-100'),
				'required' => false,
			))
            ->add('mail', TextType::class, array(
				'attr' => array('class'=> 'width-100'),
				'label' => "Adresse Mail",
				'required' => false
			))
			->add('adresse', AdresseType::class, array(
				'required' => false,
				'label' => false,
        'em' => $entityManager
			))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Personne::class,
			'attr' => array('class'=> 'forms'),
        ));
        $resolver->setRequired(array(
            'em',
        ));

        $resolver->setAllowedTypes('em', 'Doctrine\Common\Persistence\ObjectManager');
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
        return 'ocim_contactsbundle_personne';
    }
}
