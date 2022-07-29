<?php

$notasCursoA = [
    10,
    9,
    9.5,
    7
];

$notasCursoB = [
    8,
    9,
    3,
    6.4
];

function mediaDeNotas(array $notas): float
{
    $total = array_sum($notas);
    $quantidade = count($notas);

    return $total / $quantidade;
};

// Função Altenativa para calcular medias
/* function mediaDeNotas(array $notas): float
{
    $total = 0;
    $quantidade = 0;

    foreach ($notas as $cadaNota) {
        $total += $cadaNota;
        $quantidade++;
    }

    return $total / $quantidade;
}; */

echo mediaDeNotas($notasCursoA).PHP_EOL;
echo mediaDeNotas($notasCursoB).PHP_EOL;