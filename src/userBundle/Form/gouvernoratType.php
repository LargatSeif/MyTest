<?php

namespace userBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class gouvernoratType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'nom',
                'entity',
                [
                    'label'=>false,
                    'class'=>'userBundle\Entity\gouvernorat',
                    'choice_label' => 'nom',
                    'attr'=>['class'=>'browser-default']
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
            'data_class' => 'userBundle\Entity\gouvernorat'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'userbundle_gouvernorat';
    }


}
