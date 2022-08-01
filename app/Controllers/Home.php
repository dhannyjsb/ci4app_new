<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('templates/navbar');
        echo view('pages/home');
        echo view('templates/footer');
    }


}
