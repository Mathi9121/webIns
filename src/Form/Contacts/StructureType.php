<?php

namespace App\Form\Contacts;

use App\Form\Contacts\DataTransformer\StringToTagsTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\Contacts\Structure;

class StructureType extends AbstractType
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
            ->add('type', null, array(
				'attr' => array('class'=>'width-100'),
				'required' => false,
				'query_builder' => function(EntityRepository $repository) { 
					return $repository->createQueryBuilder('u')->orderBy('u.type', 'ASC');
				}
			))
            ->add(
				$builder->create('tags', TextType::class, array(
				'attr' => array('class'=>'width-100'),
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
            'data_class' => Structure::class
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
        return 'ocim_contactsbundle_structure';
    }
}
