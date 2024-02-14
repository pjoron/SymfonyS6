<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManageSubController extends AbstractController
{
    #[Route('/manage/sub', name: 'app_manage_sub')]
    public function index(): Response
    {
        return $this->render('manage_sub/index.html.twig', [
            'controller_name' => 'ManageSubController',
        ]);
    }
}
