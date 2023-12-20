<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableMahasiswa extends Migration
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
                'npm' => [
                    'type'          => 'int',
                    'constraint'    => '15',
                ],
                'nama' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],
                'semester' => [
                    'type'          => 'int',
                    'constraint'    => '15',
                ],
                'ipk' => [
                    'type'          => 'float',
                    'constraint'    => '5',
                ],
                'tempat' => [
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
        $this->forge->createTable('mahasiswa', true);
    }


    public function down()
    {
        $this->forge->dropTable('mahasiswa', true);
    }
}
