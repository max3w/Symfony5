<?php

namespace App\Controller\Admin;

use App\Entity\TestAPI;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TestAPICrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TestAPI::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
            TextEditorField::new('content'),
        ];
    }
    */
}
