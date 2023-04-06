<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220923120950 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE habitat (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(100) NOT NULL, titre VARCHAR(100) NOT NULL, nombre_couchage INT NOT NULL, Surface INT NOT NULL, prix DOUBLE PRECISION NOT NULL, adresse VARCHAR(150) NOT NULL, codepostale VARCHAR(10) NOT NULL, ville VARCHAR(200) NOT NULL, pays VARCHAR(30) NOT NULL, date_pub DATETIME DEFAULT NULL, description VARCHAR(600) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, touser_id INT DEFAULT NULL, habitat_id INT DEFAULT NULL, fromuser_id INT DEFAULT NULL, DateMessage DATETIME NOT NULL, texte VARCHAR(300) NOT NULL, INDEX IDX_B6BD307F788F388B (touser_id), INDEX IDX_B6BD307FAFFE2D26 (habitat_id), INDEX IDX_B6BD307FD36C4FC6 (fromuser_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE photo (id INT AUTO_INCREMENT NOT NULL, habitat_id INT NOT NULL, Source VARCHAR(200) NOT NULL, INDEX IDX_14B78418AFFE2D26 (habitat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE photo2 (id INT AUTO_INCREMENT NOT NULL, prise_id INT NOT NULL, source VARCHAR(150) NOT NULL, INDEX IDX_9AD91DFB6F45065 (prise_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prisedevue (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, reservation_id INT NOT NULL, Commentaire VARCHAR(350) NOT NULL, Dateprise DATETIME NOT NULL, INDEX IDX_DE2D3348A76ED395 (user_id), INDEX IDX_DE2D3348B83297E7 (reservation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, habitat_id INT NOT NULL, NombreNuit INT NOT NULL, PrixTotal DOUBLE PRECISION NOT NULL, DateReservation DATETIME NOT NULL, DateDebut DATETIME NOT NULL, DateFin DATETIME NOT NULL, INDEX IDX_42C84955A76ED395 (user_id), INDEX IDX_42C84955AFFE2D26 (habitat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307F788F388B FOREIGN KEY (touser_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FAFFE2D26 FOREIGN KEY (habitat_id) REFERENCES habitat (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FD36C4FC6 FOREIGN KEY (fromuser_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE photo ADD CONSTRAINT FK_14B78418AFFE2D26 FOREIGN KEY (habitat_id) REFERENCES habitat (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE photo2 ADD CONSTRAINT FK_9AD91DFB6F45065 FOREIGN KEY (prise_id) REFERENCES prisedevue (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE prisedevue ADD CONSTRAINT FK_DE2D3348A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE prisedevue ADD CONSTRAINT FK_DE2D3348B83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955AFFE2D26 FOREIGN KEY (habitat_id) REFERENCES habitat (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307F788F388B');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FAFFE2D26');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FD36C4FC6');
        $this->addSql('ALTER TABLE photo DROP FOREIGN KEY FK_14B78418AFFE2D26');
        $this->addSql('ALTER TABLE photo2 DROP FOREIGN KEY FK_9AD91DFB6F45065');
        $this->addSql('ALTER TABLE prisedevue DROP FOREIGN KEY FK_DE2D3348A76ED395');
        $this->addSql('ALTER TABLE prisedevue DROP FOREIGN KEY FK_DE2D3348B83297E7');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955A76ED395');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955AFFE2D26');
        $this->addSql('DROP TABLE habitat');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE photo');
        $this->addSql('DROP TABLE photo2');
        $this->addSql('DROP TABLE prisedevue');
        $this->addSql('DROP TABLE reservation');
    }
}
