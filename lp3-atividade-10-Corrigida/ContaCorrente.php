<?php

require_once "Conta.php";

class ContaCorrente extends Conta{

    public string $cartaoCreditoVencimento;
    public float $limiteChequeEspecial, $taxaManutencaoMensal, $valorCartaoCredito;

    public function sacar(float $valor){
        if ($valor > 0 && ($this->saldo + $this->limiteChequeEspecial) >= $valor) {
            $this->saldo = $this->saldo - $valor;
        } else {
            echo "Erro: valor negotivo ou zero ou saldo insufisiente";
        }
    }
    public function cobrarTaxaMensal(){
        $this->saldo -= $this->taxaManutencaoMensal;
    }
    public function SolicitarAumentoLimite(float $valor){
        if($valor > 0){
            if($valor <= 0.3 * $this->limiteChequeEspecial){
                $this->limiteChequeEspecial += $valor;
            }
        }
    }
    public function pagarFaturaCartao(){
        if($this->cartaoCreditoVencimento <= date('Y-m-d')){
            $this->saldo -= $this->valorCartaoCredito;
            if($this->saldo < 0){
                $this->limiteChequeEspecial += $this->saldo;
            }

        } else {
            echo "A fatura do cartão de crédito ainda não venceu";
        }
    }

}
