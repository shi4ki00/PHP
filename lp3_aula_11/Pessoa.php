<?php
require_once "Data.php";

class Pessoa {
    public int $codigo;
    public string $nome;
    public Data $dataNascimento;

    public function __construct($id, $nome, $d, $m, $a)
    {
        $this->codigo = $id;
        $this->nome = $nome;
        $this->dataNascimento = new Data($d, $m, $a);
    }

}