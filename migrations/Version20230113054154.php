<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use App\Entity\Device;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230113054154 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $devicesData = json_decode(file_get_contents(__DIR__.'/../data.json'),true);
        foreach ($devicesData as $deviceData) {
            $lastUsedFormatted = \DateTimeImmutable::createFromFormat('m/d/Y', $deviceData['last_used'])->format('Y-m-d');
            $this->addSql("
                INSERT INTO device (
                    \"id\", 
                    \"location\", 
                    \"type\", 
                    \"device_health\", 
                    \"last_used\", 
                    \"price\", 
                    \"color\"
                ) values (
                    ".$this->connection->quote($deviceData['id']).",
                    ".$this->connection->quote($deviceData['location']).",
                    ".$this->connection->quote($deviceData['type']).",
                    ".$this->connection->quote($deviceData['device_health']).",
                    ".$this->connection->quote($lastUsedFormatted).",
                    ".$this->connection->quote($deviceData['price']).",
                    ".$this->connection->quote($deviceData['color'])."
                );
            ");
        }
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DELETE FROM device');
    }
}
