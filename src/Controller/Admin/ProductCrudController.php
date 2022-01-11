<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField; //Добавляем чтоб видело новые поля
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField; //
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField; //
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
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
