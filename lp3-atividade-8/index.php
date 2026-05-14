<?php 

require_once "Veiculo.php";

$v1 = new Veiculo();
echo "<h1>Carro 1</h1>";
$v1->csm = 2;
$v1->modelo = "Azul";
$v1->marca = "Fusca";
$v1->ano = 2000;
$v1->qtdeC = 20;
$v1->calcularAutonomia();
echo "Informações antes do abastecimento: <br>";
$v1->exibirFormacoes();
$v1->abastecer(5);
echo "Informações depois do abastecimento: <br>";
$v1->exibirFormacoes();

$v2 = new Veiculo();
echo "<h1>Carro 2</h1>";
$v2->csm = 1.5;
$v2->modelo = "Amarelo";
$v2->marca = "Camaro";
$v2->ano = 2005;
$v2->qtdeC = 15;
$v2->calcularAutonomia();
echo "Informações antes do abastecimento: <br>";
$v2->exibirFormacoes();
$v2->abastecer(4);
echo "Informações depois do abastecimento: <br>";
$v2->exibirFormacoes();

$v3 = new Veiculo();
echo "<h1>Carro 3</h1>";
$v3->csm = 1.3;
$v3->modelo = "De Escada";
$v3->marca = "Uno";
$v3->ano = 2004;
$v3->qtdeC = 18;
$v3->calcularAutonomia();
echo "Informações antes do abastecimento: <br>";
$v3->exibirFormacoes();
$v3->abastecer(6);
echo "Informações depois do abastecimento: <br>";
$v3->exibirFormacoes();

?>