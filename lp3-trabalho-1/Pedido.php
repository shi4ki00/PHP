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

    public function __construct(Cliente $cliente, Vendedor $vendedor, Produto $produto, int $quantidade, float $valor){
        $this->data = new Data((int)date("d"), (int)date("m"), (int)date("Y"));
        $this->listaItens[] = new ItemPedido($produto, $quantidade, $valor);
        $this->cliente = $cliente;
        $this->vendedor = $vendedor;
        $this->valorTotal = $this->calcularValorTotal();
    }

    public function adicionarItem(Produto $item, int $quantidade, float $valor){
        
        $novoItem = new ItemPedido($item, $quantidade, $valor);
        $this->listaItens[] = $novoItem;
        $this->valorTotal = $this->calcularValorTotal();
    }

    private function calcularValorTotal(){
        $total = 0;
        foreach ($this->listaItens as $item) {
            $total += $item->getValor() * $item->getQuantidade();
        }

        return $total;
    }

    private function adicionarComissao(){
        return $this->valorTotal * ($this->vendedor->getComissao() / 100);
    }

    public function fecharPedido(){
        $this->valorTotal = $this->calcularValorTotal();
    }

    public function imprimirPedidoCompleto(){

        echo "Data do pedido: " . $this->data . "<br>";
        echo "Cliente: " . $this->cliente->getNome() . "<br>";
        echo "Vendedor: " . $this->vendedor->getNome() . "<br>";

        echo "Pedido: " . "<br>";

        foreach($this->listaItens as $item){
            echo $item->getItem()->getNome() . "<br>";
            echo $item->getQuantidade() . "<br>";
            echo $item->getValor() . "<br><br>";
        }
    }

       
        public function getValorTotal()
        {
                return $this->valorTotal;
        }

        
        public function setValorTotal(float $valorTotal)
        {
                $this->valorTotal = $valorTotal;

                return $this;
        }

        
        public function getListaItens()
        {
                return $this->listaItens;
        }

        
        public function setListaItens(array $listaItens)
        {
                $this->listaItens = $listaItens;

                return $this;
        }
}
