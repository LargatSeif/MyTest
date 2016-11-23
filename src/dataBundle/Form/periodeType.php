<?php

namespace dataBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class periodeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'dateDebut',
                BirthdayType::class,
                [
                    'widget'=> 'single_text',
                    'attr'=>[
                        'class'=>'datepicker'
                    ]
                ]
            )
            ->add(
                'dateFin',
                BirthdayType::class ,
                [ 
                    'widget'=> 'single_text',
                    'attr'=>[
                        'class'=>'datepicker'
                    ]
                ]
            )
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'dataBundle\Entity\periode'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'databundle_periode';
    }


}
