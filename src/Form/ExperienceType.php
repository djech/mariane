<?php

namespace App\Form;

use App\Entity\Experience;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExperienceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('poste', TextType::class)
            ->add('lieu', TextType::class)
            ->add('dateDebut', DateType::class, array('required' => true,
                'label' => 'Date de début du poste',
                'widget' => 'single_text',
                'format' => 'MM/yyyy',
                'html5' => false,
                'attr' => array(
                    'class' => 'form-field-normal experience js-datepicker',
                )))
            ->add('dateFin', DateType::class, array('required' => false,
                'label' => 'Date de fin du poste',
                'widget' => 'single_text',
                'format' => 'MM/yyyy',
                'html5' => false,
                'attr' => array(
                    'class' => 'form-field-normal experience js-datepicker',
                )))
            ->add('description', CKEditorType::class, array('config_name' => 'my_config'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Experience::class,
        ));
    }
}