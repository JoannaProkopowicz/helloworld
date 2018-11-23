<?php
/**
 * Created by PhpStorm.
 * User: jprokopowicz1
 * Date: 23.11.18
 * Time: 17:23
*/

require_once "./thirdd.php";


abstract class StaraKlasa
{
    public $property1 = "wartosc property";

    protected $property2 = "protected";

    private $property3 = "private";

    public CONST STALA1 = "stala1";

    private CONST STALA2 = "stala2";

    public function funkcja1()
    {
        return "stara funkcja publiczna";

    }

    protected function funkcja2()
    {
        return "protected function";
    }

    private function funkcja3()
    {
        return "private function";
    }
}