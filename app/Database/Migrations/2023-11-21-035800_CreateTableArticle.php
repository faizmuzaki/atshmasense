<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableArticle extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                    'auto_increment' => true,
                ],
                'title' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],
                'content' => [
                    'type'          => 'TEXT',
                ],
                'image' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],
                'created_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                ],
                'updated_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                ],
                'deleted_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                ]
            ]
        );
        $this->forge->addKey('id', true, true);
        $this->forge->createTable('article', true);
    }



    public function down()
    {
        $this->forge->dropTable('article', true);
    }
}
