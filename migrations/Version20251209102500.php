<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;


/**
 * Migration pour hasher les mots de passe existants en clair
 */
final class Version20251209102500 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Hash les mots de passe existants en clair avec le système Symfony';
    }

    public function up(Schema $schema): void
    {
        // Récupérer tous les membres avec des mots de passe en clair
        $sql = "SELECT idMembre, mdpMembre FROM membre WHERE mdpMembre NOT LIKE '$%' AND mdpMembre NOT LIKE '{%' AND mdpMembre != ''";
        $stmt = $this->connection->executeQuery($sql);
        $membres = $stmt->fetchAllAssociative();

        $passwordHasher = $this->getPasswordHasher();

        foreach ($membres as $membre) {
            $plainPassword = $membre['mdpMembre'];
            
            // Hasher le mot de passe
            $hashedPassword = $passwordHasher->hashPassword(null, $plainPassword);
            
            // Mettre à jour le mot de passe dans la base de données
            $updateSql = "UPDATE membre SET mdpMembre = :password WHERE idMembre = :id";
            $this->connection->executeStatement($updateSql, [
                'password' => $hashedPassword,
                'id' => $membre['idMembre']
            ]);
        }
    }

    public function down(Schema $schema): void
    {
        // Cette migration ne peut pas être annulée facilement
        // car nous ne pouvons pas retrouver les mots de passe en clair
        $this->addSql("UPDATE membre SET mdpMembre = 'password_reset_required' WHERE mdpMembre LIKE '$%' OR mdpMembre LIKE '{%'");
    }

    private function getPasswordHasher()
    {
        // Utiliser l'algorithme bcrypt directement pour éviter les dépendances
        return new class {
            public function hashPassword($user, $plainPassword): string
            {
                return password_hash($plainPassword, PASSWORD_BCRYPT, ['cost' => 12]);
            }
        };
    }
}