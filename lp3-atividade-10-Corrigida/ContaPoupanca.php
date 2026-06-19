<?php

require_once "Conta.php";

class ContaCorrente extends Conta{

    public int $diaAniversario, $diasSemMovimentacao;
    public float $taxaRendimentoMensal;

    public function creditarRendimentp(){
        if($this->diaAniversario == 12){
            $this->saldo = $this->saldo + ($this->saldo * $this->taxaRendimentoMensal);
        }
    }
    public function preverProximoRendimento(){
        $rendimento = $this->saldo * $this->taxaManutencaoMensal;
        return $rendimento;
    }
    

}