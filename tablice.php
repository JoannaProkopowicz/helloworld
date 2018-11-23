<?php
/**
 * Created by PhpStorm.
 * User: jprokopowicz1
 * Date: 20.11.18
 * Time: 17:15
 */

require_once "./thirdd.php";

 wyswietl("hello require");


/* $podstawowaTablica = Array();

wyswietl($podstawowaTablica);

$pierwszyElement =Array(1);
wyswietl($pierwszyElement);

$drugiElement =Array(1,2,);
wyswietl($drugiElement);

$drugiElementInaczej =array(1,2,4);
wyswietl($drugiElementInaczej);

$trzeciElement = [
   'a',
   'b',
   'c',
];

$trzeciElement[2]='e';
unset($trzeciElement[1]);
wyswietl($trzeciElement);

$trzeciElement[]='e';
/* dodaje kolejny element do tablicy na koniec */

/* array_push($trzeciElement,"f");
wyswietl($trzeciElement);

$dlugoscTablicy =count($trzeciElement);
wyswietl($dlugoscTablicy);

//array_pop unpop
//array_shift unshift

array_pop($trzeciElement); //ucina ostatni element tablicy
wyswietl($trzeciElement);


array_shift($trzeciElement);
wyswietl($trzeciElement);

array_unshift($trzeciElement, '<3'); //dodaje na poczatku, nie nadpisuje jak przypisanie
wyswietl($trzeciElement);

$niespodzianka =array_pop($trzeciElement);
wyswietl($trzeciElement);
wyswietl($niespodzianka);

TABLICE INDEKSOWANE I NIEINDEKSOWANE

*/
$newTable = [
     "wartosc2",
    "abc",
    "1",
    "34" => "trzycztery",
    'fthfth',
    '46',
];

$otherTable= [
    "abc",
];
/*
unset($newTable[0]);
wyswietl($newTable);
*/

$mergedTables = $newTable + $otherTable;
// $mergedTables = array_merge($newTable, $otherTable); zlaczy dwie tablice w jedna
wyswietl($mergedTables);







