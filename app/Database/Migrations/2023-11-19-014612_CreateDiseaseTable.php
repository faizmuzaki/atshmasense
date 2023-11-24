<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDiseaseTable extends Migration
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
                'type_code' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],
                'type_name' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],
                'type_description' => [
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
        $this->forge->createTable('disease', true);
    }

    public function down()
    {
        $this->forge->dropTable('disease', true);
    }
}
