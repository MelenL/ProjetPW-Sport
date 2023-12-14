<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231214113202 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE educateur DROP FOREIGN KEY FK_763C0122B56DCD74');
        $this->addSql('DROP INDEX UNIQ_763C0122B56DCD74 ON educateur');
        $this->addSql('ALTER TABLE educateur CHANGE licencie_id id_licencie_id INT NOT NULL');
        $this->addSql('ALTER TABLE educateur ADD CONSTRAINT FK_763C0122AD7F0083 FOREIGN KEY (id_licencie_id) REFERENCES licencie (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_763C0122AD7F0083 ON educateur (id_licencie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE educateur DROP FOREIGN KEY FK_763C0122AD7F0083');
        $this->addSql('DROP INDEX UNIQ_763C0122AD7F0083 ON educateur');
        $this->addSql('ALTER TABLE educateur CHANGE id_licencie_id licencie_id INT NOT NULL');
        $this->addSql('ALTER TABLE educateur ADD CONSTRAINT FK_763C0122B56DCD74 FOREIGN KEY (licencie_id) REFERENCES licencie (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_763C0122B56DCD74 ON educateur (licencie_id)');
    }
}
