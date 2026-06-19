<?php

require_once "ContaBancaria.php";

class ContaPoupanca extends ContaBancaria {

    public int $diaAniversario, $diasSemMovimentacao;
    public float $taxaRendimentoMensal;

    public function creditarRendimento(){
        if (date("d") == $this->diaAniversario){

            $this->saldo = $this->saldo + ($this->saldo * $this->taxaRendimentoMensal);

            echo "Rendimento creditado";

        } else {

            echo "Hoje não é o dia de rendimento";
        }
    }

    public function preverProximoRendimento(){

        return $this->saldo * $this->taxaRendimentoMensal;
    }
}