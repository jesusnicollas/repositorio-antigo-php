<?php 

$dados = [
    'nome' => 'Jose',
    'nota' => 11.5,
    'idade' => 28
]; 
$dados[] = ['estado' => 'Paraiba'];

extract($dados);

var_dump($dados)






?>