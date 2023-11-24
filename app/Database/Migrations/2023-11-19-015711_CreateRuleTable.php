<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRuleTable extends Migration
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
                'rule_code' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],
                'id_symptoms' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],
                'id_type' => [
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
        $this->forge->createTable('rule', true);
    }

    public function down()
    {
        $this->forge->dropTable('rule', true);
    }
}
