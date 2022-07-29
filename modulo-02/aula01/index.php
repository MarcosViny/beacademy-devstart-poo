<?php

include_once 'Aluno.php';
include_once 'Professor.php';
include_once 'Curso.php';

$p1 = new Professor();
$p1->nome = "Alessandro";
$p1->cpf = "321.123.123.12";
$p1->salario = 1200;

echo "<pre>";
var_dump($p1);
echo "</pre>";