<?php

declare(strict_types=1);

class Produto
{
    private string $nome;
    private float $valor;
    private string $descricao;
    private readonly Categoria $categoria; //readonly está disponível apartir do php 8.1 e impede que o atributo seja reescrito

    public function __construct(string $novoNome ,float $novoValor, string $novaDescricao, Categoria $categoria) // A função construtora obriga o objeto construido ter os atributos setados, utilizando apenas os setters não acontece isso
    {
        $this->nome = $novoNome;
        $this->valor = $novoValor;
        $this->descricao = $novaDescricao;
        $this->categoria = $categoria;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $novoNome): void
    {
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
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $novaDescricao): void
    {
        $this->descricao = $novaDescricao;
    }

    // Link para saber mais sobre readonly (disponível apartir do PHP 8.1):
    // https://php.watch/versions/8.1/readonly
}
