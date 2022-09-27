<?php

function ExibeMessage($mensagem)    {
    echo "$mensagem" . PHP_EOL;
}
;
//function substrair($subtrair) {
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
        "saldo" => '101212',
        "titular" => 'maria'
    ],

    '204.120.328-80' => [
        "saldo" => '150',
        "titular" => 'joão'    
    ],
];
if (150 > $contaList ['204.120.328-80'] ['saldo']) {
    echo ' Você não tem saldo para sacar' . PHP_EOL;
} else {
$contaList ['204.120.328-80'] ['saldo'] -= 150;
}; 

foreach ($contaList as $cpf => $conta) {
ExibeMessage ("Estes é o cpf: $cpf e o nome é $conta[titular], saldo é $conta[saldo]");
}


?>