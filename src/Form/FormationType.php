<?php

namespace App\Form;

use App\Entity\Formation;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class)
            ->add('lieu', TextType::class)
            ->add('dateDebut', DateType::class, array('required' => true,
                'label' => 'Date de début du poste',
                'widget' => 'single_text',
                'format' => 'yyyy',
                'html5' => false,
                'attr' => array(
                    'class' => 'form-field-normal formation js-datepicker',
                )))
            ->add('dateFin', DateType::class, array('required' => true,
                'label' => 'Date de fin du poste',
                'widget' => 'single_text',
                'format' => 'yyyy',
                'html5' => false,
                'attr' => array(
                    'class' => 'form-field-normal formation js-datepicker',
                )))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Formation::class,
        ));
    }
}