<?php
/**
 * Created by PhpStorm.
 * User: jprokopowicz1
 * Date: 09.11.18
 * Time: 19:09
 */
const LELUM="abc";

//callable - wywolanie funkcji

function nazwaFunkcji($argument = "domyslna")
{

//    $zmienna="wnetrze";
    return $argument;
}
function nowaFunkcja($argumentFunkcji) {
    return $argumentFunkcji . " drugiej funkcji";
}
echo nowaFunkcja(nazwaFunkcji());

//echo nowaFunkcja
//    nazwaFunkcji(LELUM),
//     "drugiej",
//     "trxeciez"
//);
// POPRAWNE ROWNIEZ, czytelne


//
//$wynik=nazwaFunkcji();
//echo wynik;

/*
$poprawionaTablica = array_map(
    function($element) {
        return $element. "1";
    }
)
*/