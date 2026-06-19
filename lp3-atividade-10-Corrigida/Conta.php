<?php

class ContaBancaria
{

    public string $titular, $dataAbertura;
    public int $numero, $agencia, $status;
    public float $saldo;

    public function depositar(float $valor)
    {
        if ($valor > 0) {
            $this->saldo = $this->saldo + $valor;
        } else {
            echo "Erro: valor negotivo ou zero";
        }
    }
    public function sacar(float $valor)
    {
        if ($valor > 0 && $this->saldo >= $valor) {
            $this->saldo = $this->saldo - $valor;
        } else {
            echo "Erro: valor negotivo ou zero ou saldo insufisiente";
        }
    }
    public function trasferir(float $valor, ContaBancaria $destino)
    {
        if (empty($destino) && $destino->status == true) {
            if ($valor > 0 && $this->saldo >= $valor) {
                $this->saldo = $this->saldo - $valor;
                $destino->saldo = $destino->saldo + $valor;
                return true; 
            } else {
                echo "Erro: valor negotivo ou zero ou saldo insufisiente";
                return false;
            }
        } else {
            echo "Erro: conta não existe ou conta não existe";
            return false;
        }
    }
    public function fecharConta() {
        if($this->saldo == 0){
            $this->status = false;
        } else {
            echo "Erro: Conta possui saldo";
        }
    }

    public function consultarSaldo(int $valor) {
        return $this->saldo;
    }
    
}
