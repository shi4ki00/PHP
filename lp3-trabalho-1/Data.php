<?php

class Data
{
    private int $dia;
    private int $mes;
    private int $ano;

    public function __construct(int $dia, int $mes, int $ano)
    {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
    }

    public function __toString(){
        return $this->dia . "/" . $this->mes . "/" . $this->ano;

    }

    public function imprimirDataBanco(){
        echo $this->dia . "/" . $this->mes . "/" . $this->ano . "<br><br>";

    }

    public function getDia()
    {
        return $this->dia;
    }

    public function setDia(int $dia)
    {
        $this->dia = $dia;

        return $this;
    }

    public function getMes()
    {
        return $this->mes;
    }

    public function setMes(int $mes)
    {
        $this->mes = $mes;

        return $this;
    }

    public function getAno()
    {
        return $this->ano;
    }
 
    public function setAno(int $ano)
    {
        $this->ano = $ano;

        return $this;
    }
}