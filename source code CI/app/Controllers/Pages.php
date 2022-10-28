<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | e-catalog'
        ];
        return view('pages/home', $data);
    }

    public function kategori()
    {
        $data = [
            'title' => 'Katalog | e-catalog'
        ];
        return view('pages/kategori.php', $data);
    }
    public function create()
    {

        $data = [
            'title' => 'Create Data | e-catalog'
        ];

        return view('produk/create', $data);
    }
}
