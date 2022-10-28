<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        // $data = [
        //     '$title' => 'Home | e-Catalog'
        // ];
        $data['$title'] = "Home | e-Catalog";
        echo view('layout/header', $data);
        echo view('layout/navbar');
        echo view('home');
        echo view('layout/footer');
    }

    public function kategori()
    {
        $data = [
            '$title' => 'Kategori | e-Catalog'
        ];
        echo view('layout/header', $data);
        echo view('layout/navbar');
        return view('katalog');
        echo view('layout/footer');
    }

    public function welcome()
    {
        echo view('welcome_message/header');
        echo view('welcome_message');
        echo view('welcome_message/footer');
    }

    
}
