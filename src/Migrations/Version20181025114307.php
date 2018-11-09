<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181025114307 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE information DROP FOREIGN KEY FK_297918831645DEA9');
        $this->addSql('DROP INDEX UNIQ_297918831645DEA9 ON information');
        $this->addSql('ALTER TABLE information DROP reference_id');
        $this->addSql('ALTER TABLE reference ADD information_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reference ADD CONSTRAINT FK_AEA349132EF03101 FOREIGN KEY (information_id) REFERENCES information (id)');
        $this->addSql('CREATE INDEX IDX_AEA349132EF03101 ON reference (information_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE information ADD reference_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE information ADD CONSTRAINT FK_297918831645DEA9 FOREIGN KEY (reference_id) REFERENCES reference (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_297918831645DEA9 ON information (reference_id)');
        $this->addSql('ALTER TABLE reference DROP FOREIGN KEY FK_AEA349132EF03101');
        $this->addSql('DROP INDEX IDX_AEA349132EF03101 ON reference');
        $this->addSql('ALTER TABLE reference DROP information_id');
    }
}
