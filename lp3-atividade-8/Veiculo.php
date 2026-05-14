<?php

class Veiculo{

 public string $marca, $modelo;
 public int $ano, $qtdeC; 
 public float $csm;


 public function abastecer($litros){
    $this->qtdeC += $litros; 
    return $this->qtdeC;
 }
 public function calcularAutonomia(){
    return $this->qtdeC * $this->csm; 
 }
 public function exibirFormacoes(){
    echo $this->marca . "<br>";
    echo $this->modelo . "<br>";
    echo $this->ano . "<br>";
    echo $this->qtdeC . "<br>";
    echo $this->csm . "<br>";
    echo $this->calcularAutonomia() . "<br> <br>";
 }

}

?>