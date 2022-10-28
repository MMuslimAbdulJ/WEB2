<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function coba()
    {
        echo "My name is ". $this->nama;
    }
    public function coba2()
    {
        return view('coba');
    }
    public function coba3()
    {
        return view('construct');
    }
    public function coba4()
    {
        return view('inheritance');
    }
    public function coba5()
    {
        return view('oop');
    }
}
