<?php
require_once "Pessoa.php";
class Cliente extends Pessoa
{
    private Data $dataCadastro;
    private string $preferencias;
    public function __construct(string $nome, string $cpf, string $sexo, Data $data)
    {
        parent::__construct($nome, $cpf, $sexo, $data);
        $this->dataCadastro = new Data(date("d"), date("m"), date("Y"));
        $this->preferencias = "";
    }
    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }
    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;
        return $this;
    }
    public function getPreferencias()
    {
        return $this->preferencias;
    }
    public function setPreferencias($preferencias)
    {
        $this->preferencias = $preferencias;
        return $this;
    }
    public function imprimir()
    {
        echo $this->getNome() . "<br>";
        echo $this->getCpf() . "<br>";
        echo $this->getSexo() . "<br>";
        echo $this->getDataNasc() . "<br>";
        echo $this->getDataCadastro() . "<br>";
        echo $this->getPreferencias() . "<br>";
    }
}
?>
