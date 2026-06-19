<?php

class ContaBancaria{

    public string $titular, $dataAbertura;
    public int $numero, $agencia, $status; 
    public float $saldo;

    public function depositar(float $valor){
        if($valor > 0 ){
            $this->saldo = $this->saldo + $valor;
        } else {
            echo "O valor depositado deve ser maior que 0";
        }
    }
    public function sacar(float $valor){
        if($valor <= $this->saldo){
            $this->saldo = $this->saldo - $valor;
        } else if($valor <= 0){
            echo "O valor sacado deve ser maior que 0";
        } else {
            echo "O valor sacado é maior que o valor na conta";
        }
    }
    public function transferir(float $valor, ContaBancaria $destino){
        if($this->saldo >= $valor && $this->status == 1 || $destino->status == 1 && $this->saldo != 0 && $valor > 0){
            $destino->saldo = $destino->saldo + $valor;
            $this->saldo = $this->saldo - $valor;
            return true;
        } else if($this->status == 0 || $destino->status == 0){
            echo "Erro, status negativo";
            return false;
        } else if($this->saldo == 0){
            echo "A conta está nula";
            return false;
        } else if($valor <= 0){
            echo "O valor a ser transferido devera ser maior que 0";
            return false;
        }
        
    }
    public function consultarSaldo(){
        return "O saldo disponivel é: ". $this->saldo;
    }
    public function fecharConta(){
        if($this->saldo == 0){
            $this->status = 0;
        } else if($this->saldo < 0){
            echo "Você deve quitar suas dívidas para fechar sua conta";
        } else if($this->saldo > 0){
            echo "Você deve sacar o dinheiro restante para fechar sua conta";
        }
    }





    }
