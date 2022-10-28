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
    public function create()
    {

        $data = [
            'title' => 'Create Data | e-catalog'
        ];

        return view('produk/create', $data);
    }


    public function save()
    {
        //validasi input
        // if ($this->validate([
        //     'id' => 'required|is_unique[produk.id]'
        // ])) {
        //     return redirect()->to('/produk/create');
        // }

        $this->prodmod->save([
            'nama_produk' => $this->request->getPost('id'),
            'nama_produk' => $this->request->getPost('nama_produk'),
            'qty' => $this->request->getPost('qty'),
            'price' => $this->request->getPost('harga'),
            'foto_produk' => $this->request->getPost('foto_produk')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambah.');

        return redirect()->to('/produk');
    }

    public function delete($id)
    {
        $this->prodmod->delete($id);
        return redirect()->to('/produk');
    }

    public function edit($id)
    {

        $data = [
            'title' => 'Edit Data | e-catalog',
            'produkid' => $this->prodmod->getProduk($id)
        ];

        return view('produk/edit', $data);
    }
}
