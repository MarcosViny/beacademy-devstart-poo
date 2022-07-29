<?php

// Tornar Fortemente Tipado
// Se não tiver no modo estrito o php chega a tentar executar o código com tipos diferentes
declare(strict_types=1);

function welcome(string $nome) {
    return "Bem vindo {$nome}";
}

function soma(float $n1, float $n2) {
    return $n1 + $n2;
};

echo soma(10, 20);

echo PHP_EOL . '-------------------------' . PHP_EOL;

echo soma(20, 32);


// Com modo estrito ele dá erro antes mesmo de tentar rodar
//echo soma("texto1", "texto2");
//echo welcome(true);