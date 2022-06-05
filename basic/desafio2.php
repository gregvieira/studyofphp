<?php

echo "<h1>Desafio 2</h1>";
echo "<br>";
echo "<p>Desafio exibir a tabuada de qualquer número</p>";

echo "<input name='numero' type='number'><br>";
echo "<button name='tabuada'>Tabuada</button><br>";
echo "<br><br><br>";

$multiplicador = 1;
for($i = 1; $i <= 10; $i++){
    $resultado = $multiplicador * $i;
    echo "$multiplicador x $i = $resultado <br>";
};