<?php
class Cliente {
    private int $codigo;
    private string $nome;
    private string $cpf;

    public function __construct(int $codigo, string $nome, string $cpf)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function __toString()
    {
        return "Código: $this->codigo | Nome: $this->nome<br>";
    }

    public function imprimir() {
        echo "Código: " . $this->codigo . "<br>";
        echo "Nome: " . $this->nome . "<br>";
        echo "CPF: " . $this->cpf . "<br>";
    }

    /**
     * Get the value of codigo
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     *
     * @return  self
     */ 
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * Get the value of cpf
     */ 
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */ 
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
}