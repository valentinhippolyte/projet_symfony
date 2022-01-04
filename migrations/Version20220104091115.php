<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220104091115 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE veille_info_user (veille_info_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_D102AF53AE3165E6 (veille_info_id), INDEX IDX_D102AF53A76ED395 (user_id), PRIMARY KEY(veille_info_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE veille_info_user ADD CONSTRAINT FK_D102AF53AE3165E6 FOREIGN KEY (veille_info_id) REFERENCES veille_info (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE veille_info_user ADD CONSTRAINT FK_D102AF53A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE veille_info_user');
    }
}
