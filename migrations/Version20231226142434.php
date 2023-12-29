<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231226142434 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mail_contact_contact DROP FOREIGN KEY FK_94F6F3BB3362CFB6');
        $this->addSql('ALTER TABLE mail_contact_contact DROP FOREIGN KEY FK_94F6F3BBE7A1254A');
        $this->addSql('DROP TABLE mail_contact_contact');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE mail_contact_contact (mail_contact_id INT NOT NULL, contact_id INT NOT NULL, INDEX IDX_94F6F3BBE7A1254A (contact_id), INDEX IDX_94F6F3BB3362CFB6 (mail_contact_id), PRIMARY KEY(mail_contact_id, contact_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE mail_contact_contact ADD CONSTRAINT FK_94F6F3BB3362CFB6 FOREIGN KEY (mail_contact_id) REFERENCES mail_contact (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mail_contact_contact ADD CONSTRAINT FK_94F6F3BBE7A1254A FOREIGN KEY (contact_id) REFERENCES contact (id) ON DELETE CASCADE');
    }
}
