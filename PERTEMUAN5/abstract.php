<?php
abstract class Komputer {
    public $komponen;
    public $merk;
    public $jumlah;

    abstract public function cekKomponen($merk, $komponen);

    public function cekJumlah($jumlah) {
        $this->jumlah = $jumlah;
        
        return  "Merk           : " . $this->merk . "<br>" .
                "Komponen       : " . $this->komponen . "<br>" . 
                "Jumlah         : " . $this->jumlah . "<br>";
    }
}


class digiCom extends Komputer {
    public function cekKomponen($merk, $komponen) {
        $this->merk = $merk;
        $this->komponen = $komponen;
    }

}

$komp1 = new digiCom();
$komp1->cekKomponen("Asus", "RTX 3060");
echo $komp1->cekJumlah("25");

$komp2 = new digiCom();
$komp2->cekKomponen("MuslimCOMP", "Intel Core i9-12000k");
echo $komp2->cekJumlah("15");