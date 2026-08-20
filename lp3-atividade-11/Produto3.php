<?php

abstract class Produto3{

private string $nome; 
private string $descricao;
private bool $isAtivo;
private int $codigo;
private int $qtdeEstoque;
private float $precoBase;

    public function getNome(){
        return $this->nome;   
    }
    public function setNome(string $nome){
        $this->nome = $nome;
    }

    
    public function getDescricao(){
        return $this->descricao;   
    }
    public function setDescricao(string $descricao){
        $this->$descricao = $descricao;
    }

    
    public function getIsAtivo(){
        return $this->isAtivo;   
    }
    public function setIsAtivo(string $isAtivo){
        $this->isAtivo = $isAtivo;
    }


    public function getCodigo(){
        return $this->codigo;   
    }
    public function setCodigo(string $codigo){
        $this->codigo = $codigo;
    }


    public function getQtdeEstoque(){
        return $this->qtdeEstoque;   
    }
    public function setQtdeEstoque(string $qtdeEstoque){
        $this->qtdeEstoque = $qtdeEstoque;
    }


    public function getPrecoBase(){
        return $this->precoBase;   
    }
    public function setPrecoBase(string $precoBase){
        $this->precoBase = $precoBase;
    }


public function adicionarEstoque(int $qtde){

    if($qtde > 0){
        $this->qtdeEstoque += $qtde;
        if($this->isAtivo == false){
            $this->isAtivo = true;
        }
    } else{
        echo "Erro valor nulo ou negativo";
    }

}

public function baixarEstoque(int $qtde){

    if($qtde > 0){
        $this->qtdeEstoque -= $qtde;
        if($this->qtdeEstoque == 0){
            $this->isAtivo = false;
        }
    } else{
        echo "Erro valor nulo ou negativo";
    }
}

public function aplicarDesconto(float $percetual){
    if($percetual > 0 && $percetual <= 0.9 ){
        $this->precoBase * (1 - $percetual);
    }
}

public abstract function calcularPrecoVenda();

public abstract function verificarDisponibilidade();


}

?>
