<?php

class Livro{

    public string $titulo, $autor;
    public int $qtdePag, $qtdeEx; 

    public function emprestarLivro(){
        if($this->qtdeEx > 0){
            return $this->qtdeEx = $this->qtdeEx - 1;
        } else {
            return "Não existem mais livros no estoque";
        }
    }
    public function devolverLivro(){
        return $this->qtdeEx = $this->qtdeEx + 1; 
    }
    public function verificarDisponibilidade(){
        if($this->qtdeEx > 0){
            return "Existem ". $this->qtdeEx ." livros disponiveis";
        }
    }
    public function alterarQuantidadePaginas($novaQuantidade){
        return $this->qtdePag = $novaQuantidade;
    }
    public function exibirInformacoes(){
    echo $this->titulo . "<br>";
    echo $this->autor . "<br>";
    echo $this->qtdeEx . "<br>";
    echo $this->qtdePag . "<br>";
    }
    public function compararPaginas(Livro $outroLivro){
        if($this->qtdePag == $outroLivro->qtdePag){
            echo "Os livros tem a mesma quantidade de paginas: ". $this->qtdePag. "<br>";
        } else {
            echo "Os livros tem a quantidade de páginas diferentes: ". $this->titulo.": ".$this->qtdePag .", " . $outroLivro->titulo.": ". $outroLivro->qtdePag. "<br>";
        }

    }
}

