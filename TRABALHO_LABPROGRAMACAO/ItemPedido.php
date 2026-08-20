<?php

require_once "Produto.php";

class ItemPedido
{
    private Produto $item;
    private int $quantidade;
    private float $valor;

    public function __construct(
        Produto $produto,
        int $quantidade
    ) {
        $this->item = $produto;
        $this->quantidade = $quantidade;
    }
}