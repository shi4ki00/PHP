<?php 

require_once "Gato.php";

$g1 = new Gato();

$g1->nome = "Roberto";
$g1->peso = 10;

echo "<pre>";
print_r($g1);

$g2 = new Gato();

$g2->nome = "Denis";

print_r($g2);


$g1->miar();
$g2->correr();
$g1->pular();


?>