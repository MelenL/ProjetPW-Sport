<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231209154133 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE licencie (id INT AUTO_INCREMENT NOT NULL, id_categorie_id INT NOT NULL, id_contact_id INT NOT NULL, numero_licence INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, INDEX IDX_3B7556129F34925F (id_categorie_id), UNIQUE INDEX UNIQ_3B755612422BA59D (id_contact_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE licencie ADD CONSTRAINT FK_3B7556129F34925F FOREIGN KEY (id_categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE licencie ADD CONSTRAINT FK_3B755612422BA59D FOREIGN KEY (id_contact_id) REFERENCES contact (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE licencie DROP FOREIGN KEY FK_3B7556129F34925F');
        $this->addSql('ALTER TABLE licencie DROP FOREIGN KEY FK_3B755612422BA59D');
        $this->addSql('DROP TABLE licencie');
    }
}
