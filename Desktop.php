<?php

require_once "Computador.php";

class Desktop extends Computador {
    private string $nome;
    private static float $frequencia = 2.5;

    #[Override]
    public function __construct(string $marca, int $numeroSerie, float $peso, string $nome)
    {
        parent::__construct($marca, $numeroSerie, $peso);
        $this->nome = $nome;
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
     * Get the value of frequencia
     */ 
    public static function GET_FREQUENCIA()
    {
        return self::$frequencia;
    }


}