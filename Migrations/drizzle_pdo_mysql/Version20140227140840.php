<?php

namespace Innova\HotPotatoesBundle\Migrations\drizzle_pdo_mysql;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated migration based on mapping information: modify it with caution
 *
 * Generation date: 2014/02/27 02:08:41
 */
class Version20140227140840 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->addSql("
            CREATE TABLE innova_hotpotatoes (
                id INT AUTO_INCREMENT NOT NULL, 
                description TEXT DEFAULT NULL, 
                resourceNode_id INT DEFAULT NULL, 
                PRIMARY KEY(id), 
                UNIQUE INDEX UNIQ_3EEB7132B87FAB32 (resourceNode_id)
            )
        ");
        $this->addSql("
            ALTER TABLE innova_hotpotatoes 
            ADD CONSTRAINT FK_3EEB7132B87FAB32 FOREIGN KEY (resourceNode_id) 
            REFERENCES claro_resource_node (id) 
            ON DELETE CASCADE
        ");
    }

    public function down(Schema $schema)
    {
        $this->addSql("
            DROP TABLE innova_hotpotatoes
        ");
    }
}