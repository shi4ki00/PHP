<?php
$nome = $_GET['campoNome'];
$vetorBusca = ["PHP", "Python", "Java", "JavaScript"];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            
            <?php if (empty($nome)) { ?>
                <div class="alert alert-info mt-3">Informe uma linguagem para realizar a busca.</div>
            <?php } else { ?>
                <?php if (in_array($nome, $vetorBusca)) { ?>
                    <div class="alert alert-success mt-3">Você pesquisou por: <?= $nome ?>. Linguagem encontrada na base de dados!</div>
                <?php } else { ?>
                    <div class="alert alert-warning mt-3">Linguagem não encontrada.</div>
            <?php }
            } ?>
            
            <a href="index.php" class="btn btn-secondary mt-3">Voltar</a>
        </div>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>