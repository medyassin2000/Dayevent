<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230406154854 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande_instruments CHANGE nom_produit nom_produit VARCHAR(255) NOT NULL, CHANGE prix prix VARCHAR(255) NOT NULL, CHANGE date date VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE instruments DROP FOREIGN KEY instruments_ibfk_1');
        $this->addSql('ALTER TABLE instruments DROP FOREIGN KEY instruments_ibfk_2');
        $this->addSql('ALTER TABLE instruments CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE photo photo VARCHAR(255) NOT NULL, CHANGE description description VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX id_categorie ON instruments');
        $this->addSql('CREATE INDEX IDX_E350DE0BC9486A13 ON instruments (id_categorie)');
        $this->addSql('DROP INDEX id_utilisateur ON instruments');
        $this->addSql('CREATE INDEX IDX_E350DE0B50EAE44 ON instruments (id_utilisateur)');
        $this->addSql('ALTER TABLE instruments ADD CONSTRAINT instruments_ibfk_1 FOREIGN KEY (id_categorie) REFERENCES categorie_instrument (id)');
        $this->addSql('ALTER TABLE instruments ADD CONSTRAINT instruments_ibfk_2 FOREIGN KEY (id_utilisateur) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE utilisateur CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE prenom prenom VARCHAR(255) NOT NULL, CHANGE role role VARCHAR(255) NOT NULL, CHANGE telephone telephone VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(255) NOT NULL, CHANGE mot_de_passe mot_de_passe VARCHAR(255) NOT NULL, CHANGE dateNaiss datenaiss VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande_instruments CHANGE nom_produit nom_produit VARCHAR(22) NOT NULL, CHANGE prix prix DOUBLE PRECISION NOT NULL, CHANGE date date DATE NOT NULL');
        $this->addSql('ALTER TABLE instruments DROP FOREIGN KEY FK_E350DE0BC9486A13');
        $this->addSql('ALTER TABLE instruments DROP FOREIGN KEY FK_E350DE0B50EAE44');
        $this->addSql('ALTER TABLE instruments CHANGE nom nom VARCHAR(30) NOT NULL, CHANGE photo photo VARCHAR(30) NOT NULL, CHANGE description description VARCHAR(222) NOT NULL');
        $this->addSql('DROP INDEX idx_e350de0bc9486a13 ON instruments');
        $this->addSql('CREATE INDEX id_categorie ON instruments (id_categorie)');
        $this->addSql('DROP INDEX idx_e350de0b50eae44 ON instruments');
        $this->addSql('CREATE INDEX id_utilisateur ON instruments (id_utilisateur)');
        $this->addSql('ALTER TABLE instruments ADD CONSTRAINT FK_E350DE0BC9486A13 FOREIGN KEY (id_categorie) REFERENCES categorie_instrument (id)');
        $this->addSql('ALTER TABLE instruments ADD CONSTRAINT FK_E350DE0B50EAE44 FOREIGN KEY (id_utilisateur) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE utilisateur CHANGE nom nom VARCHAR(222) NOT NULL, CHANGE prenom prenom VARCHAR(222) NOT NULL, CHANGE role role VARCHAR(222) NOT NULL, CHANGE telephone telephone INT NOT NULL, CHANGE email email VARCHAR(222) NOT NULL, CHANGE mot_de_passe mot_de_passe VARCHAR(50) NOT NULL, CHANGE datenaiss dateNaiss DATE NOT NULL');
    }
}
