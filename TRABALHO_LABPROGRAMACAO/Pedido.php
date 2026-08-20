<?php

require_once "Cliente.php";
require_once "Vendedor.php";
require_once "ItemPedido.php";
require_once "Data.php";

class Pedido
{
    private Data $data;
    private array $listaItens = [];
    private Cliente $cliente;
    private Vendedor $vendedor;
    private float $valorTotal;

    public function __construct(
        Cliente $cliente,
        Vendedor $vendedor,
        ItemPedido $itemPedido
    ) {
        $this->cliente = $cliente;
        $this->vendedor = $vendedor;
        $this->listaItens[] = $itemPedido;
        $this->data = new Data(
            date("d"),
            date("m"),
            date("Y")
        );
        $this->valorTotal = 0;
    }

    public function adicionarItem(ItemPedido $item){

    }

    private function calcularValorTotal(){

    }

    private function adicionarComissao(){

    }

    public function fecharPedido(){

    }

    public function imprimirPedidoCompleto(){

    }
}