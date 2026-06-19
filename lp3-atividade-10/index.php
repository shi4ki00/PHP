<?php

require_once "ContaCorrente.php";
require_once "ContaPoupanca.php";

$c1 = new ContaCorrente();

echo "<h1>Conta Corrente 1</h1>";

$c1->titular = "João";
$c1->numero = 101;
$c1->agencia = 1;
$c1->dataAbertura = "27/05/2026";
$c1->saldo = 1000;
$c1->status = 1;

$c1->limiteChequeEspecial = 500;
$c1->taxaManutencaoMensal = 20;
$c1->valorCartaoCredito = 300;
$c1->cartaoCreditoVencimento = "10/06/2026";

echo "Informações antes do saque:<br>";
echo "Saldo: " . $c1->consultarSaldo() . "<br>";

$c1->sacar(1200);

echo "Informações depois do saque:<br>";
echo "Saldo: " . $c1->consultarSaldo() . "<br><br>";



$c2 = new ContaPoupanca();

echo "<h1>Conta Poupança 1</h1>";

$c2->titular = "Maria";
$c2->numero = 202;
$c2->agencia = 1;
$c2->dataAbertura = "27/05/2026";
$c2->saldo = 2000;
$c2->status = 1;

$c2->diaAniversario = date("d");
$c2->taxaRendimentoMensal = 0.01;
$c2->diasSemMovimentacao = 10;

echo "Informações antes do rendimento:<br>";
echo "Saldo: " . $c2->consultarSaldo() . "<br>";

$c2->creditarRendimento();

echo "Informações depois do rendimento:<br>";
echo "Saldo: " . $c2->consultarSaldo() . "<br><br>";



$c3 = new ContaCorrente();

echo "<h1>Conta Corrente 2</h1>";

$c3->titular = "Carlos";
$c3->numero = 303;
$c3->agencia = 2;
$c3->dataAbertura = "27/05/2026";
$c3->saldo = 500;
$c3->status = 1;

$c3->limiteChequeEspecial = 300;
$c3->taxaManutencaoMensal = 15;
$c3->valorCartaoCredito = 200;
$c3->cartaoCreditoVencimento = "15/06/2026";

echo "Informações antes da transferência:<br>";
echo "Saldo: " . $c3->consultarSaldo() . "<br>";

$c3->transferir(200, $c2);

echo "Informações depois da transferência:<br>";
echo "Saldo: " . $c3->consultarSaldo() . "<br>";
echo "Saldo: " . $c2->consultarSaldo() . "<br>";

?>