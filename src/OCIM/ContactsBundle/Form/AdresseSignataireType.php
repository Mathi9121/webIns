<?php

namespace OCIM\ContactsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use OCIM\ContactsBundle\Form\DataTransformer\StringToTagsTransformer;
use Doctrine\ORM\EntityRepository;

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
			->add('nomStructure', 'text', array(
				'attr' => array('class' => 'width-100'),
				'label' => 'Nom de la Structure',
			))
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
			->add('type', null, array(
				'attr' => array('class'=>'width-100'),
				'required' => false,
				'query_builder' => function(EntityRepository $repository) {
					return $repository->createQueryBuilder('u')->orderBy('u.type', 'ASC');
				}
			))
            ->add(
				$builder->create('tags', 'text', array(
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
