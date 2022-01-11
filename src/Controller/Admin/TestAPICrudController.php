<?php

namespace App\Controller\Admin;

use App\Entity\TestAPI;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\HttpFoundation\Response; //Для передачи заголовка
$response = new Response();
$response->headers->set('111', '222');
$response->send();

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
