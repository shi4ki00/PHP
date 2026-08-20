<?php

class Produto
{
    private int $codigo;
    private string $nome;
    private float $valor;

    public function __construct(
        int $codigo,
        string $nome,
        float $valor
    ) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function imprimir(){

    }
}