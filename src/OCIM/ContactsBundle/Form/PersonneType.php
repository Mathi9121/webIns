<?php

namespace OCIM\ContactsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use OCIM\ContactsBundle\Form\DataTransformer\StringToTypePersonneTransformer;

class PersonneType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$entityManager = $options['em'];
        $transformer = new StringToTypePersonneTransformer($entityManager);
		
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
            ->add('fax', 'text', array(
				'required' => false,
				'attr' => array('class'=> 'width-100')
			))
            ->add('mail', 'text', array(
				'attr' => array('class'=> 'width-100')
			))
            ->add('mailAdmin', 'text', array(
				'attr' => array('class'=> 'width-100')
			))
            
            ->add(
				$builder->create('type', 'hidden')->addModelTransformer($transformer))
			->add('adresse', new AdresseType(),array(
				'required' => false,
			))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OCIM\ContactsBundle\Entity\Personne',
			'attr' => array('class'=> 'forms'),
			'em' => null
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
