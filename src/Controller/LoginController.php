<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'login')]
    public function index(Request $request, UserRepository $userRepository, Session $session): Response
    {


        if ($session->get('user')) {
            return $this->redirectToRoute('app_dashboard');
        }

        if ($request->isMethod('post')){
            $identifiant = $request->request->get('email');
            $user = $userRepository->findOneBy(['identifiant' => $identifiant]);

            if ($user != null){
                $session->set('user',$user);
                return $this->redirectToRoute('app_dashboard');
            }

            $this->addFlash('error','identifiant incorrect');
        }

        return $this->render('login/index.html.twig', [
            'controller-name' => 'LoginController',
    ]);
    }
    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout(Session $session) {
        $session->clear();
        return $this->redirectToRoute('login');
    }
}
