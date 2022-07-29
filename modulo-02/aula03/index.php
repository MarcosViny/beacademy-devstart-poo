<?php

include_once 'Produto.php';
include_once 'Categoria.php';

// Categorias
$c1 = new Categoria("Roupas", "Roupas Unissex");
$c2 = new Categoria("Roupas de Banho", "Toalhas para Rosto, Toalhas para Banho");
$c3 = new Categoria("Calçados", "Calçados em Geral");


// Produtos
$p1 = new Produto("Tênis para Corrida", 299, "Descrição do Tênis", $c3);
// Antes de colocar Construtores:
/* $p1 = new Produto();
$p1->setNome("Tênis para Corrida");
$p1->setValor(299); */
//echo "Nome: {$p1->getNome()} | Valor: {$p1->getValor()} | Descrição: {$p1->getDescricao()} <br>";

$p2 = new Produto("Calça Jeans", 100, "Descrição da Calça", $c1);
// Antes de colocar Construtores:
/* $p2 = new Produto();
$p2->setNome("Calça Jeans");
$p2->setValor(100); */
//echo "Nome: {$p2->getNome()} | Valor: {$p2->getValor()} | Descrição: {$p2->getDescricao()}";


// $p3 = new Produto("Calça Branca"); // Se tentar criar um objeto com atributos obrigatórios faltando no construtor vai dar erro
// $p3 = new Produto();
// $p3->setNome("Calça Branca"); // Utilizando Setters ele permite criar objetos com atributos faltando
// echo "Nome: {$p2->getNome()} | Valor: {$p2->getValor()}";

echo "<pre>";
var_dump($p1);
var_dump($p2);
// var_dump($p3);
echo "</pre>";