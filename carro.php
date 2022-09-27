<?php

$carList = [
    'carro1' => [
    'placa' => 'LMS-2312',
    'marca' => 'Volkswagem',
    'modelo' => 'golf'
    ],
    'carro2' => [
    'placa' => 'LKS-1112',
    'marca' => 'Fiat',
    'modelo' => 'Argo'
    ],
    'carro3' => [
    'placa' => 'KKS-3212',
    'marca' => 'GM',
    'modelo' => 'Onix'
]

    ];

    $carList['carro4'] = [
        'placa' => 'AAA-1111',
        'marca' => 'Renault',
        'modelo' => 'Bomba'
        ]
 ;


foreach ($carList as $veiculo => $carro) {
 echo("O carro da marca $carro[marca], é o modelo $carro[modelo], a placa do carro é $carro[placa]") . PHP_EOL;   
}

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
    Aqui vai o código HTML que fará seu site aparecer.
  </body>
</html>
