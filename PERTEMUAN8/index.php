<?php
class Produk {
    
    public $data = array();
    public $text;
    public $var1;
    public $var2;

    public string $sample = "Ini properti dari objek";

    public function __toString(){
        return "Ini maghic function __toString()";
    }

    public function __set($properties, $name) {
        $this->properties = $name;
    }
    
    public function __get($properties) {
        return $this->properties;
    }

    public function __call($name, $arguments)
    {
        echo "Memanggil method '$name' yang tidak tersedia di objek, dengan arguments" . implode(', ', $arguments). "\n";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "Method static yang anda panggil yaitu '$name' tidak tersedia, dengan arguments "
             . implode(', ', $arguments). "\n";
    }
    public function __invoke()
    {
        return "Anda memanggil objek sebagai function";
    }

    public function __clone() {
        $this->sample = "Ini clone";
    }

    public function __isset($name)
    {
        echo "Apakah '$name' ada?\n";
        return isset($this->data[$name]);
    }

    public function __unset($name)
    {
        echo "Unsetting '$name'\n";
        unset($this->data[$name]);
    }

    // matikan komentar jika dibutuhkan
    // public function __debugInfo() {
    //     return [
    //         "1" => "Ini dari __debugInfo()"
    //     ];
    // }

    public static function __set_state($an_array)
    {
        $obj = new Produk;
        $obj->var1 = $an_array['var1'];
        $obj->var2 = $an_array['var2'];
        return $obj;
    }

    public function __sleep() {  
        echo "Teks ini adalah hasil perintah method __sleep() \n";  
        return array('text');
    }
    
    public function __construct(string $var) {
        echo $var . PHP_EOL;
    }

}
$produk1 = new Produk("Halo construct");
echo $produk1; //_toString()
$produk1->nama = "Muslim"; //__set()
echo $produk1->nim . PHP_EOL; //__get()
echo $produk1->methodKosong("HALO", "halo"); //__call()
Produk::methodStaticKosong("Halo", "Halo"); //__callStatic
echo $produk1() . PHP_EOL; //__invoke()
$produk2 = clone $produk1; //__clone()
var_dump($produk1);
var_dump($produk2);// masih __clone()
$produk1->xxx = "xxx value";
var_dump(isset($produk1->xxx));//__isset()
unset($produk->xxx);//__unset()
var_dump(isset($produk1->xxx));
// var_dump($produk1); //nyalakan komentar jika dibutuhkan bersammaan dengan magic method __debugInfo()
$a = new Produk("Halo Construct");
$a->var1 = 5;
$a->var2 = 'foo';
$b = var_export($a, true);
var_dump($b);
eval('$c = ' . $b . ';');
var_dump($c);