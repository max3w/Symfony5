<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\Specifications; //Обьявляем Specifications
use Symfony\Bridge\Doctrine\Form\Type\EntityType; //
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('sku')
            ->add('name')
            ->add('price')

            //Add my option
            ->add('Specifications',EntityType::class,[
            'class' => Specifications::class,
            'choice_label' => 'size',
            'label' => 'Specifications',
            'attr'=>[
                'class'=>'form-control'
            ],
        ])
            //
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
