<?php

namespace App\Controller;

use App\Entity\Tache;
use App\Repository\ListeRepository;
use App\Repository\TacheRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class TachesController extends AbstractController
{

    #[Route('/task', name: 'create_task', methods: ['POST'])]
    public function create(Request $request, ManagerRegistry $registry, Session $session, ListeRepository $listeRepository): JsonResponse
    {
        if (!$request->request->get('nom')) {
            return new JsonResponse(['error' => 'Veuillez renseigner un nom'], Response::HTTP_BAD_REQUEST);
        }

        $task = new Tache();
        $task->setNo�mtache($request->request->get('nom'));
        $task->setClassement($request->request->get('priority'));
        $task->setListe($listeRepository->find($request->request->get('liste')));
        $entityManager = $registry->getManager();
        $entityManager->persist($task);
        $entityManager->flush();

        return new JsonResponse(['message' => 'Task created'], Response::HTTP_CREATED);
    }

    #[Route('/task/toggle', name: 'toggle_task', methods: ['POST'])]
    public function update(Request $request, ManagerRegistry $registry, TacheRepository $tacheRepository): JsonResponse
    {
        $task = $tacheRepository->find($request->request->get('tacheId'));

        $task->setActive( !$task->getActive() );
        $entityManager = $registry->getManager();
        $entityManager->persist($task);
        $entityManager->flush();

        return new JsonResponse(['message' => 'Task updated'], Response::HTTP_CREATED);
    }

    #[Route('/task', name:'supprimer_tache', methods: ['DELETE'])]

    public function delete(Request $request, ManagerRegistry $registry, TacheRepository $tacheRepository): JsonResponse
    {
        if(!$request->request->get('tacheId')) {
            return new JsonResponse(['error' => 'Ne peux pas supprimer'], Response::HTTP_BAD_REQUEST);
        }

        $task = $tacheRepository->find($request->request->get('tacheId'));

        $entityManager = $registry->getManager();
        $entityManager->remove($task);
        $entityManager->flush();

        return new JsonResponse(['message' => 'Tache supprimée'], Response::HTTP_CREATED);

    }
}