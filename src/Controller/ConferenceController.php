<?php

namespace App\Controller;

use App\Repository\ProductRepository; //Добавляем для вывода товаров c БД
use Twig\Environment; //главная точка входа TWIG

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * //@Route("/conference", name="conference")
     * @Route("/", name="homepage")
     */
    /*public function index(): Response
    {
        return $this->render('conference/index.html.twig', [
            'controller_name' => 'ConferenceController',
        ]);
        
    }*/
    //Передаем все методы в TWIG
    public function index(Environment $twig, ProductRepository $productRepository): Response
     {
        return new Response($twig->render('conference/index.html.twig', [
            'product' => $productRepository->findAll(),
        ]));
     }
}
