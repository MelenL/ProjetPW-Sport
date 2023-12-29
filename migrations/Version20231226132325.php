<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231226132325 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mail_contact DROP FOREIGN KEY FK_96DF6757A4F84F6E');
        $this->addSql('DROP INDEX IDX_96DF6757A4F84F6E ON mail_contact');
        $this->addSql('ALTER TABLE mail_contact DROP destinataire_id, DROP mail_id');
        $this->addSql('ALTER TABLE mail_edu DROP FOREIGN KEY FK_8CB8D4A3A4F84F6E');
        $this->addSql('DROP INDEX IDX_8CB8D4A3A4F84F6E ON mail_edu');
        $this->addSql('ALTER TABLE mail_edu DROP destinataire_id, DROP mail_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mail_contact ADD destinataire_id INT NOT NULL, ADD mail_id INT NOT NULL');
        $this->addSql('ALTER TABLE mail_contact ADD CONSTRAINT FK_96DF6757A4F84F6E FOREIGN KEY (destinataire_id) REFERENCES categorie (id)');
        $this->addSql('CREATE INDEX IDX_96DF6757A4F84F6E ON mail_contact (destinataire_id)');
        $this->addSql('ALTER TABLE mail_edu ADD destinataire_id INT DEFAULT NULL, ADD mail_id INT NOT NULL');
        $this->addSql('ALTER TABLE mail_edu ADD CONSTRAINT FK_8CB8D4A3A4F84F6E FOREIGN KEY (destinataire_id) REFERENCES educateur (id)');
        $this->addSql('CREATE INDEX IDX_8CB8D4A3A4F84F6E ON mail_edu (destinataire_id)');
    }
}
