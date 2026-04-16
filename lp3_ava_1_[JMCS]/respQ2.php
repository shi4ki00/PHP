<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação 1</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- Início do seu código PHP aqui --><?php  
            
            $nome = $_GET['txtpesq'];
            $pio = ["Alan Turing","Ada Lovelace","Lamar"];

            if($nome == false){  ?>
                <div class="container mt-3 ">
            <div class="row">
                <div class="card alert alert-info">
                    <h5 class="card-header"><?php echo "Digite um nome para realizar a pesquisa"; ?></h5>
                        <a href="index.php" class="btn btn-primary col-1">Voltar</a>
                    </div>
                </div>
            </div>
        </div><?php } elseif($nome == true){
            if($nome == "Alan Turing" || "Ada Lovelace" || "Lamar"){  ?>
                <div class="container mt-3 ">
            <div class="row">
                <div class="card alert alert-success">
                    <h5 class="card-header"><?php echo "Você pesquisou por $nome. Exibindo resultados..."; ?></h5>
                        <a href="index.php" class="btn btn-primary col-1">Voltar</a>
                    </div>
                </div>
            </div>
        </div><?php } else { ?>
            <div class="container mt-3 ">
            <div class="row">
                <div class="card alert alert-info">
                    <h5 class="card-header"><?php echo "Digite um nome para realizar a pesquisa"; ?></h5>
                        <a href="index.php" class="btn btn-primary col-1">Voltar</a>
                    </div>
                </div>
            </div>
        <?php }} ?>
            



            <!-- Final do seu código PHP aqui -->
        </div>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
