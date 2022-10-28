<?php
    class Perpustakaan{
        public $judulBuku;
        public $penulis;
        public $penerbit;

        public function tampil($judul, $penulis, $penerbit){
            $this->judulBuku = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
        }
    }

    $menampilkan = new Perpustakaan();

    $menampilkan->tampil("Harry Potter and the Philosopher's Stone", "JK. Rowling", "Bloomsbury");

    print_r($menampilkan);

?>