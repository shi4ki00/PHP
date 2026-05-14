<?php 

require_once "Funcionario.php";

$f1 = new Funcionario();

$f1->nome = "Joao";
$f1->codigo = 1;
$f1->salario = 1000.00;
$f1->cargaHorariaMensal = 220;
$f1->exibirDados();
$f1->aumentarSalario(10);
echo "Novos dados: <br>";
$f1->exibirDados();

$f2 = new Funcionario();

$f2->nome = "Pedro";
$f2->codigo = 2;
$f2->salario = 2000.00;
$f2->cargaHorariaMensal = 240;
$f2->exibirDados();
$f2->aumentarSalario(15);
echo "Novos dados: <br>";
$f2->exibirDados();

$f3 = new Funcionario();

$f3->nome = "Denis";
$f3->codigo = 3;
$f3->salario = 3000.00;
$f3->cargaHorariaMensal = 200;
$f3->exibirDados();
$f3->aumentarSalario(25);
echo "Novos dados: <br>";
$f3->exibirDados();



?>
