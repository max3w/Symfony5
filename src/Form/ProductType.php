<?php

namespace App\Form;

use App\Entity\Product;
use App\Form\EntityType; //Обьявляем и этот класс.
use App\Entity\Specifications; //Обьявляем Specifications
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder


        ->add('Specifications',EntityType::class,[
            'class' => Specifications::class,
            'choice_label' => 'size',
            'label' => '111',
            'attr'=>[
                'class'=>'form-control'
            ],
        ])

            ->add('sku')
            ->add('name')
            ->add('price')
            //add Specifications ->id; ->size; ->color;
            //->id;
            //->add('size') ?
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
