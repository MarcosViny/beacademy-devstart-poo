<?php

include_once 'Produto.php';

$p1 = new Produto();
$p1->setNome("Tênis para Corrida");
$p1->setValor(299);
echo "Nome: {$p1->getNome()} | Valor: {$p1->getValor()}";

echo "<br>";

$p2 = new Produto();
$p2->setNome("Calça Jeans");
$p2->setValor(100);
echo "Nome: {$p2->getNome()} | Valor: {$p2->getValor()}";

echo "<pre>";
var_dump($p1);
var_dump($p2);
echo "</pre>";