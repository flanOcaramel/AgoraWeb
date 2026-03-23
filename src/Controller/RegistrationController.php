<?php

namespace App\Controller;

use App\Entity\Membre;
use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

class RegistrationController extends AbstractController
{
    #[Route(path: '/register', name: 'app_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager,
    ): Response {
        // Si l'utilisateur est déjà connecté, le rediriger vers l'accueil
        if ($this->getUser()) {
            return $this->redirectToRoute('accueil');
        }

        $membre = new Membre();
        $form = $this->createForm(RegistrationType::class, $membre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Hachage du mot de passe
            $hashedPassword = $passwordHasher->hashPassword(
                $membre,
                $form->get('plainPassword')->getData(),
            );
            $membre->setPassword($hashedPassword);

            // Attribution du rôle utilisateur par défaut
            $membre->setRoles(['ROLE_USER']);

            // Sauvegarde en base de données
            $entityManager->persist($membre);
            $entityManager->flush();

            // Message flash de succès
            $this->addFlash('success', 'Votre compte a été créé avec succès ! Vous pouvez maintenant vous connecter.');

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
