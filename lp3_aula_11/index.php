<?php

require_once "Cliente.php";
require_once "Conta.php";

// Cria objeto cliente
$cli = new Cliente(415, "Jão", "123.456.789-09");

// Cria objeto conta
$conta = new Conta(1234, $cli, 157, 1000, "30/07/2026", 1);

// Exibe dados formatados do objeto conta+cliente
echo "<pre>";
print_r($conta);
echo "</pre>";

// Chama método __toString() de cliente
echo $cli;
echo "<br>";

// Chama método __toString() de conta
echo $conta;

// Imprime o nome existente dentro da classe conta
echo $conta->getTitular()->getNome();