<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211223120256 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04ADBDE4EC11');
        $this->addSql('ALTER TABLE product CHANGE specifications_id Specifications_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD9347DEEB FOREIGN KEY (Specifications_id) REFERENCES specifications (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE product RENAME INDEX idx_d34a04adbde4ec11 TO IDX_D34A04AD9347DEEB');
        $this->addSql('ALTER TABLE specifications DROP color');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD9347DEEB');
        $this->addSql('ALTER TABLE product CHANGE Specifications_id specifications_id INT NOT NULL');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADBDE4EC11 FOREIGN KEY (specifications_id) REFERENCES specifications (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE product RENAME INDEX idx_d34a04ad9347deeb TO IDX_D34A04ADBDE4EC11');
        $this->addSql('ALTER TABLE specifications ADD color VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
