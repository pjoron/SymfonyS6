<?php

namespace App\Controller;

use App\Repository\SubsRepository;
use App\Repository\PdfRepository; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    #[Route('/home', name: 'app_home_page')]
    public function index(SubsRepository $subsRepository, PdfRepository $pdfRepository): Response 
    {
        $subs = $subsRepository->findAll();
        $user = $this->getUser();
        $pdfCountToday = 0; 
        $now = new \DateTime('now', new \DateTimeZone('UTC'));
        $endOfDay = new \DateTime("tomorrow", new \DateTimeZone('UTC'));
        $endOfDay->modify('-1 second');

        $timeLeft = $endOfDay->getTimestamp() - $now->getTimestamp(); // pour le temps restant 


        if ($user) {
            $startOfDay = new \DateTime("today", new \DateTimeZone('UTC'));
            $endOfDay = new \DateTime("tomorrow", new \DateTimeZone('UTC'));
            $endOfDay->modify('-1 second');
            $now = new \DateTime('now', new \DateTimeZone('UTC'));




            $pdfCountToday = $pdfRepository->findPdfGeneratedByUserOnDate($user->getId(), $startOfDay, $endOfDay);
        }

        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
            'subs' => $subs,
            'user' => $user,
            'pdfCountToday' => $pdfCountToday,  
            'timeLeft' => $timeLeft,
        ]);
    }
}
