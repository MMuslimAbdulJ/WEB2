<?php
class dataDiri {
    public $nama;
    public $nim;

    public function __construct($nama, $nim) {
        $this->nama = $nama;
        $this->nim = $nim;
    }

    public function tampil(){
        echo $this->nama;
        echo "<br>";
        echo $this->nim;
        echo "<br>";
        echo "<br>";
    }
}

$p1 = new dataDiri("Muhammad Muslim Abdul Jabbaar", "217200035");
$p2 = new dataDiri("MMuslimAbdulJ", "217200035");

$p1->tampil();
$p2->tampil();
// print_r($p1);
// print_r($p2);
?>