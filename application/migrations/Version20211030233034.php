<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20211030233034 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'add surname and avatar to user table';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE user ADD surname VARCHAR(30) DEFAULT NULL, ADD avatar VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP surname, DROP avatar');
    }
}
