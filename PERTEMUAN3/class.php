<?php

namespace Data\Traits;

trait SayGoodBye
{
    public function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Selamat tinggal" . PHP_EOL;
        } else {
            echo "Selamat tinggal $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Halo" . PHP_EOL;
        } else {
            echo "Halo $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait CanRun
{
    public abstract function run(): void;
}

class ParentPerson {

    public function goodBye(?string $name): void
    {
        echo "Sampai bertemu kembali" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Halo" . PHP_EOL;
    }

}

trait All {
    use SayGoodBye, SayHello, HasName, CanRun {
        // bisa di override
        // hello as private;
        // goodBye as private;
    }
}

class Person extends ParentPerson
{
    use All;

    public function run(): void
    {
        echo "Orang dengan nama $this->name sedang coding" . PHP_EOL;
    }

}