<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231219161731 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mail_contact ADD destinataire_id INT NOT NULL, ADD mail_id INT NOT NULL');
        $this->addSql('ALTER TABLE mail_contact ADD CONSTRAINT FK_96DF6757A4F84F6E FOREIGN KEY (destinataire_id) REFERENCES categorie (id)');
        $this->addSql('CREATE INDEX IDX_96DF6757A4F84F6E ON mail_contact (destinataire_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mail_contact DROP FOREIGN KEY FK_96DF6757A4F84F6E');
        $this->addSql('DROP INDEX IDX_96DF6757A4F84F6E ON mail_contact');
        $this->addSql('ALTER TABLE mail_contact DROP destinataire_id, DROP mail_id');
    }
}
