<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Materi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_materi' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'materi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_matkul' => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'   => true,
            ],
        ]);
        $this->forge->addKey('id_materi', true);
        $this->forge->addForeignKey('id_matkul', 'matkuls', 'id_matkul', 'CASCADE', 'CASCADE');
        $this->forge->createTable('matesis');
    }

    public function down()
    {
        $this->forge->dropTable('matesis');
    }
}