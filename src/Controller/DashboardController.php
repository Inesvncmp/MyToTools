<?php

namespace App\Controller;

use App\Repository\ListeRepository;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(Session $session, ListeRepository $listeRepository): Response
    {

        if (!$session->get('user')) {
            return $this->redirectToRoute('login');
        }

        $userList = $listeRepository->findBy(['utils' => $session->get('user')]);


        return $this->render('dashboard/index-dash.html.twig', [
            'controller_name' => 'DashboardController',
            'user' => $session->get('user'),
            'listes' => $userList,
        ]);



    }
}
