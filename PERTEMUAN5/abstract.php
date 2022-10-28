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

$komp = new digiCom();
$komp->cekKomponen("Asus", "RTX 3060");
echo $komp->cekJumlah("25");
