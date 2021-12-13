<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataBarang extends Seeder
{
    public function run()
    {
        $data = [
            'barang_id' => '1',
            'barang_title'    => 'Adidas',
            'barang_harga' => '10000',
            'barang_img'    => '312.jpg',
            'barang_stok' => '32'
        ];

        // Simple Queries
        //$this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        $this->db->table('barang')->insert($data);
    }
}
