<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CatatanMatkul extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_catatan' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'catatan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_matkul' => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'   => true,
            ],
        ]);
        $this->forge->addKey('id_catatan', true);
        $this->forge->addForeignKey('id_matkul', 'matkuls', 'id_matkul', 'CASCADE', 'CASCADE');
        $this->forge->createTable('catatanmatkuls');
    }

    public function down()
    {
        $this->forge->dropTable('catatanmatkuls');
    }
}