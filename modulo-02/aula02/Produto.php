<?php

declare(strict_types=1);

class Produto
{
    private string $nome;
    private float $valor;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $novoNome): void
    {
        $novoNome < 0 ? die("Ops, Valor não pode ser negativo!") : $this->nome = $novoNome;

        $this->nome = $novoNome;
    }
    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $novoValor): void
    {
        $novoValor < 0 ? die("Ops, Valor não pode ser negativo!") : $this->valor = $novoValor;
    }
}
