<?php

namespace App\Controller;

use App\Entity\Liste;
use App\Repository\ListeRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class ListeController extends AbstractController
{
    #[Route('/liste/{listId}', name: 'app_liste_list')]
    public function listDetail(?string $listId, Session $session, ListeRepository $listeRepository): Response
    {

        $userList = $listeRepository->findBy(['utils' => $session->get('user')]);

        $list = $listeRepository->find($listId);

        return $this->render('liste/index-list.html.twig', [
            'controller_name' => 'ListeController',
            'user' => $session->get('user'),
            'listes' => $userList,
            'listeDetails' => $list,

        ]);
    }

    #[Route('/liste', name: 'create_list', methods: ['POST'])]
    public function create(Request $request, ManagerRegistry $registry, SessionInterface $session, UserRepository $userRepository): JsonResponse
    {
        if($request->request->get('nom') == null) {
            return new JsonResponse(['error' => 'Veuillez renseigner un nom'], Response::HTTP_BAD_REQUEST);
        }

        $list = new Liste();
        $list->setNomlist($request->request->get('nom'));
        $list->setUtils($userRepository->find($session->get('user')->getId()));

        $entityManager = $registry->getManager();
        $entityManager->persist($list);
        $entityManager->flush();

        return new JsonResponse(['message' => 'List created'], Response::HTTP_CREATED);
    }

    #[Route('/liste', name:'supprimer_liste', methods: ['DELETE'])]

    public function delete(Request $request, ManagerRegistry $registry, SessionInterface $session, ListeRepository $listeRepository): JsonResponse
    {
        if(!$request->request->get('listId')) {
            return new JsonResponse(['error' => 'Veuillez renseigner une liste'], Response::HTTP_BAD_REQUEST);
        }

        $list = $listeRepository->find($request->request->get('listId'));

        $entityManager = $registry->getManager();
        $entityManager->remove($list);
        $entityManager->flush();

        return new JsonResponse(['message' => 'Liste supprimée'], Response::HTTP_CREATED);

    }



}
