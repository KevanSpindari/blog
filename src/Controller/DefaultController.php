<?php

namespace App\Controller;

use App\Repository\BlogRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index(BlogRepository $blogRepository)
    {


        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'blog' => $blogRepository->findAll()
        ]);
    }
}