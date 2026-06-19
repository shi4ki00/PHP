<?php

require_once "ContaBancaria.php";

class ContaCorrente extends ContaBancaria{

    public float $limiteChequeEspecial, $taxaManutencaoMensal, $valorCartaoCredito; 
    public string $cartaoCreditoVencimento;

    public function sacar(float $valor) {
        if($valor <= $this->saldo + $this->limiteChequeEspecial){
            if($valor > $this->saldo && $valor > 0){
                $this->saldo = $this->saldo - $valor;
                $this->status = 0;
                $this->limiteChequeEspecial = $this->limiteChequeEspecial - ($this->saldo - $valor);
            } else if($valor <= $this->saldo){
                $this->saldo = $this->saldo - $valor;
            }
        } else {
            echo "Erro";
        }
    }
    public function cobrarTaxaMensal() {
        
        $this->saldo = $this->saldo - $this->taxaManutencaoMensal;
        
    }
    public function SolicitarAumentoLimite(float $valor) {
        if ($valor <= 0){
            echo "O valor deve ser maior que 0";
        } else {
            $this->limiteChequeEspecial = $this->limiteChequeEspecial + $valor;
        }

    }
    public function pagarFaturacartao() {
        if ($this->valorCartaoCredito <= 0) {
            echo "Não há fatura pendente";
        }

        $this->sacar($this->valorCartaoCredito);

        $this->valorCartaoCredito = 0;

        echo "Fatura paga com sucesso";
    }

}