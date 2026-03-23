<?php

namespace App\DataFixtures;

use App\Entity\CatTournois;
use App\Entity\Tournoi;
use App\Entity\Participant;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Créer des catégories de tournois
        $categories = [];
        $catData = ['Action', 'Stratégie', 'Course', 'Sport'];
        foreach ($catData as $libelle) {
            $cat = new CatTournois();
            $cat->setLibelle($libelle);
            $manager->persist($cat);
            $categories[] = $cat;
        }

        // Créer des participants
        $participants = [];
        $partData = [
            ['Jean', 'Dupont', '0123456789', 'jean@example.com'],
            ['Marie', 'Martin', '0987654321', 'marie@example.com'],
            ['Pierre', 'Durand', '0111111111', 'pierre@example.com'],
            ['Sophie', 'Leroy', '0222222222', 'sophie@example.com'],
        ];
        foreach ($partData as $data) {
            $part = new Participant();
            $part->setPrenom($data[0]);
            $part->setNom($data[1]);
            $part->setTelephone($data[2]);
            $part->setEmail($data[3]);
            $manager->persist($part);
            $participants[] = $part;
        }

        // Créer des tournois
        $tournois = [];
        $tournoiData = [
            ['Tournoi Action 1', new \DateTime('2025-12-01 10:00'), $categories[0]],
            ['Tournoi Stratégie', new \DateTime('2025-12-05 14:00'), $categories[1]],
            ['Course Champion', new \DateTime('2025-12-10 16:00'), $categories[2]],
            ['Sport Extrême', new \DateTime('2025-12-15 18:00'), $categories[3]],
        ];
        foreach ($tournoiData as $data) {
            $tournoi = new Tournoi();
            $tournoi->setLibelle($data[0]);
            $tournoi->setDate($data[1]);
            $tournoi->setDateCreation(new \DateTime());
            $tournoi->setCategorie($data[2]);
            // Ajouter quelques participants
            $tournoi->addParticipant($participants[array_rand($participants)]);
            $tournoi->addParticipant($participants[array_rand($participants)]);
            $manager->persist($tournoi);
            $tournois[] = $tournoi;
        }

        $manager->flush();
    }
}
