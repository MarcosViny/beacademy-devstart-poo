<?php

include_once 'Usuario.php';  
include_once 'Cliente.php';
include_once 'ClienteVip.php';
include_once 'Gestor.php';
include_once 'GestorGeral.php';

$c1 = new Cliente("Chiquim@email.com", "123456");
$c1->setNome("Chiquim");
$c1->setDataCadastro("01/01/2020");

$g1 = new Gestor("zezim@email.com", "123123", 6000);
$g1->setNome("Zezim");
//$g1->setSalario(5400);

$gg1 = new GestorGeral("maria@email.com", "12dska", 9000);

//$us = new Usuario("hacker@email.com", 111111); // Não pode ser instanciada, pois está definida como Classe Abstrata

//$cv = new ClienteVip("clientevip@email.com", 123123); // Não pode ser instanciada, pois a classe Cliente está bloqueada para que não possa ter classes filhas (utilização da palavra reservada final)

echo '<pre>';
var_dump($c1);
var_dump($g1);
var_dump($gg1);
// var_dump($us);
// var_dump($cv);
echo '</pre>';