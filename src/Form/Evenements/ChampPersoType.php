<?php

namespace App\Form\Evenements;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\CollectionType;

use App\Form\Evenements\ModeleChampPersoType;
use App\Entity\Evenements\Evenement;

class ChampPersoType extends AbstractType
{

	public function __construct($idevenement){
		$this->idevenement = $idevenement;
	}
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
			->add('modeles', CollectionType::class, array(
                'entry_type' => new ModeleChampPersoType($this->idevenement),
				'allow_add' => true,
				'allow_delete' => true,
				));
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' =>  Evenement::class,
			'attr' => array('class'=> 'forms'),
        ));
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
        return 'ocim_evenementsbundle_evenement';
    }
}

