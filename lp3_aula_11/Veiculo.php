<?php
require_once "Pessoa.php";

class Veiculo {
    public string $marca;
    public string $modelo;
    public string $cor;
    public int $ano;
    public Pessoa $proprietario;

    // Associação
    public function __construct($marca, $modelo, $cor, $ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
    }
}