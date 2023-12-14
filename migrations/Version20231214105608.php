<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231214105608 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE mail_edu (id INT AUTO_INCREMENT NOT NULL, id_educateur_id INT NOT NULL, date_envoie DATE NOT NULL, objet VARCHAR(255) NOT NULL, message LONGTEXT NOT NULL, INDEX IDX_8CB8D4A3483D6F7C (id_educateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mail_edu ADD CONSTRAINT FK_8CB8D4A3483D6F7C FOREIGN KEY (id_educateur_id) REFERENCES educateur (id)');
        $this->addSql('ALTER TABLE educateur DROP INDEX FK_763C0122B56DCD74, ADD UNIQUE INDEX UNIQ_763C0122B56DCD74 (licencie_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_763C0122E7927C74 ON educateur (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mail_edu DROP FOREIGN KEY FK_8CB8D4A3483D6F7C');
        $this->addSql('DROP TABLE mail_edu');
        $this->addSql('ALTER TABLE educateur DROP INDEX UNIQ_763C0122B56DCD74, ADD INDEX FK_763C0122B56DCD74 (licencie_id)');
        $this->addSql('DROP INDEX UNIQ_763C0122E7927C74 ON educateur');
    }
}
