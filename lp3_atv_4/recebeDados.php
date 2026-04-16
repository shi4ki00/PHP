<?php
// Pega dados enviados da index
$tipo = $_POST['tipoCliente'];
$valor = $_POST['valorCompra'];
// Cria variáveis auxiliares 
$valorComDesconto = 0;
$bagde = false;
// Regras de negócio
if ($tipo == 1 && $valor < 500) {
    $valorComDesconto = $valor;
} elseif ($tipo == 1 && $valor >= 500) {
    $valorComDesconto = $valor * 0.95;
} elseif ($tipo == 2) {
    $valorComDesconto = $valor * 0.90;
    if ($valor >= 1000)
        $bagde = true;
} elseif ($tipo == 3) {
    $valorComDesconto = $valor * 0.85;
    $bagde = true;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-4 mt-3">
                <div class="card">
                    <div class="card-header">
                        Detalhes da compra
                    </div>
                    <div class="card-body">
                        <p class="card-text">Valor compra: <?= $valor ?></p>
                        <h5 class="card-title">Valor com desconto: <?= $valorComDesconto ?></h5>
                        <?php
                        if ($bagde)
                            echo "<span class='badge text-bg-success'>Frete gratis</span>";
                        ?>
                    </div>
                    <div class="card-footer">
                        <a href="index.php" class="btn btn-secondary btn-sm">Voltar</a>
                    </div>
                </div>
            </div>




        </div>
    </div>

</body>

</html>