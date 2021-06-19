<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210619042631 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE command ADD COLUMN ref VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE command ADD COLUMN remise NUMERIC(2, 0) NOT NULL');
        $this->addSql('ALTER TABLE command ADD COLUMN total_hors_taxe NUMERIC(10, 0) NOT NULL');
        $this->addSql('ALTER TABLE command ADD COLUMN taux_tva NUMERIC(5, 2) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__command AS SELECT id, designation, price, quantity, total FROM command');
        $this->addSql('DROP TABLE command');
        $this->addSql('CREATE TABLE command (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, designation VARCHAR(255) NOT NULL, price NUMERIC(10, 0) NOT NULL, quantity INTEGER NOT NULL, total NUMERIC(10, 0) NOT NULL)');
        $this->addSql('INSERT INTO command (id, designation, price, quantity, total) SELECT id, designation, price, quantity, total FROM __temp__command');
        $this->addSql('DROP TABLE __temp__command');
    }
}
