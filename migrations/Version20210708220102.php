<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210708220102 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE world_covid');
        $this->addSql('ALTER TABLE covid ADD id INT AUTO_INCREMENT NOT NULL, CHANGE date date VARCHAR(10) NOT NULL, CHANGE total_cas_confirmes total_cas_confirmes INT NOT NULL, CHANGE total_deces_hopital total_deces_hopital INT NOT NULL, CHANGE total_deces_ehpad total_deces_ehpad VARCHAR(5) NOT NULL, CHANGE total_cas_confirmes_ehpad total_cas_confirmes_ehpad VARCHAR(6) NOT NULL, CHANGE total_cas_possibles_ehpad total_cas_possibles_ehpad VARCHAR(5) NOT NULL, CHANGE patients_reanimation patients_reanimation VARCHAR(4) NOT NULL, CHANGE patients_hospitalises patients_hospitalises VARCHAR(5) NOT NULL, CHANGE total_patients_gueris total_patients_gueris VARCHAR(6) NOT NULL, CHANGE nouveaux_patients_hospitalises nouveaux_patients_hospitalises VARCHAR(4) NOT NULL, CHANGE nouveaux_patients_reanimation nouveaux_patients_reanimation VARCHAR(3) NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE user DROP username, DROP phone_number');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE world_covid (Date VARCHAR(10) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Pays VARCHAR(25) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Infections INT DEFAULT NULL, Deces INT DEFAULT NULL, Guerisons INT DEFAULT NULL, TauxDeces NUMERIC(4, 2) DEFAULT NULL, TauxGuerison NUMERIC(5, 2) DEFAULT NULL, TauxInfection NUMERIC(6, 2) DEFAULT NULL) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE covid MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE covid DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE covid DROP id, CHANGE date date VARCHAR(10) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE total_cas_confirmes total_cas_confirmes INT DEFAULT NULL, CHANGE total_deces_hopital total_deces_hopital INT DEFAULT NULL, CHANGE total_deces_ehpad total_deces_ehpad VARCHAR(5) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE total_cas_confirmes_ehpad total_cas_confirmes_ehpad VARCHAR(6) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE total_cas_possibles_ehpad total_cas_possibles_ehpad VARCHAR(5) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE patients_reanimation patients_reanimation VARCHAR(4) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE patients_hospitalises patients_hospitalises VARCHAR(5) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE total_patients_gueris total_patients_gueris VARCHAR(6) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE nouveaux_patients_hospitalises nouveaux_patients_hospitalises VARCHAR(4) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE nouveaux_patients_reanimation nouveaux_patients_reanimation VARCHAR(3) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE user ADD username VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD phone_number VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
