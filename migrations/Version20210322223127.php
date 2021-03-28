<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210322223127 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE loan ADD created_by_id INT DEFAULT NULL, DROP created_by');
        $this->addSql('ALTER TABLE loan ADD CONSTRAINT FK_C5D30D03B03A8386 FOREIGN KEY (created_by_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_C5D30D03B03A8386 ON loan (created_by_id)');
        $this->addSql('ALTER TABLE loan RENAME INDEX idx_55dba8b016a2b381 TO IDX_C5D30D0316A2B381');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE loan DROP FOREIGN KEY FK_C5D30D03B03A8386');
        $this->addSql('DROP INDEX IDX_C5D30D03B03A8386 ON loan');
        $this->addSql('ALTER TABLE loan ADD created_by INT NOT NULL, DROP created_by_id');
        $this->addSql('ALTER TABLE loan RENAME INDEX idx_c5d30d0316a2b381 TO IDX_55DBA8B016A2B381');
    }
}
