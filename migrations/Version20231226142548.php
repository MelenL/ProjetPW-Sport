<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231226142548 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE mail_contact_categorie (mail_contact_id INT NOT NULL, categorie_id INT NOT NULL, INDEX IDX_340E21C33362CFB6 (mail_contact_id), INDEX IDX_340E21C3BCF5E72D (categorie_id), PRIMARY KEY(mail_contact_id, categorie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mail_contact_categorie ADD CONSTRAINT FK_340E21C33362CFB6 FOREIGN KEY (mail_contact_id) REFERENCES mail_contact (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mail_contact_categorie ADD CONSTRAINT FK_340E21C3BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mail_contact_categorie DROP FOREIGN KEY FK_340E21C33362CFB6');
        $this->addSql('ALTER TABLE mail_contact_categorie DROP FOREIGN KEY FK_340E21C3BCF5E72D');
        $this->addSql('DROP TABLE mail_contact_categorie');
    }
}
