<?php

include_once 'Usuario.php';  
include_once 'Cliente.php';
include_once 'ClienteVip.php';
include_once 'Gestor.php';
include_once 'GestorGeral.php';
include_once 'Validar.php';

$c1 = new Cliente("Chiquim@email.com", "123456");
$c1->setNome("Chiquim");
$c1->setDataCadastro("01/01/2020");

$cpf = "12345678901";

// Método Validar antes de ser definido como Estático
// $validador = new Validar();
// $validador->validarCpf($cpf);

// Método Validar após ser definido como Estático
Validar::validarCpf($cpf);

$c1->setCpf($cpf);

$g1 = new Gestor("zezim@email.com", "123123", 6000);
$g1->setNome("Zezim");
//$g1->setSalario(5400);

$gg1 = new GestorGeral("maria@email.com", "12dska", 9000);

//$us = new Usuario("hacker@email.com", 111111); // Não pode ser instanciada, pois está definida como Classe Abstrata

echo '<pre>';
var_dump($c1);
var_dump($g1);
var_dump($gg1);
// var_dump($us);
echo '</pre>';