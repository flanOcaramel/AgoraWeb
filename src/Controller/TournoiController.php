<?php

namespace App\Controller;

use App\Entity\Tournoi;
use App\Form\TournoiType;
use App\Repository\TournoiRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route("/tournoi")]
final class TournoiController extends AbstractController
{
    #[Route(name: "app_tournoi_index", methods: ["GET"])]
    public function index(TournoiRepository $tournoiRepository): Response
    {
        return $this->render("tournoi/index.html.twig", [
            #'tournois' => $tournoiRepository->findAllWithParticipants(),
            "tournois" => $tournoiRepository->findAll(),
            "menuActif" => "Tournois",
        ]);
    }

    #[Route("/new", name: "app_tournoi_new", methods: ["GET", "POST"])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        TournoiRepository $tournoiRepository,
    ): Response {
        $tournoi = new Tournoi();
        $form = $this->createForm(TournoiType::class, $tournoi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Find the next available ID
            $existingIds = $tournoiRepository
                ->createQueryBuilder("t")
                ->select("t.id")
                ->orderBy("t.id")
                ->getQuery()
                ->getScalarResult();
            $existing = array_column($existingIds, "id");
            $nextId = 1;
            foreach ($existing as $id) {
                if ($id == $nextId) {
                    $nextId++;
                } else {
                    break;
                }
            }
            $tournoi->setId($nextId);

            // Définir automatiquement la date de création si elle n'est pas déjà définie
            if ($tournoi->getDateCreation() === null) {
                $tournoi->setDateCreation(new \DateTime());
            }
            $entityManager->persist($tournoi);
            $entityManager->flush();

            return $this->redirectToRoute(
                "app_tournoi_index",
                [],
                Response::HTTP_SEE_OTHER,
            );
        }

        return $this->render("tournoi/new.html.twig", [
            "tournoi" => $tournoi,
            "form" => $form,
            "menuActif" => "Tournois",
        ]);
    }

    #[Route("/{id}", name: "app_tournoi_show", methods: ["GET"])]
    public function show(Tournoi $tournoi): Response
    {
        return $this->render("tournoi/show.html.twig", [
            "tournoi" => $tournoi,
            "menuActif" => "Tournois",
        ]);
    }

    #[Route("/{id}/edit", name: "app_tournoi_edit", methods: ["GET", "POST"])]
    public function edit(
        Request $request,
        Tournoi $tournoi,
        EntityManagerInterface $entityManager,
    ): Response {
        $form = $this->createForm(TournoiType::class, $tournoi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute(
                "app_tournoi_index",
                [],
                Response::HTTP_SEE_OTHER,
            );
        }

        return $this->render("tournoi/edit.html.twig", [
            "tournoi" => $tournoi,
            "form" => $form,
            "menuActif" => "Tournois",
        ]);
    }

    #[Route("/{id}", name: "app_tournoi_delete", methods: ["POST"])]
    public function delete(
        Request $request,
        Tournoi $tournoi,
        EntityManagerInterface $entityManager,
    ): Response {
        if (
            $this->isCsrfTokenValid(
                "delete" . $tournoi->getId(),
                $request->getPayload()->getString("_token"),
            )
        ) {
            $entityManager->remove($tournoi);
            $entityManager->flush();
        }

        return $this->redirectToRoute(
            "app_tournoi_index",
            [],
            Response::HTTP_SEE_OTHER,
        );
    }
}
