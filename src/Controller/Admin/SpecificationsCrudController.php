<?php

namespace App\Controller\Admin;

use App\Entity\Specifications;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SpecificationsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Specifications::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
