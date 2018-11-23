<?php
/**
 * Created by PhpStorm.
 * User: jprokopowicz1
 * Date: 20.11.18
 * Time: 18:32
 */

require_once "tablice.php";
wyswietl(count($newTable));

foreach($newTable as $klucz => $element) {
    wyswietl($klucz. "-----> ".$element);
    if($element==="1") {
        break;
    }
}

while(true) {
    wyswietl("");
}


/* klasa to kawalek kodu, lokalne zmienne, klasa zamyka funkcje (metody);
obiekt instancja klasy
interfejs - opisuje wszystkie ...
stale prywatne albo publiczne
funkcja przyjmie wszystko
 */