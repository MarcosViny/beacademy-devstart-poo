<?php

declare(strict_types=1);

class Categoria
{
    // Construtores com Atributos PHP Versão apartir da 8.0
    public function __construct(
        private string $nome, 
        private string $descricao
    ) {

    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $novoNome): void
    {
        $this->nome = $novoNome;
    }


    // Construtores com Atributos Versões Anteriores a 8.0
    /* private string $nome;
    private string $descricao;

    public function __construct(string $nome, string $descricao) // A função construtora obriga o objeto construido ter os atributos setados, utilizando apenas os setters não acontece isso
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
    } */

    // Link para saber mais sobre as Novidades Construtores no PHP >= 8.0:
    // https://php.watch/versions/8.0/constructor-property-promotion
}
