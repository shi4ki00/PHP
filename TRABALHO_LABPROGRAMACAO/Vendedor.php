<?php
require_once "Pessoa.php";
class Vendedor extends Pessoa
{
    private float $salario;
    private float $comissao;
    public function __construct(string $nome, string $cpf, string $sexo, Data $data, float $salario, float $comissao)
    {
        parent::__construct($nome, $cpf, $sexo, $data);
        $this->salario = $salario;
        $this->comissao = $comissao;
    }
    public function getSalario()
    {
        return $this->salario;
    }
    public function setSalario($salario)
    {
        $this->salario = $salario;
        return $this;
    }
    public function getComissao()
    {
        return $this->comissao;
    }
    public function setComissao($comissao)
    {
        $this->comissao = $comissao;
        return $this;
    }
    public function imprimir()
    {
        echo $this->getNome() . "<br>";
        echo $this->getCpf() . "<br>";
        echo $this->getSexo() . "<br>";
        echo $this->getDataNasc() . "<br>";
        echo $this->getSalario() . "<br>";
        echo $this->getComissao() . "<br>";
    }
}
?>
