<?php

namespace App\Form\Contacts;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Form\Contacts\DataTransformer\StringToTypePersonneTransformer;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use App\Form\Contacts\AdresseSignataireType;
use App\Entity\Contacts\Adresse;
use App\Entity\Contacts\Signataire;

class SignataireType extends AbstractType
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
				'attr' => array('class'=> 'width-100'),
				'required' => false
			))
            ->add('nom', TextType::class, array(
				'attr' => array('class'=> 'width-100')
			))
            ->add('prenom', TextType::class, array(
				'attr' => array('class'=> 'width-100')
			))
            ->add('fonction', TextType::class, array(
				'attr' => array('class'=> 'width-100')
			))
            ->add('mail', TextType::class, array(
				'attr' => array('class'=> 'width-100')
			))
			->add('adresse', AdresseSignataireType::class, array(
				'attr' => array('class'=> 'width-100'),
				'data_class' => Adresse::class,
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
            'data_class' => Signataire::class,
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
        return 'ocim_contactsbundle_signataire';
    }
}
