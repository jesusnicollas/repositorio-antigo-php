<?php

function ExibeMessage($mensagem)    
{
    echo "$mensagem" . PHP_EOL;
}


function somatoria($x)
{
   return $x + 1221;
}

function sacar(array $conta, float $valorASacar) : array
{
    if ($valorASacar > $conta['saldo']) {
        ExibeMessage(mensagem:"Não é possível sacar este valor, pois seu saldo é : inferior ao que deseja sacar"); 
    } else {
    $conta['saldo'] -= $valorASacar;    
    }
    return $conta;
}

function depositar(  $conta, float $ValorADepositar) : array
{
    if ($ValorADepositar > 0) {
        $conta['saldo'] += $ValorADepositar;
    }
    else {
        ExibeMessage(mensagem: "O valor tem que ser maior que 0");
    }
    return $conta;
}
function TudoMaiusculo(array &$conta)
{
$conta['titular'] = strtoupper ($conta['titular']);
}



?>