<?php

namespace OCIM\ContactsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
            ->add('civilite', 'choice', array(
				'choices' => array(
					'Mlle' => 'Mlle',
					'Mme' => 'Mme',
					'Mr' => 'Mr',
                    ),
                'choices_as_values' => true,
				//'empty_value' => 'Choisissez une option',
				'attr' => array('class'=> 'width-100'),
				'required' => false,
				'label' => "Civilité"
			))
            ->add('nom', 'text', array(
				'attr' => array('class'=> 'width-100'),
				'required' => false
			))
            ->add('prenom', 'text', array(
				'attr' => array('class'=> 'width-100'),
				'required' => false,
				'label' => "Prénom"
			))
            ->add('fonction', 'text', array(
				'attr' => array('class'=> 'width-100'),
				'required' => false,
				'label' => "Fonction",
			))
            ->add('tel', 'text', array(
				'attr' => array('class'=> 'width-100'),
				'label' => 'Téléphone',
				'required' => false,
			))
            ->add('fax', 'text', array(
				'required' => false,
				'attr' => array('class'=> 'width-100'),
				'required' => false,
			))
            ->add('mail', 'text', array(
				'attr' => array('class'=> 'width-100'),
				'label' => "Adresse Mail",
				'required' => false
			))
			->add('adresse', new AdresseType(),array(
				'required' => false,
				'label' => false,
        'em' => $entityManager
			))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OCIM\ContactsBundle\Entity\Personne',
			'attr' => array('class'=> 'forms'),
        ));
        $resolver->setRequired(array(
            'em',
        ));

        $resolver->setAllowedTypes(array(
            'em' => 'Doctrine\Common\Persistence\ObjectManager',
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ocim_contactsbundle_personne';
    }
}
