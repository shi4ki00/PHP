<?php

class Produto{

        private int $codigo;
        private string $nome;
        private float $valor;

    public function __construct(int $codigo, string $nome, float $valor){
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function imprimir(){
        echo $this->codigo . "<br>";
        echo $this->nome . "<br>";
        echo $this->valor . "<br><br>";
    }
    


        
        public function getCodigo()
        {
                return $this->codigo;
        }

        
        public function setCodigo(int $codigo)
        {
                $this->codigo = $codigo;

                return $this;
        }

         
        public function getNome()
        {
                return $this->nome;
        }

        
        public function setNome(string $nome)
        {
                $this->nome = $nome;

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