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

    $menampilkan1 = new Perpustakaan();
    $menampilkan1->tampil("Harry Potter and the Philosopher's Stone", "JK. Rowling", "Bloomsbury");
    print_r($menampilkan1);
    $menampilkan2 = new Perpustakaan();
    $menampilkan2->tampil("Buku PHP Dasar", "M Muslim Abdul J", "Gramedia");
    print_r($menampilkan2);

?>