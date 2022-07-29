<?php

// Abrir arquivo
$arquivo = fopen('produtos.csv', 'a+');

fwrite($arquivo, "Marcos" . PHP_EOL);
fwrite($arquivo, "Ana" . PHP_EOL);
fwrite($arquivo, "Carla" . PHP_EOL);

fclose($arquivo);