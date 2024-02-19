<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Subs;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Security;


class ManageProfilController extends AbstractController
{
    #[Route('/manage/profil', name: 'manage_profil', methods: ['GET', 'POST'])]
    public function updateProfile(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        
        if (!$user) {
            throw new AccessDeniedException('Vous devez être connecté pour accéder à cette page.');
        }

        if ($request->isMethod('POST')) {
            $firstname = $request->request->get('firstname');
            $lastname = $request->request->get('lastname');
            $subscriptionId = $request->request->get('subscriptionId'); // Récupération de l'ID de l'abonnement depuis le formulaire


            if ($firstname) {
                $user->setFirstname($firstname);
            }

            if ($lastname) {
                $user->setLastname($lastname);
            }

            if ($subscriptionId) {
                $subscription = $entityManager->getRepository(Subs::class)->find($subscriptionId); 
                if ($subscription) {
                    $user->setSubscriptionId($subscription); 
                }
            }

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Votre profil a été mis à jour.');
            return $this->redirectToRoute('manage_profil');
        }

        $subscriptions = $entityManager->getRepository(Subs::class)->findAll();


        return $this->render('manage_profil/index.html.twig', [
            'user' => $user,
            'subscriptions' => $subscriptions,   

        ]);
    }
}
