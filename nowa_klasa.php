<?php
/**
 * Created by PhpStorm.
 * User: jprokopowicz1
 * Date: 23.11.18
 * Time: 19:05
 */

require_once "./klasa.php";

class NowaKlasa extends StaraKlasa
{
    private $arg1;
    private $arg2;

    public function funkcja1($arg)
    {
        $this->arg1 = $arg;

        return $this;
    }

    public function funkcja2($arg)
    {
        $this->arg2=$arg;

        return $this;
    }

    public function funkcja3()
    {
        return $this-> arg1 . " " . $this-> arg2;
    }
}

    $nowyObiekt = new NowaKlasa();

    wyswietl(
        $nowyObiekt
            ->funkcja2("funkcja2 ")
            ->funkcja1("funkcja1 ")
            ->funkcja3()
    );
