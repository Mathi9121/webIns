<?php

namespace OCIM\ContactsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use OCIM\ContactsBundle\Form\DataTransformer\StringToTagsTransformer;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class IntervenantType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$entityManager = $options['em'];
		$transformer = new StringToTagsTransformer($entityManager);
        $builder
				->add('civilite', ChoiceType::class, array(
					'choices' => array(
					'Mlle' => 'Mlle',
					'Mme' => 'Mme',
					'Mr' => 'Mr',
					),
					'choices_as_values' => true,
					'attr' => array('class'=> 'width-100'),
					'required' => false
				))
				->add('nom', TextType::class, array(
					'attr' => array('class'=> 'width-100'),
					'required' => false
				))
				->add('prenom', TextType::class, array(
					'attr' => array('class'=> 'width-100'),
					'required' => false
				))
				->add('fonction', TextType::class, array(
					'attr' => array('class'=> 'width-100'),
					'required' => false
				))
				->add('tel', TextType::class, array(
					'attr' => array('class'=> 'width-100'),
					'required' => false,
					'label' => 'Téléphone',
				))
				->add('mail', TextType::class, array(
					'attr' => array('class'=> 'width-100'),
					'required' => false
				))
        ->add('adresse', new AdresseType(),array(
          'required' => false,
          'label' => false,
          'em' => $entityManager
        ))
				->add('commentaire', null, array(
					'attr' => array('class'=> 'width-100'),
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
			'data_class' => 'OCIM\ContactsBundle\Entity\Intervenant',
			'attr' => array('class'=> 'forms'),
        ));

		$resolver->setRequired(array(
            'em',
        ));

        $resolver->setAllowedTypes(
            'em' => 'Doctrine\Common\Persistence\ObjectManager',
        );
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
