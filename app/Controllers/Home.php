<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('/thamplate/header');
        echo view('/thamplate/body');
        echo view('/thamplate/footer');
    }
}
