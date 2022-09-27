<?php

$altura = 1.79;
$peso = 5;
$imc = $peso / ($altura * $altura); 
if ( $imc < 18.5) {
    echo "o indice de massa corporal $imc é considerado magro" . PHP_EOL;
}
elseif ($imc <= 25.5 )
    echo "o indice de massa corporal $imc é considerado medio" . PHP_EOL;
    else echo   "o indice de massa corporal $imc é considerado alto";
?>