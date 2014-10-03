<?php

namespace OCIM\ContactsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use OCIM\ContactsBundle\Form\DataTransformer\StringToTypePersonneTransformer;

class IntervenantType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
	
        $builder
				->add('civilite', 'choice', array(
					'choices' => array(
					'Mlle' => 'Mlle',
					'Mme' => 'Mme',
					'Mr' => 'Mr',
					),
					'attr' => array('class'=> 'width-100')
				))
				->add('nom', 'text', array(
					'attr' => array('class'=> 'width-100')
				))
				->add('prenom', 'text', array(
					'attr' => array('class'=> 'width-100')
				))
				->add('fonction', 'text', array(
					'attr' => array('class'=> 'width-100')
				))
				->add('tel', 'text', array(
					'attr' => array('class'=> 'width-100'),
					'label' => 'Téléphone',
				))
				->add('mail', 'text', array(
					'attr' => array('class'=> 'width-100')
				))
				->add(
				$builder->create('adresse', 'form', array('by_reference' => false, "data_class"=> "OCIM\ContactsBundle\Entity\Adresse"))
					->add('nomStructure')
				)
				->add('commentaire')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
			'data_class' => 'OCIM\ContactsBundle\Entity\Intervenant',
			'attr' => array('class'=> 'forms'),
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
