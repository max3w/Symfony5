<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211211182616 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE comment_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE conference_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE comment (id INT NOT NULL, author VARCHAR(255) NOT NULL, text VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, photo_filename VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN comment.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE conference (id INT NOT NULL, city VARCHAR(255) NOT NULL, year VARCHAR(4) NOT NULL, is_international BOOLEAN NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE comment_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE conference_id_seq CASCADE');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE conference');
    }
}
