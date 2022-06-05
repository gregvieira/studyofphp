<?php

echo "<h1>Desafio 1</h1>";
echo "<br>";
echo "<p>Desafio exibir em tela somente números impares até 100</p>";
 
for($i = 0; $i <= 100; $i++) {
    if($i % 2 == 0) {
        continue;
    } else {
    echo "$i <br>";
}
}