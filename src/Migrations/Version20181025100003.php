<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181025100003 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE reference (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, poste VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, photo_name VARCHAR(255) NOT NULL, photo_size INT NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE information ADD reference_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE information ADD CONSTRAINT FK_297918831645DEA9 FOREIGN KEY (reference_id) REFERENCES reference (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_297918831645DEA9 ON information (reference_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE information DROP FOREIGN KEY FK_297918831645DEA9');
        $this->addSql('DROP TABLE reference');
        $this->addSql('DROP INDEX UNIQ_297918831645DEA9 ON information');
        $this->addSql('ALTER TABLE information DROP reference_id');
    }
}
