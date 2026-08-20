<?php

require_once "ProdutoFisico.php";
require_once "ProdutoDigital.php";
require_once "Produto2.php";

$p = new Produto2();

$pf = new ProdutoFisico();

$pf->setNome("Notebook Gamer");
$pf->setDescricao("Notebook com RTX 4060");
$pf->setIsAtivo(true);
$pf->setCodigo(1001);
$pf->setQtdeEstoque(15);
$pf->setPrecoBase(4500.00);
$pf->setPeso(2.5);
$pf->setCustoFreteFixo(50.00);
$pf->setDimensoesCxLxA("40x30x5");
$pf->setTransportadoraParceira("Correios");



$pd = new ProdutoDigital();

$pd->setNome("Curso de PHP");
$pd->setDescricao("Curso completo de PHP Orientado a Objetos");
$pd->setIsAtivo(true);
$pd->setCodigo(2001);
$pd->setQtdeEstoque(9999);
$pd->setPrecoBase(199.90);
$pd->setTamanhoArquivosMB(850);
$pd->setFormatoArquivo("ZIP");
$pd->setLimiteDownloads(20);
$pd->setLinksServidorNuvem("https://meuservidor.com/download/");
$pd->setToken("");



echo "<h2>Teste de Polimorfismo</h2>";

echo "<strong>Produto Físico:</strong> " . $pf->getNome() . "<br>";
echo "Preço de venda: R$ " . $pf->calcularPrecoVenda() . "<br><br>";

echo "<strong>Produto Digital:</strong> " . $pd->getNome() . "<br>";
echo "Preço de venda: R$ " . $pd->calcularPrecoVenda() . "<br>";

?>