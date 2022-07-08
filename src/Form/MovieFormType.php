<?php

namespace App\Form;

use App\Entity\Movie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Type;

class MovieFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('casts', CollectionType::class, [
                'allow_add' => true,
                'allow_extra_fields' => true,
                'constraints' => [
                    new Type('array')
                ]
            ])
            ->add('release_date', DateTimeType::class, [
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'html5' => false,

            ])
            ->add('director', TextType::class)
            ->add('ratings', RatingFormType::class)
        ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Movie::class,
            'csrf_protection' => false,
            'allow_extra_fields' => true
        ]);
    }
}