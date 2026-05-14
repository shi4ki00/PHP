<?php

require_once "Livro.php";

$l1 = new Livro();
echo "<h1> Livro 1 </h1>";

$l1->titulo = "Capitães da Areia";
$l1->autor = "Jorge Amado";
$l1->qtdePag = 300;
$l1->qtdeEx = 20;
$l1->exibirInformacoes();
$l1->verificarDisponibilidade();
$l1->alterarQuantidadePaginas(320);
$l1->emprestarLivro();
$l1->emprestarLivro();
$l1->devolverLivro();

$l1->emprestarLivro();
$l1->emprestarLivro();$l1->emprestarLivro();
$l1->emprestarLivro();$l1->emprestarLivro();
$l1->emprestarLivro();$l1->emprestarLivro();
$l1->emprestarLivro();$l1->emprestarLivro();
$l1->emprestarLivro();$l1->emprestarLivro();
$l1->emprestarLivro();$l1->emprestarLivro();
$l1->emprestarLivro();$l1->emprestarLivro();
$l1->emprestarLivro();$l1->emprestarLivro();
$l1->emprestarLivro();$l1->emprestarLivro();
$l1->emprestarLivro();
$l1->exibirInformacoes();


$l2 = new Livro();
echo "<h1> Livro 2 </h1>";

$l2->titulo = "Crime e Castigo";
$l2->autor = "Fiódor Dostoiévski";
$l2->qtdePag = 200;
$l2->qtdeEx = 25;
$l2->exibirInformacoes();
$l2->verificarDisponibilidade();
$l2->alterarQuantidadePaginas(250);
$l2->emprestarLivro();
$l2->emprestarLivro();
$l2->devolverLivro();
$l2->exibirInformacoes();

$l3 = new Livro();
echo "<h1> Livro 3 </h1>";

$l3->titulo = "Karaiba";
$l3->autor = "Não sei";
$l3->qtdePag = 100;
$l3->qtdeEx = 15;
$l3->exibirInformacoes();
$l3->verificarDisponibilidade();
$l3->alterarQuantidadePaginas(250);
$l3->emprestarLivro();
$l3->devolverLivro();
$l3->devolverLivro();
$l3->exibirInformacoes();

$l1->compararPaginas($l2);
$l2->compararPaginas($l3);
$l3->compararPaginas($l1);