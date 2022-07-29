<?php

declare(strict_types=1);

abstract class Validar // Class Validar definida como abstract para ficar claro que não poderá ser instanciada de forma alguma
{
    public static function validarCpf(string $cpf): void //Classes que possuem a palavra reservada static não precisam ser instanciadas para serem utilizadas
    {
        if (strlen($cpf) != 11) { //Apenas Números
            die("Ops, CPF inválido");
        }
    }
}
