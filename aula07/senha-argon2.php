<?php

$senha = '123456';

// O mais recomendado, pois gera chaves aleatórias
echo password_hash($senha, PASSWORD_ARGON2I) . PHP_EOL;