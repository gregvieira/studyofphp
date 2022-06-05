<?php

echo "<h1>Desafio 3</h1>";
echo "<br>";
echo "<p>Tabela IMC</p>";

echo "<input name='numero' type='number'><br>";
echo "<button name='IMC'>Calcular</button><br>";
echo "<br><br><br>";

$peso = 72;
$altura = 1.74;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc. Você está com o IMC ";

if ($imc < 18.5) {
    echo "abaixo";
} elseif($imc < 25){
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado.";