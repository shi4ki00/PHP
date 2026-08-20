<?php

abstract class Computador {
    private string $marca;
    private int $numeroSerie;
    private float $peso;
    private static int $qtde = 0;

    public function __construct(string $marca, int $numeroSerie, float $peso)
    {
        $this->marca = $marca;
        $this->numeroSerie = $numeroSerie;
        $this->peso = $peso;
        self::$qtde++;
    }

    /**
     * Get the value of marca
     */ 
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */ 
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    /**
     * Get the value of numeroSerie
     */ 
    public function getNumeroSerie()
    {
        return $this->numeroSerie;
    }

    /**
     * Set the value of numeroSerie
     *
     * @return  self
     */ 
    public function setNumeroSerie($numeroSerie)
    {
        $this->numeroSerie = $numeroSerie;
    }

    /**
     * Get the value of peso
     */ 
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     *
     * @return  self
     */ 
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    /**
     * Get the value of qtde
     */ 
    public static function GET_QTDE()
    {
        return self::$qtde;
    }

}