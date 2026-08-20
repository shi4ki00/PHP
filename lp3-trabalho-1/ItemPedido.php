<?php

require_once "Produto.php";

class ItemPedido
{
    
        private Produto $item;
        private int $quantidade;
        private float $valor;

    public function __construct(Produto $produto, int $quantidade, float $valor)
    {
        $this->item = $produto;
        $this->quantidade = $quantidade;
        $this->valor = $valor;
        
    }

        
        public function getItem()
        {
                return $this->item;
        }

        
        public function setItem(Produto $item)
        {
                $this->item = $item;

                return $this;
        }

         
        public function getQuantidade()
        {
                return $this->quantidade;
        }

         
        public function setQuantidade(int $quantidade)
        {
                $this->quantidade = $quantidade;

                return $this;
        }

        
        public function getValor()
        {
                return $this->valor;
        }

         
        public function setValor(float $valor)
        {
                $this->valor = $valor;

                return $this;
        }
}