<?php 

$server = "127.0.0.1";
$database = "appdb";
$user = "root@localhost";
$password = "";

$con = new PDO("mysql:host=$server;dbname=$database", "root", "");

if ($con == 1) {
    echo "voce está conectado ao banco de dados";
} else {
    echo "erro ao conectar";
};
   
   $email = 'nicollas.souza@gmail.com';
   $senha = 'a12222211111niver1';
   $senhaDigitada = 'a12222211111niver1';
   $usuarioDigitado = 'nicollas.souza';
   
   $qtdSenha = strlen($senha);
   
   if ($qtdSenha <= 13) {
       echo 'senha insegura <p>'. PHP_EOL;
   } elseif ($qtdSenha  <= 17) {
       echo 'senha segura <p>'. PHP_EOL;
   } else {
       echo 'senha  muito longa <p>' . PHP_EOL;
   };
   
   $posicao = strpos($email, '@');
   
   $usuario = substr($email, 0, $posicao);
   $dominio = substr($email, $posicao +1);
   
   echo "$usuario <p>" . PHP_EOL;
   echo "$dominio <p>" . PHP_EOL;
   
   
   echo " $usuario <p> " . PHP_EOL;
   
     //  echo $senha . PHP_EOL;
     //  echo $senhaDigitada . PHP_EOL;
     //  echo $usuario . PHP_EOL;
     //  echo $usuarioDigitado . PHP_EOL;
   $i = 0;
   if ($usuarioDigitado == $usuario && $senhaDigitada == $senha) {
       // echo "você está conectado" . PHP_EOL;
       for ($i = 0; $i < 10000; $i ++) {
     # 
       };
     //  echo $i;
       header('Location: site.php');
       die();
   }
   else {
       echo 'digite novamente, pois o usuario ou senha digitada estão divergentes';
   }
   
   
   ?>