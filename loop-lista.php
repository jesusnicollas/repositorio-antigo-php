<?php


$idadeList = [12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26];

list ($idadeJose, , $idadeMario) = $idadeList;
echo $idadeMario;

exit();
$conta1 = [
    'saldo' => '100',
    'titular' => 'rodolfo',
    'cpf' => 86412032880,

];

$conta2 = [
    "saldo" => '100',
    "titular" => 'rodolfo',
    "cpf" => 1012032880,

];
$conta3 = [
    "saldo" => '100',
    "titular" => 'rodolfo',
    "cpf" => 20412032880,

];
$conta4 = [
    "saldo" => '1120',
    "titular" => 'rogerio',
    "cpf" => 50412032880,

];
$contasList = [$conta1, $conta2, $conta3, $conta4];

for ($i = 0; $i < count($idadeList); $i++) {
echo "a idade de joao é $idadeList[$i]" . PHP_EOL;
}


?>



<php 



?>