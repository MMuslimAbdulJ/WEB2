<?php

    //Magic method : Method khusus yang dijalankan jika sebuah kondisi terjadi

    //php menyediakan banyak magic method : __call(), __callStatic(), __get(),
    // __set(), __isset(), __unset(), __sleep(), __wakeup(), __toString(),
    // __invoke(), __set__state(), __clone(), & __debugInfo().
    

    //magic method __set()
    //method __set akan dijalankan pada saat kita berusaha menginput sebuah nilai
    //dalam property yang tidak ada (atau tidak bisa diakses) dari sebuah class
    //class Produk {

    //}

    //$produk01 = new Produk();
    //echo $produk01->merek = "Logitech";
    //echo $produk01->merek;

    class Produk {
        private $merek;
        private $harga;

      public function __set($name,$value){

        if ($name == "merek"){
            if (is_string($value)){
                $this->merek = $value;
            }
            else {
                echo "Error : merek harus berbentuk string <br>";
            }
        }
            else if ($name == "harga"){
                if (is_int($value)){
                    $this->harga = $value;
                }
                else {
                    echo "Error : harga harus berbentuk angka <br>";
                }
            }
            else {
                $hasil = "Maaf property '$name' tudak tersedia";
            }
      }
    }

    $produk01 = new Produk();
    $produk01->merek = "Logitech";
    $produk01->harga = 1500000;
    
    echo "<pre>";
    print_r ($produk01);
    echo "</pre>";
?>