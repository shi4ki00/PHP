<?php
require_once "Pessoa.php";
class Cliente extends Pessoa
{
    private Data $dataCadastro;
    private string $preferencias;
    public function __construct(string $nome, string $cpf, string $sexo, int $dia, int $mes, int $ano, string $preferencias)
    {
        parent::__construct($nome, $cpf, $sexo, $dia, $mes, $ano);
        $this->dataCadastro = new Data((int)date("d"), (int)date("m"), (int)date("Y"));
        $this->preferencias = $preferencias;
        
    }
    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }
    public function setDataCadastro(Data $dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;
        return $this;
    }
    public function getPreferencias()
    {
        return $this->preferencias;
    }
    public function setPreferencias(string $preferencias)
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
        echo $this->getPreferencias() . "<br><br>";
    }
}
?>
