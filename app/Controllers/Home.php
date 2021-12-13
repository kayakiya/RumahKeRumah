<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            "judul_halaman" => "Van Store",
            "halaman_aktif" => "home"
        ];
        echo view('/template/header.php', $data);
        echo view('/template/body.php');
        echo view('/template/footer.php');
    }

    public function Barang()
    {
        $barangModel = model('App\Models\barangModel');
        helper('date');
        $data = [
            "judul_halaman" => "Van Store",
            "halaman_aktif" => "home"

        ];
        $dataBarang['dataBarang'] = $barangModel->findAll();
        //dd($dataBarang);
        echo view('/template/header.php', $data);
        echo view('/template/beranda.php', $dataBarang);
        echo view('/template/footer.php');
    }
}
