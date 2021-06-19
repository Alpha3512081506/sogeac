<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210618202113 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE besoin (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, numero INTEGER NOT NULL, designation VARCHAR(255) NOT NULL, caracteristique VARCHAR(255) NOT NULL, quantity INTEGER NOT NULL, affectation VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE command (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, designation VARCHAR(255) NOT NULL, price NUMERIC(10, 0) NOT NULL, quantity INTEGER NOT NULL, total NUMERIC(10, 0) NOT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE besoin');
        $this->addSql('DROP TABLE command');
    }
}
