<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OptionController extends AbstractController
{

    /**
     * @Route("/option/{id}", name="details_option", methods={"GET"})
     * @param int $id
     */
    public function details(int $id): Response
    {
        return $this->render('option/detail.html.twig', [
            'controller_name' => 'OptionController',
        ]);
    }
}
