<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
  #[Route('/product/', name: 'products')]
  public function index(): Response
  {
    return $this->render('product/product.html.twig', [

      'product' => [],

    ]);
  }
}
