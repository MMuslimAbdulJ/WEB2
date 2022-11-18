<?php

    //Magic method : Method khusus yang dijalankan jika sebuah kondisi terjadi

    //php menyediakan banyak magic method : __call(), __callStatic(), __get(),
    // __set(), __isset(), __unset(), __sleep(), __wakeup(), __toString(),
    // __invoke(), __set__state(), __clone(), & __debugInfo().
    

    //magic method __call()
    //method __call adalah method khusus yang dijalankan PHP ketika kita mengakses
    //method yang tidak tersedia (atau tidak bisa diakses) dari sebuah class
    
    //class Produk {

    //}

    //$produk01 = new Produk();
    //echo $produk01->tambah(9, 4, 9);

    class Produk {

      public function __call($name,$arguments){

        echo "Maaf method $name dengan argument " .implode(", ", $arguments);
        echo " tidak tersedia <br>";
      }
    }

    $produk01 = new Produk();
    $produk01->tambah(9, 4, 9);
    $produk01->setMerek("Xiaomi", "Vivo", "Oppo");
?>