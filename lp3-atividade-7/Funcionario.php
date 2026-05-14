<?php 
//classe
class Funcionario{

    //atributos
    public string $nome;
    public int $codigo, $cargaHorariaMensal;
    public float $salario;    

    //métodos
    public function calcularSalarioHora(){  
        return $this->salario / $this->cargaHorariaMensal;
    }
    public function aumentarSalario($percentual){
        return $this->salario = $this->salario * (1+ $percentual/100);
    }
    public function exibirDados(){
        echo "Nome: " . $this->nome . "<br>";
        echo "Código: " . $this->codigo . "<br>";
        echo "Carga Horária: " . $this->cargaHorariaMensal . "h<br>";
        echo "Salário p/ Hora: R$ " . number_format($this->calcularSalarioHora(), 2, ',', '.') . "<br>";
        echo "Salário: R$ " . number_format($this->salario, 2, ',', '.') . "<br><br>";   
        }
    

}

?>