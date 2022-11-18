<?php

    //Magic method : Method khusus yang dijalankan jika sebuah kondisi terjadi

    //php menyediakan banyak magic method : __call(), __callStatic(), __get(),
    // __set(), __isset(), __unset(), __sleep(), __wakeup(), __toString(),
    // __invoke(), __set__state(), __clone(), & __debugInfo().
    

    //magic method __getif()
    //akan dijalankan ketika mengakses property yang tidak ada(atau tidak bisa diakses)
    //dari luar kelas
    //class Produk {
        //private $merek = "Logitech";

        //public function __get($name) {
            //return "maaf property '$name' tidak terdefinisi";
        //}

    //}

    //$produk01 = new Produk();
    //echo $produk01->merek;

    class Produk {
        private $merek = "Logitech";
        private $harga = 150000;
        private $tipe = "Mouse";

      public function __get($name){

        if ($name == "merek"){
            $hasil = strtoupper($this->merek);
        }
            else if ($name == "harga"){
                $hasil = "Rp. " .number_format($this->harga,2,",", ".");
            }
            else if ($name == "tipe"){
                $hasil = "Tipe Produk: ".$this->tipe;
            }
            else {
                $hasil = "Maaf property '$name' tudak terdefinisi";
            }

            return $hasil;
      }
    }

    $produk01 = new Produk();
    echo $produk01->merek;
    echo "<br>";
    echo $produk01->harga;
    echo "<br>";
    echo $produk01->tipe;
    echo "<br>";
    echo $produk01->warna;
?>