<?php

namespace dataBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class etatType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            $product = $event->getData();
            $form = $event->getForm();
            //$sexe = $form->getParent()->getData()->getSexe();

        });
        $builder
            ->add(
                'vente',
                ChoiceType::class ,
                [
                    'label'=>'En vente ?',
                    'choices'=>[
                        '0'=>'NON',
                        '1'=>'OUI'
                    ],
                    'expanded'=>true
                ]
            )
            ->add(
                'adoption',
                ChoiceType::class ,
                [
                    'label'=>'En adoption ?',
                    'choices'=>[
                        '0'=>'NON',
                        '1'=>'OUI'
                    ],
                    'expanded'=>true
                ]
            )
            ->add(
                'accouplement',
                ChoiceType::class ,
                [
                    'label'=>'En accouplement',
                    'choices'=>[
                        '0'=>'NON',
                        '1'=>'OUI'
                    ],
                    'expanded'=>true
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
            'data_class' => 'dataBundle\Entity\etat'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'databundle_etat';
    }


}
