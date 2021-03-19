<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="list_product", methods={"GET"})
     */
    public function list(): Response
    {
        return $this->render('product/list.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    /**
     * @Route("/product/{id}", name="details_product", methods={"GET"})
     * @param int $id
     */
    public function details(int $id): Response
    {
        return $this->render('product/list.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    /**
     * @Route("/product/{id}/option", name="option_for_product", methods={"GET"})
     * @param int $id
     */
    public function product_option(int $id): Response
    {
        return $this->render('product/detail.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

}
