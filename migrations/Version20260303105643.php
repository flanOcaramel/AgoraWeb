<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260303105643 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE LoginTrace (idLoginTrace INT AUTO_INCREMENT NOT NULL, dateConnexion DATETIME NOT NULL, adresseIP VARCHAR(45) NOT NULL, succes TINYINT(1) NOT NULL, idMembre INT DEFAULT NULL, INDEX IDX_2490022B95A553B3 (idMembre), PRIMARY KEY(idLoginTrace)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE LoginTrace ADD CONSTRAINT FK_2490022B95A553B3 FOREIGN KEY (idMembre) REFERENCES membre (idMembre)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE LoginTrace DROP FOREIGN KEY FK_2490022B95A553B3');
        $this->addSql('DROP TABLE LoginTrace');
    }
}
