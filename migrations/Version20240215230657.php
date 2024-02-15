<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240215230657 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE propertys (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, category_id INT NOT NULL, typeproperty_id INT NOT NULL, code VARCHAR(255) NOT NULL, surface DOUBLE PRECISION NOT NULL, description LONGTEXT NOT NULL, prix DOUBLE PRECISION NOT NULL, chambres INT NOT NULL, salle_bains INT NOT NULL, etages INT NOT NULL, numero_etage INT NOT NULL, adresse VARCHAR(255) NOT NULL, ville VARCHAR(50) NOT NULL, code_postale VARCHAR(50) NOT NULL, region VARCHAR(100) NOT NULL, internet TINYINT(1) DEFAULT NULL, balcon TINYINT(1) DEFAULT NULL, garage TINYINT(1) DEFAULT NULL, salle_sport TINYINT(1) DEFAULT NULL, piscine TINYINT(1) DEFAULT NULL, camera_surveillance TINYINT(1) DEFAULT NULL, image VARBINARY(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7AEEC2C4A76ED395 (user_id), INDEX IDX_7AEEC2C412469DE2 (category_id), INDEX IDX_7AEEC2C42ADA35B1 (typeproperty_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE propertys ADD CONSTRAINT FK_7AEEC2C4A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE propertys ADD CONSTRAINT FK_7AEEC2C412469DE2 FOREIGN KEY (category_id) REFERENCES categorys (id)');
        $this->addSql('ALTER TABLE propertys ADD CONSTRAINT FK_7AEEC2C42ADA35B1 FOREIGN KEY (typeproperty_id) REFERENCES type_property (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE propertys DROP FOREIGN KEY FK_7AEEC2C4A76ED395');
        $this->addSql('ALTER TABLE propertys DROP FOREIGN KEY FK_7AEEC2C412469DE2');
        $this->addSql('ALTER TABLE propertys DROP FOREIGN KEY FK_7AEEC2C42ADA35B1');
        $this->addSql('DROP TABLE propertys');
    }
}
