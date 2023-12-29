<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231219162114 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mail_edu ADD destinataire_id INT DEFAULT NULL, ADD mail_id INT NOT NULL');
        $this->addSql('ALTER TABLE mail_edu ADD CONSTRAINT FK_8CB8D4A3A4F84F6E FOREIGN KEY (destinataire_id) REFERENCES educateur (id)');
        $this->addSql('CREATE INDEX IDX_8CB8D4A3A4F84F6E ON mail_edu (destinataire_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mail_edu DROP FOREIGN KEY FK_8CB8D4A3A4F84F6E');
        $this->addSql('DROP INDEX IDX_8CB8D4A3A4F84F6E ON mail_edu');
        $this->addSql('ALTER TABLE mail_edu DROP destinataire_id, DROP mail_id');
    }
}
