<?php
/**
 * Created by PhpStorm.
 * User: jprokopowicz1
 * Date: 09.11.18
 * Time: 17:50
 */

$imie="abc";
$imie2="def";
$imie3="abc";

/**echo var_export(float)1.2===(float)"1.2";

if ($imie === $imie3) {
    echo "weszlo!";
} elseif($imie===$imie2) {
    echo "tu tak";
} else {
    echo "nie";
}
 **/
// and == &&
// or == ||

$imie4="def";

/**switch($imie4) {
    case $imie:
        echo "weszlo";
        break;
    case $imie2:
        echo "a teraz tutaj";
        break;
    default:
        echo"koniec";
}
 */



$zmienna;
$pusta=0;
/**  if ($zmienna ===$pusta) {
    echo "pusto";
} else {
    echo " albo i nie";
} */
echo ($zmienna ===$pusta)? "pusto": "albo i nie";
echo $pusta??"pusto";
