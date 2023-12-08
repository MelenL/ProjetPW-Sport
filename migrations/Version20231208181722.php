<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231208181722 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE Educateur DROP FOREIGN KEY educateur_ibfk_1');
        $this->addSql('ALTER TABLE Licencie DROP FOREIGN KEY licencie_ibfk_1');
        $this->addSql('ALTER TABLE Licencie DROP FOREIGN KEY licencie_ibfk_2');
        $this->addSql('ALTER TABLE MailContact DROP FOREIGN KEY mailcontact_ibfk_1');
        $this->addSql('ALTER TABLE MailEdu DROP FOREIGN KEY mailedu_ibfk_1');
        $this->addSql('DROP TABLE Categorie');
        $this->addSql('DROP TABLE Contact');
        $this->addSql('DROP TABLE Educateur');
        $this->addSql('DROP TABLE Licencie');
        $this->addSql('DROP TABLE MailContact');
        $this->addSql('DROP TABLE MailEdu');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE Categorie (idCategorie INT AUTO_INCREMENT NOT NULL, nomCategorie VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, codeRaccourci VARCHAR(10) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(idCategorie)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE Contact (idContact INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, prenom VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, email VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, numeroTel VARCHAR(20) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(idContact)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE Educateur (idEducateur INT AUTO_INCREMENT NOT NULL, idLicencie INT DEFAULT NULL, email VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, motDePasse VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, estAdministrateur TINYINT(1) DEFAULT NULL, INDEX idLicencie (idLicencie), PRIMARY KEY(idEducateur)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE Licencie (idLicencie INT AUTO_INCREMENT NOT NULL, numeroLicence INT DEFAULT NULL, nom VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, prenom VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, idCategorie INT DEFAULT NULL, idContact INT DEFAULT NULL, INDEX idCategorie (idCategorie), INDEX idContact (idContact), UNIQUE INDEX numeroLicence (numeroLicence), PRIMARY KEY(idLicencie)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE MailContact (idMailContact INT AUTO_INCREMENT NOT NULL, dateEnvoi DATE DEFAULT NULL, objet VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, message TEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, idContact INT DEFAULT NULL, INDEX idContact (idContact), PRIMARY KEY(idMailContact)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE MailEdu (idMailEdu INT AUTO_INCREMENT NOT NULL, dateEnvoi DATE DEFAULT NULL, objet VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, message TEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, idEducateur INT DEFAULT NULL, INDEX idEducateur (idEducateur), PRIMARY KEY(idMailEdu)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE Educateur ADD CONSTRAINT educateur_ibfk_1 FOREIGN KEY (idLicencie) REFERENCES Licencie (idLicencie)');
        $this->addSql('ALTER TABLE Licencie ADD CONSTRAINT licencie_ibfk_1 FOREIGN KEY (idCategorie) REFERENCES Categorie (idCategorie)');
        $this->addSql('ALTER TABLE Licencie ADD CONSTRAINT licencie_ibfk_2 FOREIGN KEY (idContact) REFERENCES Contact (idContact)');
        $this->addSql('ALTER TABLE MailContact ADD CONSTRAINT mailcontact_ibfk_1 FOREIGN KEY (idContact) REFERENCES Contact (idContact)');
        $this->addSql('ALTER TABLE MailEdu ADD CONSTRAINT mailedu_ibfk_1 FOREIGN KEY (idEducateur) REFERENCES Educateur (idEducateur)');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
