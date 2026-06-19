<?php

require_once "ContaBancaria.php";

$b1 = new ContaBancaria();
echo "<h1> Conta 1 </h1>";

$b1->nome = "João";
$b1->numeroConta = 1;
$b1->saldo = 200;
$b1->limiteDiario = 20;
$b1->limiteDiarioUtilizado = 0;
$b1->exibirDados();
$b1->depositar(20);
$b1->exibirDados();
$b1->sacar(2);
$b1->exibirDados();
$b1->sacar(20);
$b1->exibirDados();
$b1->sacar(21);
$b1->exibirDados();



$b2 = new ContaBancaria();
echo "<h1> Conta 2 </h1>";

$b2->nome = "João2";
$b2->numeroConta = 2;
$b2->saldo = 110;
$b2->limiteDiario = 30;
$b2->limiteDiarioUtilizado = 0;
$b2->exibirDados();


$b1->transferir(20, $b2);
$b2->transferir(10, $b1);

$b1->exibirDados();
$b2->exibirDados();

$b3 = new ContaBancaria();
echo "<h1> Conta 2 </h1>";

$b3->nome = "João3";
$b3->numeroConta = 3;
$b3->saldo = 300;
$b3->limiteDiario = 40;
$b3->limiteDiarioUtilizado = 0;
$b3->exibirDados();




