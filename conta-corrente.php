<?php

require 'funcoes.php' ;



//function somatoria($subtrair) {
   //$subtrair = $x - $conta[saldo];
    //if ($x > $conta[saldo]){
// echo "Transação não autorizada"
//};
 //else { $x - $conta[saldo]; 
//}

//};


$contaList = [
        '864.120.328-80'  => [
        'saldo' => '100',
        'titular' => 'astolfo'   
    ],

        '101.203.289-80' => [
        'saldo' => '101212',
        'titular' => 'maria'
    ],

        '204.120.328-80' => [
        'saldo' => '150',
        'titular' => 'joão'    
    ],
        '123.555.895-00' => [
        'saldo' => '1222',
        'titular' => 'duarda'
    ]
];

$contaList['220.166.117-00'] = 
     [
    'saldo' => '11',
    'titular' => 'filipinas',    
    ]
    ;
$contaList['123.166;897-00'] = [
    'saldo' => '0',
    'titular' => 'josenilda']

;

$contaList['220.166.117-00'] = depositar($contaList['220.166.117-00'], 100);
$contaList['123.166;897-00'] = depositar($contaList['123.166;897-00'], 100);


TudoMaiusculo($contaList['123.166;897-00']);

unset ($contaList['123.166;897-00']);

foreach ($contaList as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
ExibeMessage(mensagem:"Este é o cpf: $cpf e o nome é $titular, saldo é $saldo");
}
;

#$resultado = depositar($x, 100);
#ExibeMessage("a conta do cpf" . $cpf . " é " . $resultado['saldo']);

;
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
    <br>
    Aqui vai o código HTML que fará seu site aparecer.
  </body>
</html>
