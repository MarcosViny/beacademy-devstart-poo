<?php

// Tornar Fortemente Tipado
// Se não tiver no modo estrito o php chega a tentar executar o código com tipos diferentes
declare(strict_types=1);

// Tipando os parametros e retorno
function welcome(string $nome) : string
{
    return "Bem vindo {$nome}";
}

function soma(float $n1, float $n2) {
    return $n1 + $n2;
};

echo soma(5.67, 20);

echo PHP_EOL;

echo welcome("João");


// Com modo estrito ele dá erro antes mesmo de tentar rodar
//echo soma("texto1", "texto2");
//echo welcome(true);