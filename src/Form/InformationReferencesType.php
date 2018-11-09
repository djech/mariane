<?php

namespace App\Form;

use App\Entity\Information;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InformationReferencesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('references', CollectionType::class, array(
                'label' => "Références",
                'entry_type'   => ReferenceType::class,
                'allow_add'    => true,
                'allow_delete' => true,
                'by_reference'=> false,
                'prototype_name' => '__references__'
            ))
        ;
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Information::class,
        ));
    }
}