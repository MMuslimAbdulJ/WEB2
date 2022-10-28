<?php

namespace App\Controllers;

use App\Models\ProdukModel;


class Produk extends BaseController
{
    protected $prodmod;
    public function __construct()
    {
        $this->prodmod = new ProdukModel();
    }
    public function index()
    {
        $produk = $this->prodmod->findAll();
        $data = [
            'title' => 'Produk | e-catalog',
            'produk' => $produk
        ];

        return view('produk/index', $data);
    }
}
