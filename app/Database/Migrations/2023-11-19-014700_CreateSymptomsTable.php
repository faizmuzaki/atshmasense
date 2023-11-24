<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSymptomsTable extends Migration
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
                'symptoms_code' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],
                'symptoms_name' => [
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
        $this->forge->createTable('symptoms', true);
    }

    public function down()
    {
        $this->forge->dropTable('symptoms', true);
    }
}
