<?php

    //Magic method : Method khusus yang dijalankan jika sebuah kondisi terjadi

    //php menyediakan banyak magic method : __call(), __callStatic(), __get(),
    // __set(), __isset(), __unset(), __sleep(), __wakeup(), __toString(),
    // __invoke(), __set__state(), __clone(), & __debugInfo().
    

    //magic method __get()
    //akan dijalankan ketika mengakses property yang tidak ada(atau tidak bisa diakses)
    //dari luar kelas
    //class Produk {

    //}

    //$produk01 = new Produk();
    //echo $produk01->merek;

    class Produk {
      public function __get($name){
        return "Maaf Property '$name' tidak terdefinisi";
      }
    }

    $produk01 = new Produk();
    echo $produk01->merek;
    echo "<br>";
    echo $produk01->harga;
    echo "<br>";
    echo $produk01->tipe;
?>