<?php

class Data {
    public int $dia;
    public int $mes;
    public int $ano;

    public function __construct($d, $m, $a)
    {
        $this->dia = $d;
        $this->mes = $m;
        $this->ano = $a;
    }

    public function __toString()
    {
        return $this->dia . "/" . $this->mes . "/" . $this->ano;
    }

}