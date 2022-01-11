<?php

namespace App\Controller\Admin;

use App\Entity\TestAPI;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\HttpFoundation\Response; //Для передачи заголовка

class TestAPICrudController extends AbstractCrudController
{

    public function notifications(): Response
    {
        return $this->render('conference/index.html.twig', [
            'X-Total-Count' => '111',
        ]);
    }
    
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
