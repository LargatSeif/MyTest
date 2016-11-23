<?php

namespace userBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('nom')
            ->add('prenom')
            ->add(
                'sexe',
                'choice',
                [
                    'choices'=>
                        [
                            'H'=>'Homme',
                            'F'=>'Femme'
                        ],
                    'expanded'  =>true,
                    'label'     => false,
                    'attr'      =>
                        [
                            'class'=>'form-control',
                            'style'=>''
                        ]
                ]
            )
            ->add('datedenaissance', 'birthday')
            ->add('local','userBundle\Form\gouvernoratType')
            ->add('tel')
            ->add('bio')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'userBundle\Entity\User' ,
            'validation_groups' => ['Registration']             ,
        ]);
    }
}
