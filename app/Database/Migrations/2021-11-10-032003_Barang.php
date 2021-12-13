<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'barang_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'barang_title'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'barang_harga' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'barang_img' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'barang_stok' => [
                'type'       => 'INT',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('barang_id', true);
        $this->forge->createTable('barang');
    }

    public function down()
    {
        $this->forge->dropTable('barang');
    }
}
