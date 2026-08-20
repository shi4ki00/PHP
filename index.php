<?php 

require_once "Desktop.php";

$pc1 = new Desktop("Acer", 1234, 3.4, "Pc da Nasa");

$pc2 = new Desktop("Lenovo", 4312, 1.2, "Pc da Mary");

$pc3 = new Desktop("Predator", 4312, 1.2, "Pc do Denis");

echo "Total: " . Computador::GET_QTDE();

echo "Frequência: " . Desktop::GET_FREQUENCIA();

$vetor = [
    [2,4],
    [5,3],
    [6,2]
];

$total = 0;

foreach($vetor as $item) {
    $total += $item[0] * $item[1];
}

echo "<br>Total: " . $total;