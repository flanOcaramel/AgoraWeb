<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251209102013 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE genre MODIFY idGenre INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON genre');
        $this->addSql('ALTER TABLE genre ADD lib_genre VARCHAR(255) NOT NULL, DROP libGenre, DROP idSpecialiste, CHANGE idGenre id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE genre ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE jeu_video ADD id INT AUTO_INCREMENT NOT NULL, ADD plateforme_id INT DEFAULT NULL, ADD pegi_id INT DEFAULT NULL, ADD genre_id INT DEFAULT NULL, ADD marque_id INT DEFAULT NULL, ADD ref_jeu VARCHAR(100) NOT NULL, ADD date_parution DATETIME NOT NULL, DROP refJeu, DROP idPlateforme, DROP idPegi, DROP idGenre, DROP idMarque, DROP dateParution, CHANGE nom nom VARCHAR(50) NOT NULL, CHANGE prix prix DOUBLE PRECISION NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE jeu_video ADD CONSTRAINT FK_4E22D9D4391E226B FOREIGN KEY (plateforme_id) REFERENCES plateforme (id)');
        $this->addSql('ALTER TABLE jeu_video ADD CONSTRAINT FK_4E22D9D4DD019E4A FOREIGN KEY (pegi_id) REFERENCES pegi (id)');
        $this->addSql('ALTER TABLE jeu_video ADD CONSTRAINT FK_4E22D9D44296D31F FOREIGN KEY (genre_id) REFERENCES genre (id)');
        $this->addSql('ALTER TABLE jeu_video ADD CONSTRAINT FK_4E22D9D44827B9B2 FOREIGN KEY (marque_id) REFERENCES marque (id)');
        $this->addSql('CREATE INDEX IDX_4E22D9D4391E226B ON jeu_video (plateforme_id)');
        $this->addSql('CREATE INDEX IDX_4E22D9D4DD019E4A ON jeu_video (pegi_id)');
        $this->addSql('CREATE INDEX IDX_4E22D9D44296D31F ON jeu_video (genre_id)');
        $this->addSql('CREATE INDEX IDX_4E22D9D44827B9B2 ON jeu_video (marque_id)');
        $this->addSql('ALTER TABLE marque MODIFY idMarque INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON marque');
        $this->addSql('ALTER TABLE marque ADD lib_marque VARCHAR(50) NOT NULL, DROP nomMarque, CHANGE idMarque id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE marque ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE membre DROP selMembre, CHANGE loginMembre loginMembre VARCHAR(180) NOT NULL, CHANGE mdpMembre mdpMembre VARCHAR(255) NOT NULL, CHANGE roles roles JSON NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_IDENTIFIER_USERNAME ON membre (loginMembre)');
        $this->addSql('ALTER TABLE pegi MODIFY idPegi INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON pegi');
        $this->addSql('ALTER TABLE pegi ADD desc_pegi VARCHAR(100) NOT NULL, DROP descPegi, CHANGE idPegi id INT AUTO_INCREMENT NOT NULL, CHANGE ageLimite age_limite INT NOT NULL');
        $this->addSql('ALTER TABLE pegi ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE plateforme MODIFY idPlateforme INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON plateforme');
        $this->addSql('ALTER TABLE plateforme ADD lib_platforme VARCHAR(50) NOT NULL, DROP libPlateforme, CHANGE idPlateforme id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE plateforme ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE genre MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON genre');
        $this->addSql('ALTER TABLE genre ADD libGenre VARCHAR(24) NOT NULL, ADD idSpecialiste INT DEFAULT NULL, DROP lib_genre, CHANGE id idGenre INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE genre ADD PRIMARY KEY (idGenre)');
        $this->addSql('ALTER TABLE jeu_video MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE jeu_video DROP FOREIGN KEY FK_4E22D9D4391E226B');
        $this->addSql('ALTER TABLE jeu_video DROP FOREIGN KEY FK_4E22D9D4DD019E4A');
        $this->addSql('ALTER TABLE jeu_video DROP FOREIGN KEY FK_4E22D9D44296D31F');
        $this->addSql('ALTER TABLE jeu_video DROP FOREIGN KEY FK_4E22D9D44827B9B2');
        $this->addSql('DROP INDEX IDX_4E22D9D4391E226B ON jeu_video');
        $this->addSql('DROP INDEX IDX_4E22D9D4DD019E4A ON jeu_video');
        $this->addSql('DROP INDEX IDX_4E22D9D44296D31F ON jeu_video');
        $this->addSql('DROP INDEX IDX_4E22D9D44827B9B2 ON jeu_video');
        $this->addSql('DROP INDEX `PRIMARY` ON jeu_video');
        $this->addSql('ALTER TABLE jeu_video ADD refJeu VARCHAR(16) NOT NULL, ADD idPlateforme INT DEFAULT NULL, ADD idPegi INT DEFAULT NULL, ADD idGenre INT DEFAULT NULL, ADD idMarque INT DEFAULT NULL, ADD dateParution DATE DEFAULT \'2018-03-16\' NOT NULL, DROP id, DROP plateforme_id, DROP pegi_id, DROP genre_id, DROP marque_id, DROP ref_jeu, DROP date_parution, CHANGE nom nom VARCHAR(100) NOT NULL, CHANGE prix prix NUMERIC(6, 2) NOT NULL');
        $this->addSql('ALTER TABLE jeu_video ADD PRIMARY KEY (refJeu)');
        $this->addSql('ALTER TABLE plateforme MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON plateforme');
        $this->addSql('ALTER TABLE plateforme ADD libPlateforme VARCHAR(24) NOT NULL, DROP lib_platforme, CHANGE id idPlateforme INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE plateforme ADD PRIMARY KEY (idPlateforme)');
        $this->addSql('ALTER TABLE pegi MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON pegi');
        $this->addSql('ALTER TABLE pegi ADD descPegi VARCHAR(400) NOT NULL, DROP desc_pegi, CHANGE id idPegi INT AUTO_INCREMENT NOT NULL, CHANGE age_limite ageLimite INT NOT NULL');
        $this->addSql('ALTER TABLE pegi ADD PRIMARY KEY (idPegi)');
        $this->addSql('ALTER TABLE marque MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON marque');
        $this->addSql('ALTER TABLE marque ADD nomMarque VARCHAR(40) NOT NULL, DROP lib_marque, CHANGE id idMarque INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE marque ADD PRIMARY KEY (idMarque)');
        $this->addSql('DROP INDEX UNIQ_IDENTIFIER_USERNAME ON membre');
        $this->addSql('ALTER TABLE membre ADD selMembre CHAR(128) NOT NULL, CHANGE loginMembre loginMembre VARCHAR(20) NOT NULL, CHANGE roles roles JSON DEFAULT NULL, CHANGE mdpMembre mdpMembre CHAR(128) NOT NULL');
    }
}
