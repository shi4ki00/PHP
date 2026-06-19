<?php

class ContaBancaria{

    public string $nome;
    public int $numeroConta, $saldo, $limiteDiario, $limiteDiarioUtilizado;


    public function depositar(int $valor){
        $this->saldo = $this->saldo + $valor;
    }
    public function sacar(int $valor){

        if($this->saldo > 0 && $this->saldo >= $valor && $this->limiteDiario >= $valor && $this->limiteDiarioUtilizado < $this->limiteDiario - $this->limiteDiarioUtilizado){

        $this->saldo = $this->saldo - $valor;
        $this->limiteDiarioUtilizado = $this->limiteDiarioUtilizado + $valor;

        } else {
            echo "<br> Erro no saque <br>";
        }
        
    }
    public function transferir(int $valor, ContaBancaria $contaDestino){
        $contaDestino->saldo = $contaDestino->saldo + $valor;
        $this->saldo = $this->saldo - $valor;
    }
    public function consultaSaldo(){
        echo "O saldo da sua conta é: " . $this->saldo . "<br><br>";
    }
    public function alterarLimite(int $novoLimite){
        $this->limiteDiario = $novoLimite;
    }
    public function exibirDados(){
        echo "O número da sua conta é: ". $this->numeroConta ."<br>";
        echo "O nome do titular é: ". $this->nome ."<br>";
        echo "O saldo disponível é : ". $this->saldo ."<br>";
        echo "O limite diário é : ". $this->limiteDiario ."<br>";
        echo "O limite diário utilizado é : ". $this->limiteDiarioUtilizado ."<br> <br>";
    }
}