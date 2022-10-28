<?php

    $hostname   = 'localhost';
    $username   = 'root';
    $password   = '';
    $db_name    = 'e_catalog';

    $db_koneksi = mysqli_connect($hostname,$username,$password,"$db_name") or die ('Periksa Koneksi Database!!');
    
?>