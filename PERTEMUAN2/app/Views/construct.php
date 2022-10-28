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

// Pass both parameters.
$p1 = new dataDiri("Muhammad Muslim Abdul Jabbaar", "217200035");
// Pass only the required parameter. $y will take its default value of 0.
$p2 = new dataDiri("M Husni Ramadhan", "217200034");

$p1->tampil();
$p2->tampil();
// print_r($p1);
// print_r($p2);
?>