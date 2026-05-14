<?php

class Livro{

    public string $titulo, $autor;
    public int $qtdePag, $qtdeEx; 

    public function emprestarLivro(){
        if($this->qtdeEx > 0){
             $this->qtdeEx = $this->qtdeEx - 1;
        } else {
            echo "Os exemplares acabram <br>";
        }
    }
    public function devolverLivro(){
         $this->qtdeEx = $this->qtdeEx + 1; 
    }
    public function verificarDisponibilidade(){
        if($this->qtdeEx > 0){
            echo "Existem ". $this->qtdeEx ." livros disponiveis <br>";
        } else {
            echo "não existem exemplares disponiveis <br>";
        }
    }
    public function alterarQuantidadePaginas(int $novaQuantidade){
         $this->qtdePag = $novaQuantidade;
    }
    public function exibirInformacoes(){
    echo $this->titulo . "<br>";
    echo $this->autor . "<br>";
    echo $this->qtdePag . "<br>";
    echo $this->qtdeEx . "<br>";
    }
    public function compararPaginas(Livro $outroLivro){
        if($this->qtdePag == $outroLivro->qtdePag){
            echo "Os livros tem a mesma quantidade de paginas: ". $this->qtdePag. "<br>";
        } else {
            echo "Os livros tem a quantidade de páginas diferentes: ". $this->titulo.": ".$this->qtdePag .", " . $outroLivro->titulo.": ". $outroLivro->qtdePag. "<br>";
        }

    }
}

