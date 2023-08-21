<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230817145518 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, pseudo VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voyage (id INT AUTO_INCREMENT NOT NULL, image_path VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, price INT NOT NULL, detailed_description VARCHAR(255) NOT NULL, destination VARCHAR(255) NOT NULL, duration VARCHAR(255) NOT NULL, start_time VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voyage_user (voyage_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_1D011EC768C9E5AF (voyage_id), INDEX IDX_1D011EC7A76ED395 (user_id), PRIMARY KEY(voyage_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE voyage_user ADD CONSTRAINT FK_1D011EC768C9E5AF FOREIGN KEY (voyage_id) REFERENCES voyage (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE voyage_user ADD CONSTRAINT FK_1D011EC7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE voyage_user DROP FOREIGN KEY FK_1D011EC768C9E5AF');
        $this->addSql('ALTER TABLE voyage_user DROP FOREIGN KEY FK_1D011EC7A76ED395');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE voyage');
        $this->addSql('DROP TABLE voyage_user');
    }
}
