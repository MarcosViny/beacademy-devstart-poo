<?php

include_once 'Aluno.php';
include_once 'Professor.php';
include_once 'Curso.php';

$a1 = new Aluno();
$a1->cpf = "123.123.123.12";
$a1->nome = "Marcos";

$cursoPHP = new Curso();
$cursoPHP->nome = "Introdução ao PHP";
$cursoPHP->cargaHoraria = 88;
$cursoPHP->descricao = "Do básico ao Intermediário no PHP";

echo "<h1>Aluno: {$a1->nome}</h1>";