<?php echo "ola" . PHP_EOL;  
PHP_EOL . PHP_EOL ;
$valor1 = 3;
$valor2 = 11;
$usuario = 'nicollas';
$senha = '1234';

$soma = $valor1 + $valor2; 
#   echo " essa é a somatoria $soma " . PHP_EOL ;
if ($soma == 8) {
echo "voce pode entrar, pois o número é igual $soma " . PHP_EOL; 
}    elseif($valor1 == 4){  
    echo "voce caiu na regra do valor 1 = $valor1"; }
        elseif ($valor2 == 12){
        echo "voce caiu na regra do valor 2 = $valor2";
}    elseif ($usuario == 'nicollas' && $senha == '1234'){
    echo "você foi conectado à aplicação" . PHP_EOL ; 
}

echo 'bye bye'

?>

