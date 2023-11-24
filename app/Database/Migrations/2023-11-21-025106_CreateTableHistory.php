<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateHistoryTable extends Migration
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
                'history_code' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],
                'symptoms_ask' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],
                'symptoms_answer' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],
                'disease' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],
                'id_user' => [
                    'type'          => 'INT',
                    'constraint'    => '11',
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
        $this->forge->createTable('history', true);
    }

    public function down()
    {
        $this->forge->dropTable('history', true);
    }
}
