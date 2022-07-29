<?php

$senha = 123456;
$code = 'MTIzNDU2';

// Codifica Senhas e é fácil de decodificar
echo base64_encode($senha).PHP_EOL;
echo base64_decode($code).PHP_EOL;

