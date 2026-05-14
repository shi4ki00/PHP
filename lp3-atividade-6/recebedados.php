<?php

$nome = $_POST['txtNome'];
$area = $_POST['areas'] ?? [];
$email = $_POST['txtEmail'];
$participante = $_POST['tipoPartici'];


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
            <div class="col-6">
                <div class="card mt-3">
                    <div class="card-header">Participante</div>
                    <div class="card-body">
                        <p>Nome: <?= $nome ?></p>
                        <p>E-mail: <?= $email ?></p>
                        <p>Participante: <?= $participante ?></p>
                        <ul>
                            <?php foreach($area as $item) { ?>
                                <li><?= $item ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="index.php" class="btn btn-secondary">Voltar</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</body>
</html>