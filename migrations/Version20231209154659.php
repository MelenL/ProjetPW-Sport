<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231209154659 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE educateur (id INT AUTO_INCREMENT NOT NULL, id_licencie_id INT NOT NULL, email VARCHAR(255) NOT NULL, mot_de_passe VARCHAR(255) NOT NULL, est_administrateur TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_763C0122AD7F0083 (id_licencie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE educateur ADD CONSTRAINT FK_763C0122AD7F0083 FOREIGN KEY (id_licencie_id) REFERENCES licencie (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE educateur DROP FOREIGN KEY FK_763C0122AD7F0083');
        $this->addSql('DROP TABLE educateur');
    }
}
