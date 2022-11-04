<?php

require_once "class.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("Danny");
$person->hello("Muslim");

$person->name = "Muslim";
var_dump($person);

$person->run();