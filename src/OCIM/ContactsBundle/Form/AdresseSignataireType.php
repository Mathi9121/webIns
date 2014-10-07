<?php

namespace OCIM\ContactsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdresseSignataireType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$entityManager = $options['em'];
		
        $builder
            ->add('adresse', 'text', array(
				'attr' => array('class' => 'width-100'),
				'label' => 'Adresse',
			))
            ->add('adresseComplement', 'text', array(
				'attr' => array('class' => 'width-100'),
				'label' => "Complément d'adresse",
			))
            ->add('cP', 'text', array(
				'attr' => array('class' => 'width-100'),
				'label' => 'Code postal',
			))
            ->add('ville', 'text', array(
				'attr' => array('class' => 'width-100'),
			))
            ->add('pays', 'text', array(
				'attr' => array('class' => 'width-100'),
			))
			->add('structure', new StructureType(), array(
				'attr' => array('class' => 'width-100'),
				'data_class' => 'OCIM\ContactsBundle\Entity\Structure',
				'em' => $entityManager
			))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OCIM\ContactsBundle\Entity\Adresse',
			'attr' => array('class'=>'forms')
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
        return 'ocim_contactsbundle_adresse';
    }
}
