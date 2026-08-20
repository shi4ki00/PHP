<?php
require_once "Cliente.php";

class Conta
{
    private int $numero;
    private Cliente $titular;
    private int $agencia;
    private float $saldo;
    private string $dataAbertura;
    private int $status;

    public function __construct(int $numero, Cliente $titular, int $agencia, float $saldo, string $data, int $status)
    {
        $this->numero = $numero;
        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->saldo = $saldo;
        $this->dataAbertura = $data;
        $this->status = $status;
    }

    public function depositar(float $valor)
    {
        if ($valor > 0) {
            $this->saldo = $this->saldo + $valor;
        } else {
            echo "Erro: Valor negativo ou zero";
        }
    }

    public function sacar(float $valor)
    {
        if ($valor > 0 && $this->saldo >= $valor) {
            $this->saldo = $this->saldo - $valor;
        } else {
            echo "Erro: Valor igual a zero ou maior que o saldo.";
        }
    }

    public function transferir(float $valor, Conta $destino)
    {

        if (!empty($destino) && $destino->status == true) {

            if ($valor > 0 && $this->saldo >= $valor) {
                $this->saldo = $this->saldo - $valor;
                $destino->saldo += $valor;
                return true;
            } else {
                echo "Erro: Valor igual a zero ou maior que o saldo.";
            }
        } else {
            echo "Erro: Conta nao existe ou conta inativa";
        }
        return false;
    }

    public function fecharConta() {
        if ($this->saldo == 0){
            $this->status = false;
        }else{
            echo "Erro: A conta possui saldo.";
        }
    }

    public function consultarSaldo() {
        return $this->saldo;
    }

    public function __toString()
    {
        return "Número: " . $this->numero. "<br>" .
        $this->titular.
        "Saldo: " . $this->saldo. "<br>";
    }



    /**
     * Get the value of titular
     */ 
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * Set the value of titular
     *
     * @return  self
     */ 
    public function setTitular($titular)
    {
        $this->titular = $titular;

    }
}
