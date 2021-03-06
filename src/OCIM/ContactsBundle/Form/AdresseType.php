<?php

namespace OCIM\ContactsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use OCIM\ContactsBundle\Form\DataTransformer\StringToTagsTransformer;
use OCIM\ContactsBundle\Entity\Adresse;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AdresseType extends AbstractType
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
            ->add('nomStructure', TextType::class, array(
				'attr' => array('class' => 'width-100'),
				'label' => 'Nom de la structure',
			))
            ->add('adresse', TextType::class, array(
				'attr' => array('class' => 'width-100'),
				'label' => 'Adresse',
			))
            ->add('adresseComplement', TextType::class, array(
				'attr' => array('class' => 'width-100'),
				'label' => "Complément d'adresse",
			))
            ->add('cP', TextType::class, array(
				'attr' => array('class' => 'width-100'),
				'label' => 'Code postal',
			))
            ->add('ville', TextType::class, array(
				'attr' => array('class' => 'width-100'),
			))
            ->add('pays', TextType::class, array(
				'attr' => array('class' => 'width-100'),
			))
            ->add(
        $builder->create('tags', TextType::class, array(
        'attr' => array('class'=>'width-100 tags'),
        'required' => false,
        // 'data_class' => 'OCIM\ContactsBundle\Entity\TagStructure'
        ))->addModelTransformer($transformer))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Adresse::class
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
        return 'ocim_contactsbundle_adresse';
    }
}
