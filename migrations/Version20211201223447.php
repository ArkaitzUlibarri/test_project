<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211201223447 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Failed jobs table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE IF NOT EXISTS `failed_jobs` (
            `id` bigint unsigned NOT NULL AUTO_INCREMENT,
            `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
            `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
            `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
            `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
            `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
            `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`),
            UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
          )');

    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE IF EXISTS failed_jobs');
    }
}
