<?php

include_once 'Validar.php';
include_once 'ValidarBR.php';
include_once 'ValidarUS.php';

$cpf = "12345678901";
$docX = "12345678901234";

$br = new ValidarBR();
$br->validarDocumento($cpf);

$us = new ValidarUS();
$us->validarDocumento($docX);

echo "Funcionou";