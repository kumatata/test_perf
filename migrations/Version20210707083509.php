<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210707083509 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE city (id INT AUTO_INCREMENT NOT NULL, person_id INT DEFAULT NULL, country_id INT DEFAULT NULL, name CHAR(35) NOT NULL, countrycode CHAR(3) NOT NULL, district CHAR(20) NOT NULL, INDEX IDX_2D5B0234217BBB47 (person_id), INDEX IDX_2D5B0234F92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE country (id INT AUTO_INCREMENT NOT NULL, code CHAR(3) NOT NULL, name CHAR(52) NOT NULL, capital INT DEFAULT NULL, code2 CHAR(2) NOT NULL, gdp INT NOT NULL, population INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE countrylanguage (id INT AUTO_INCREMENT NOT NULL, country_id INT DEFAULT NULL, countrycode CHAR(3) NOT NULL, percentage NUMERIC(4, 1) DEFAULT \'0.0\' NOT NULL, INDEX IDX_69DFC8A5F92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE covid (id INT AUTO_INCREMENT NOT NULL, date VARCHAR(10) NOT NULL, total_cas_confirmes INT NOT NULL, total_deces_hopital INT NOT NULL, total_deces_ehpad VARCHAR(5) NOT NULL, total_cas_confirmes_ehpad VARCHAR(6) NOT NULL, total_cas_possibles_ehpad VARCHAR(5) NOT NULL, patients_reanimation VARCHAR(4) NOT NULL, patients_hospitalises VARCHAR(5) NOT NULL, total_patients_gueris VARCHAR(6) NOT NULL, nouveaux_patients_hospitalises VARCHAR(4) NOT NULL, nouveaux_patients_reanimation VARCHAR(3) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hospital (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, beds INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE person (id INT AUTO_INCREMENT NOT NULL, nationality_id INT DEFAULT NULL, first_name VARCHAR(45) NOT NULL, last_name VARCHAR(45) NOT NULL, age DATETIME NOT NULL, sex VARCHAR(4) NOT NULL, is_married TINYINT(1) NOT NULL, address VARCHAR(255) NOT NULL, salary INT NOT NULL, job VARCHAR(255) NOT NULL, phone_number VARCHAR(255) NOT NULL, INDEX IDX_34DCD1761C9DA55 (nationality_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE city ADD CONSTRAINT FK_2D5B0234217BBB47 FOREIGN KEY (person_id) REFERENCES person (id)');
        $this->addSql('ALTER TABLE city ADD CONSTRAINT FK_2D5B0234F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('ALTER TABLE countrylanguage ADD CONSTRAINT FK_69DFC8A5F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('ALTER TABLE person ADD CONSTRAINT FK_34DCD1761C9DA55 FOREIGN KEY (nationality_id) REFERENCES country (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE city DROP FOREIGN KEY FK_2D5B0234F92F3E70');
        $this->addSql('ALTER TABLE countrylanguage DROP FOREIGN KEY FK_69DFC8A5F92F3E70');
        $this->addSql('ALTER TABLE person DROP FOREIGN KEY FK_34DCD1761C9DA55');
        $this->addSql('ALTER TABLE city DROP FOREIGN KEY FK_2D5B0234217BBB47');
        $this->addSql('DROP TABLE city');
        $this->addSql('DROP TABLE country');
        $this->addSql('DROP TABLE countrylanguage');
        $this->addSql('DROP TABLE covid');
        $this->addSql('DROP TABLE hospital');
        $this->addSql('DROP TABLE person');
        $this->addSql('DROP TABLE user');
    }
}
