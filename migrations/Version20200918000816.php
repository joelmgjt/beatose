<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200918000816 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cpe_document (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(64) NOT NULL, state_code VARCHAR(16) DEFAULT NULL, hash_cpe VARCHAR(255) DEFAULT NULL, hash_cdr VARCHAR(255) DEFAULT NULL, ticket VARCHAR(64) DEFAULT NULL, create_date DATETIME NOT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FD553EE85E237E06 ON cpe_document (name)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE cpe_document');
    }
}
