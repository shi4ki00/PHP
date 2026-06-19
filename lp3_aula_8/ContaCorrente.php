<?php
require_once "Conta.php";

class ContaCorrente extends Conta {
    public float $limiteSaque;

    public function soma(int $a, int $b) {
        $c = $a + $b;
        return $c;
    }

    public function imprimir() {
        echo "Esses são os dados";
    }
}