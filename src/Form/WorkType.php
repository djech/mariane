<?php

namespace App\Form;

use App\Entity\Work;
use App\Entity\WorkCategory;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class WorkType extends AbstractType
{

    protected $container;

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->container = $options['container'];

        $categories = $this->container->get('doctrine')
            ->getRepository(WorkCategory::class)
            ->findAll()
        ;

        $builder
            ->add('category', EntityType::class, array(
                'label' => 'Catégorie',
                'class' => 'App:WorkCategory',
                'choices'  => $categories,
                'choice_label' => function ($type, $key, $index) {
                    return $type->getNom();
                },
                'required' => true,
                'multiple' => false,
                'expanded' => false
            ))
            ->add('titre', TextType::class)
            ->add('lien', TextType::class)
            ->add('date', DateType::class, array('required' => true,
                'label' => 'Date',
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'html5' => false,
                'attr' => array(
                    'class' => 'form-field-normal work js-datepicker',
                )))
            ->add('preview', VichImageType::class, [
                'required' => true,
                'allow_delete' => true
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Work::class,
        ));
        $resolver->setRequired('container');
    }
}