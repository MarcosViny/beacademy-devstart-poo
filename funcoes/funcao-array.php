<?php
declare(strict_types=1);

function mostrarNomes(array $nomes) : void
{
    foreach($nomes as $cadaNome) {
        echo "Nome> " . $cadaNome . PHP_EOL;
    }
}

mostrarNomes(['Ana', 'Carlos', 'Joana']);

// Com modo estrito ele dá erro antes mesmo de tentar rodar
//mostrarNomes('teste');