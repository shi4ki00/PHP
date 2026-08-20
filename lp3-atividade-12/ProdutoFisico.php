<?php

require_once "Produto.php";

class ProdutoFisico extends Produto{

    private float $peso;
    private float $custoFreteFixo;
    private string $dimensoesCxLxA;
    private string $transportadoraParceira;

    public function getPeso(){
        return $this->peso;   
    }
    public function setPeso(float $peso){
        $this->peso = $peso;
    }

    
    public function getCustoFreteFixo(){
        return $this->custoFreteFixo;   
    }
    public function setCustoFreteFixo(float $custoFreteFixo){
        $this->custoFreteFixo = $custoFreteFixo;
    }

    
    public function getDimensoesCxLxA(){
        return $this->dimensoesCxLxA;   
    }
    public function setDimensoesCxLxA(string $dimensoesCxLxA){
        $this->dimensoesCxLxA = $dimensoesCxLxA;
    }


    public function getTransportadoraParceira(){
        return $this->transportadoraParceira;   
    }
    public function setTransportadoraParceira(string $transportadoraParceira){
        $this->transportadoraParceira = $transportadoraParceira;
    }


    public function calcularPrecoVenda(){
    $this->setPrecoBase($this->getPrecoBase() + ($this->custoFreteFixo + ($this->getPrecoBase() * 0.05)));
    return $this->getPrecoBase();

    }

    public function verificarDisponibilidade(){

    if($this->getQtdeEstoque() > 0 && $this->getIsAtivo() == true){
        return true;
    } else {
        return false;
    }
        
    }

    public function calcularVolumeCubico(){
        $dimensoes = explode("x", $this->dimensoesCxLxA);
            return $dimensoes[0] * $dimensoes[1] * $dimensoes[2];
        
    }   

    public function estimarPrazoEntrega(){
        return random_int(3, 10);
    }
} 
?>
