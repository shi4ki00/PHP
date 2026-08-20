<?php

require_once "Data.php";
require_once "Produto.php";
require_once "Cliente.php";
require_once "Vendedor.php";
require_once "ItemPedido.php";
require_once "Pedido.php";

$data = new Data(10, 5, 2020);
echo $data . "<br>";
$data->imprimirDataBanco();
echo "<br>";

$prod1 = new Produto(1, "Notebook", 3500.00);
$prod2 = new Produto(2, "Mouse", 80.00);
$prod1->imprimir();

$cliente = new Cliente("Lucas Silva", "12345678900", "M", 20, 3, 1998, "Tecnologia");
$cliente->imprimir();

$vendedor = new Vendedor("Carlos Santos", "98765432100", "M", 10, 10, 1985, 2000.00, 5.0);
$vendedor->imprimir();

$pedido = new Pedido($cliente, $vendedor, $prod1, 1, $prod1->getValor());
$pedido->adicionarItem($prod2, 2, $prod2->getValor());
$pedido->fecharPedido();
$pedido->imprimirPedidoCompleto();

?>