<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260303120000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Créé la table LoginTrace pour les logs de connexion';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE LoginTrace (idLoginTrace INT AUTO_INCREMENT NOT NULL, idMembre INT DEFAULT NULL, dateConnexion DATETIME NOT NULL, adresseIP VARCHAR(45) NOT NULL, succes TINYINT(1) NOT NULL, INDEX IDX_LoginTrace_idMembre (idMembre), PRIMARY KEY(idLoginTrace)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE LoginTrace ADD CONSTRAINT FK_LoginTrace_idMembre FOREIGN KEY (idMembre) REFERENCES membre (idMembre)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE LoginTrace');
    }
}
