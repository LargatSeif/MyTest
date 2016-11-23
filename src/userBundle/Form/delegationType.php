<?php

namespace userBundle\Form;

use Symfony\Component\DomCrawler\Field\ChoiceFormField;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class delegationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'nom',
                    ChoiceType::class,
                [
                    'empty_value'=>'--DELEGATION--',
                    'attr'=>[
                        'class'=>'browser-default'
                    ],
                    'label'=>false]) 
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'userBundle\Entity\delegation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'userbundle_delegation';
    }


}
