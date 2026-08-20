<?php

class Pessoa {
    private string $nome;
    private string $cpf;
    private string $sexo;
    private Data $dataNasc;

     public function __construct(string $nome, string $cpf, string $sexo, int $dia, int $mes, int $ano)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
        $this->dataNasc = new Data($dia, $mes, $ano);
    }


   
    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

   
    public function getCpf()
    {
        return $this->cpf;
    }

    
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

   
    public function getSexo()
    {
        return $this->sexo;
    }

    
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

     
    public function getDataNasc()
    {
        return $this->dataNasc;
    }

     
    public function setDataNasc($dataNasc)
    {
        $this->dataNasc = $dataNasc;

        return $this;
    }

     public function imprimir(){
        echo $nome = $this->getnome() . "<br>";
        echo $cpf = $this->getcpf() . "<br>";
        echo $sexo = $this->getsexo() . "<br>";
        echo $dataNasc = $this->getDataNasc() . "<br>";
    }
}

























?>