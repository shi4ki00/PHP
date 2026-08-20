<?php

require_once 'ProdutoFisico.php';
require_once 'ProdutoDigital.php';

echo "========================<br>";
echo "PRODUTO FÍSICO<br>";
echo "========================<br>";

$livro = new ProdutoFisico(
    1,
    "Livro PHP OO",
    "Livro sobre orientação a objetos",
    100.00,
    10,
    0.8,
    "0.30x0.20x0.05",
    15.00,
    "Correios"
);

echo "Nome: " . $livro->getNome() . "<br>";
echo "Preço Base: R$ " . number_format($livro->getPrecoBase(), 2, ",", ".") . "<br>";

$livro->aplicarDesconto(10);

echo "Preço após desconto: R$ " . number_format($livro->getPrecoBase(), 2, ",", ".") . "<br>";

echo "Preço Final Venda: R$ " . number_format($livro->calcularPrecoVenda(), 2, ",", ".") . "<br>";

echo "Disponível? ";
echo $livro->verificarDisponibilidade() ? "SIM<br>" : "NÃO<br>";

echo "Volume Cúbico: " . $livro->calcularVolumeCubico() . " m³<br>";

echo "Prazo Entrega: " . $livro->estimarPrazoEntrega("38740-000") . " dias<br>";

$livro->baixarEstoque(10);

echo "Estoque após venda: " . $livro->getQuantidadeEstoque() . "<br>";

echo "Status Ativo: ";
echo $livro->getIsAtivo() ? "SIM<br>" : "NÃO<br>";


echo "<br><br>";

echo "========================<br>";
echo "PRODUTO DIGITAL<br>";
echo "========================<br>";

$curso = new ProdutoDigital(
    2,
    "Curso PHP Avançado",
    "Curso completo de PHP",
    150.00,
    0,
    2500,
    "mp4",
    5,
    "https://nuvem.com/download"
);

echo "Nome: " . $curso->getNome() . "<br>";

echo "Preço Base: R$ " . number_format($curso->getPrecoBase(), 2, ",", ".") . "<br>";

echo "Preço Final Venda: R$ " . number_format($curso->calcularPrecoVenda(), 2, ",", ".") . "<br>";

echo "Disponível? ";
echo $curso->verificarDisponibilidade() ? "SIM<br>" : "NÃO<br>";

$link = $curso->gerarLinkExclusivo("aluno123");

echo "Link Gerado:<br>";
echo $link . "<br>";

$curso->revogarAcesso("aluno123");

echo "Acesso revogado com sucesso.<br>";