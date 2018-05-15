<?php

namespace App\Form\Contacts;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Form\Contacts\DataTransformer\StringToTagsTransformer;
use Doctrine\ORM\EntityRepository;

use Symfony\Component\Form\Extension\Core\Type\TextType;

class AdresseSignataireType extends AbstractType
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
				'label' => 'Nom de la Structure',
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
			->add('type', null, array(
				'attr' => array('class'=>'width-100'),
				'required' => false,
				'query_builder' => function(EntityRepository $repository) {
					return $repository->createQueryBuilder('u')->orderBy('u.type', 'ASC');
				}
			))
            ->add(
				$builder->create('tags', TextType::class, array(
				'attr' => array('class'=>'width-100 tags'),
				'required' => false,
				// 'data_class' => 'Entity\Contacts\TagStructure'
			))->addModelTransformer($transformer))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Entity\Contacts\Adresse',
			'attr' => array('class'=>'forms')
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
