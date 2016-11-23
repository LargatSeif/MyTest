<?php

namespace dataBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class chienType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder
            ->add('nom')
            ->add(
                'sexe',
                ChoiceType::class,
                [
                    'label'=>'Sexe ',
                    'choices'=>
                        [
                            'M'=>'Male',
                            'F'=>'Femelle',
                        ],
                    'expanded'=>true,
                ]
            )
            ->add(
                'age',
                BirthdayType::class,
                [
                    'widget'=> 'single_text',
                    'attr'=>[
                        'class'=>'datepicker'
                    ]
                ]
            )
            ->add('taille')
            ->add(
                'etat',
                'dataBundle\Form\etatType',
                [
                    'label'=>false,
                ]
                )
            ->add(
                'race'
                , EntityType::class,
                [
                    'class'=>'dataBundle\Entity\race',
                    'label'=>'libéllé',
                    'choice_label'=>'libelle'
                ]
            )
            ->add('photo','dataBundle\Form\photoDogType',['label'=>false,'required'=>false,'attr'=>['class'=>'hide']])
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'dataBundle\Entity\chien'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'databundle_chien';
    }


}
