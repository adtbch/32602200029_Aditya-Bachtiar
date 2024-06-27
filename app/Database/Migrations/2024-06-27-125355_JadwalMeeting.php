<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JadwalMeeting extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_meeting' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'catatan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tanggal' => [
                'type'       => 'DATE',
                'null'       => true,
            ],
            'id_grub' => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'   => true,
            ]
        ]);
        $this->forge->addKey('id_meeting', true);
        $this->forge->addForeignKey('id_grub', 'grubs', 'id_grub', 'CASCADE', 'CASCADE');
        $this->forge->createTable('jadwalmeetings');
    }

    public function down()
    {
        $this->forge->dropTable('jadwalmeetings');
    }
}