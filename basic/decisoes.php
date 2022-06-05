<?php

$idade = 16;
$numeroDePessoas = 1;
// echo " $idade ";

echo "Você só pode entrar a partir de 18 anos ou se estiver acompanhado" . PHP_EOL;
echo "<br>" . PHP_EOL;
if($idade >= 18){
    echo "Você tem $idade". PHP_EOL . "e pode entrar";
    echo "<br>" . PHP_EOL;
    }else if($idade >= 16 && $numeroDePessoas > 1) {
        echo "Você tem $idade e está acompanhado, pode entrar!";
        echo "<br>" . PHP_EOL;
    } else
    echo "Você tem $idade não pode entrar";

echo "<br>" . PHP_EOL;
echo PHP_EOL;
echo "Adeus!";

?>