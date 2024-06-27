<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TodoListGrub extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_todolistgrub' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'catatan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'keterangan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_grub' => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'   => true,
            ]
        ]);
        $this->forge->addKey('id_todolistgrub', true);
        $this->forge->addForeignKey('id_grub', 'grubs', 'id_grub', 'CASCADE', 'CASCADE');
        $this->forge->createTable('todolistgrubs');
    }

    public function down()
    {
        $this->forge->dropTable('todolistgrubs');
    }
}