<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200220102001 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE num001 (id INT AUTO_INCREMENT NOT NULL, identificatie LONGTEXT NOT NULL, aanduiding_record_inactief LONGTEXT NOT NULL, aanduiding_record_correctie LONGTEXT NOT NULL, huisnummer LONGTEXT NOT NULL, officieel LONGTEXT NOT NULL, huisnummertoevoeging LONGTEXT NOT NULL, postcode LONGTEXT NOT NULL, text LONGTEXT NOT NULL, in_onderzoek LONGTEXT NOT NULL, type_adresseerbaar_object LONGTEXT NOT NULL, brondocumentdatum LONGTEXT NOT NULL, brondocumentnummer LONGTEXT NOT NULL, nummeraanduiding_status LONGTEXT NOT NULL, gerelateerde_openbare_ruimteidentificatie LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, name LONGTEXT NOT NULL, price LONGTEXT NOT NULL, description LONGTEXT NOT NULL, INDEX IDX_D34A04AD12469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE s (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stadgegevens (id INT AUTO_INCREMENT NOT NULL, pos LONGTEXT NOT NULL, gebruiksdoel_verblijfsobject LONGTEXT NOT NULL, verblijfsobject_status LONGTEXT NOT NULL, huisnummer LONGTEXT NOT NULL, huisletter LONGTEXT NOT NULL, huisnummertoevoeging LONGTEXT NOT NULL, postcode LONGTEXT NOT NULL, type_adresseerbaar_object LONGTEXT NOT NULL, openbare_ruimte_naam LONGTEXT NOT NULL, identificatie LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, voornaam VARCHAR(180) NOT NULL, achternaam VARCHAR(180) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE zwolle_backuptest (id INT AUTO_INCREMENT NOT NULL, DATA TEXT NOT NULL, SOURCE TEXT NOT NULL, LOC TEXT NOT NULL, ORG TEXT NOT NULL, ADD1 TEXT NOT NULL, ADD2 TEXT NOT NULL, ADD3 TEXT NOT NULL, PC TEXT NOT NULL, CITY TEXT NOT NULL, WEB TEXT NOT NULL, Address TEXT NOT NULL, EMAIL TEXT NOT NULL, Email1 TEXT NOT NULL, EmailAlt TEXT NOT NULL, PHONE TEXT NOT NULL, Phone1 TEXT NOT NULL, PhoneAlt TEXT NOT NULL, GGPOS TEXT NOT NULL, Location TEXT NOT NULL, GGRAT TEXT NOT NULL, Stars TEXT NOT NULL, RevNo TEXT NOT NULL, GOOGLE TEXT NOT NULL, `Desc` TEXT NOT NULL, CLASS TEXT NOT NULL, Desc1 TEXT NOT NULL, CAT TEXT NOT NULL, Desc2 TEXT NOT NULL, Social TEXT NOT NULL, Facebook TEXT NOT NULL, Twitter TEXT NOT NULL, Linkedin TEXT NOT NULL, Pintrest TEXT NOT NULL, Instagram TEXT NOT NULL, Youtube TEXT NOT NULL, Whatsapp TEXT NOT NULL, KVK TEXT NOT NULL, No TEXT NOT NULL, VestingLCL TEXT NOT NULL, No1 TEXT NOT NULL, VESTINGHead TEXT NOT NULL, No2 TEXT NOT NULL, POSTHead TEXT NOT NULL, POSTCODEHead TEXT NOT NULL, CITYHead TEXT NOT NULL, NOTES TEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE zwolle_gegevens (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, DATA TEXT NOT NULL, SOURCE TEXT NOT NULL, LOC TEXT NOT NULL, ORG TEXT NOT NULL, ADD1 TEXT NOT NULL, ADD2 TEXT NOT NULL, ADD3 TEXT NOT NULL, PC TEXT NOT NULL, CITY TEXT NOT NULL, WEB TEXT NOT NULL, Address TEXT NOT NULL, EMAIL TEXT NOT NULL, Email1 TEXT NOT NULL, EmailAlt TEXT NOT NULL, PHONE TEXT NOT NULL, Phone1 TEXT NOT NULL, PhoneAlt TEXT NOT NULL, GGPOS TEXT NOT NULL, Location TEXT NOT NULL, GGRAT TEXT NOT NULL, Stars TEXT NOT NULL, RevNo TEXT NOT NULL, GOOGLE TEXT NOT NULL, Beschrijving TEXT NOT NULL, CLASS TEXT NOT NULL, beschrijving1 TEXT NOT NULL, Categorie TEXT NOT NULL, Beschrijving2 TEXT NOT NULL, Socialmedia TEXT NOT NULL, Facebook TEXT NOT NULL, Twitter TEXT NOT NULL, Linkedin TEXT NOT NULL, Pintrest TEXT NOT NULL, Instagram TEXT NOT NULL, Youtube TEXT NOT NULL, Whatsapp TEXT NOT NULL, KVK TEXT NOT NULL, No TEXT NOT NULL, VestingLCL TEXT NOT NULL, No1 TEXT NOT NULL, VESTINGHead TEXT NOT NULL, No2 TEXT NOT NULL, POSTHead TEXT NOT NULL, POSTCODEHead TEXT NOT NULL, CITYHead TEXT NOT NULL, NOTES TEXT NOT NULL, gebruikersid LONGTEXT DEFAULT NULL, gechecked LONGTEXT DEFAULT NULL, INDEX IDX_88AB4B4DA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE zwolle_gegevens ADD CONSTRAINT FK_88AB4B4DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD12469DE2');
        $this->addSql('ALTER TABLE zwolle_gegevens DROP FOREIGN KEY FK_88AB4B4DA76ED395');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE num001');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE s');
        $this->addSql('DROP TABLE stadgegevens');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE zwolle_backuptest');
        $this->addSql('DROP TABLE zwolle_gegevens');
    }
}
