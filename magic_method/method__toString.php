<?php

    //Magic method : Method khusus yang dijalankan jika sebuah kondisi terjadi

    //php menyediakan banyak magic method : __call(), __callStatic(), __get(),
    // __set(), __isset(), __unset(), __sleep(), __wakeup(), __toString(),
    // __invoke(), __set__state(), __clone(), & __debugInfo().
    
    //class Produk {
    //    
    //    }
    //}

    //$produk01 = new Produk();
    //echo $produk01;
    
    class Produk {
        public function __toString(){
            return "Ini berasal dari kelas produk";
        }

        public function __invoke() {
            echo "Hello";
        }
    }
    $produk01 = new Produk();
    echo $produk01();
?>