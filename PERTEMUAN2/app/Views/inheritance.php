<?php

class halo
{
    public function tampilkan($string)
    {
        echo 'Halo ' . $string;
    }
    
    public function helloUnpi()
    {
        echo 'Hello UNPI ';
    }
}

class unpi extends halo
{
    public function tampilkan($string)
    {
        echo 'Sampurasun ' . $string;
    }
}

$foo = new halo();
$bar = new unpi();
$foo->tampilkan('UNPI');
echo "<br>";
$foo->helloUnpi();    
echo "<br>";
$bar->tampilkan('UNPI'); 
echo "<br>";
?>