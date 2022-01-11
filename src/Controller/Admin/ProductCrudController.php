<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField; //Добавляем чтоб видело новые поля
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField; //
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField; //
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\HttpFoundation\Response; //Включаем компонент заголовков

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    public function notifications(): Response
    {
        return $this->render('templates/base.html.twig', [
            'X-Total-Count' => '111',
        ]);
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('sku'),
            TextField::new('name'),
            NumberField::new('price'),
            AssociationField::new('specifications'),
        ];
    }
    
}
