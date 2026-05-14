<?php 
//classe
class Gato{

    //atributos
    public string $cor, $raca, $sexo, $nome;
    public int $qtdePes, $qtdeOlhos, $dataNascimento;
    public float $peso, $altura;    

    //métodos
    public function miar(){
        echo "Miauu <br>" ;
    }
    public function correr(){
        echo "Corree <br>";
    }
    public function pular(){
        echo $this->nome, " Pulaaa <br>";
    }
    public function brincar(){
        echo "Brincaa <br>";
    }
    public function ronronar(){
        echo "rnrnrn <br>";
    }
    public function olhar(){
        echo "Olha <br>";
    }
    public function rolar(){
        echo "Rolaa <br>";
    }
    

}

?>