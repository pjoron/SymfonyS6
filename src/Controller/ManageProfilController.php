<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManageProfilController extends AbstractController
{
    #[Route('/manage/profil', name: 'app_manage_profil')]
    public function index(): Response
    {
        return $this->render('manage_profil/index.html.twig', [
            'controller_name' => 'ManageProfilController',
        ]);
    }
}
