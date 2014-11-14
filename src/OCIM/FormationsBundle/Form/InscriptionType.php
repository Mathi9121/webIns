<?php

namespace OCIM\FormationsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use OCIM\ContactsBundle\Form\PersonneType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class InscriptionType extends AbstractType
{
	private $idformation;
	
	public function __construct($idformation)
    {
        $this->idformation = $idformation;
    }
	
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		
		$idformation = $this->idformation;
        $builder
			->add('stagiaire', new \OCIM\ContactsBundle\Form\PersonneType(), array(
				'data_class' => 'OCIM\ContactsBundle\Entity\Stagiaire',
				//'type'=> new \OCIM\ContactsBundle\Form\PersonneType()
				))
			->add('formationformule', "entity", array(
				'class' => 'OCIM\FormationsBundle\Entity\formationFormule',
				"attr" => array('class'=>'width-100'),
				"query_builder" => function(EntityRepository $er) use ($idformation)
					{
						return $er->createQueryBuilder('u')
						->where('u.formation = :idformation')
						->setParameter('idformation', $idformation);
					},
				))
            ->add('dateInscription', 'datetime', array(
				'widget' => 'single_text',
				'format' => 'yyyy-MM-dd HH:mm:ss',
				'required' => false,
				'read_only' => true,
				'attr' => array('class' => 'width-100')
				))
            ->add('numberStatut','choice', array(
				'choices'   => array( '1' => 'Accepté', '2' => 'En attente', "3" => "Annulé"),
				//'preferred_choices' => array('en attente')
				'attr' => array('class' => 'width-100')
				))
            ->add('attentes', "textarea", array(
				'attr' => array("class"=>"width-100")
				))
            //->add('statutOrgFinanceur')
            //->add('statutConvention')
            //->add('hash')
            //->add('convention')
			
			->addEventListener(
				FormEvents::POST_SUBMIT,
				function(FormEvent $event) {
					$entity = $event->getForm()->getData();
					$entity->setStatut($event->getForm()->get('numberStatut')->getData());
				}
			)
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OCIM\FormationsBundle\Entity\Inscription',
			'attr' => array('class' => 'forms')
        ));

    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ocim_formationsbundle_inscription';
    }
}
