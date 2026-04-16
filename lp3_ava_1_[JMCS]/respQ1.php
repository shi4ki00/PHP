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
            
            
            if (isset($_POST['txtNome'])) {
            $nome = $_POST['txtNome'];
            $email = $_POST['txtEmail'];
            $perfil = $_POST['radioDefault'];
            $texto = "";
            $texto2 = "";
            $texto3 = "";
            $texto4 = "";
            $tamanho = $_POST['radioDefault2'];

        if (isset($_POST['work'])) {

            $works = $_POST['work'];

            if (in_array("DL", $works)) {
                $texto = "Desenvolvimento com Laravel <br>";
            } else 
            $texto = false;
            if (in_array("EB", $works)) {
                $texto2 = "Estilização com Bootstrap <br>";
            }
            if (in_array("LJ", $works)) {
                $texto3 = "Lógica com Javascript <br>";
            }
            if (in_array("HC", $works)) {
                $texto4 = "Hístoria da Computação <br>";
            }
        } else {
            $texto .= "Não foi escolhido nenhum Workshop";
        }


    ?>

        <div class="container mt-3 ">
            <div class="row">
                <div class="card text-bg-success">
                    <h5 class="card-header"><?php echo "Boas vindas $nome"; ?></h5>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo "Email: $email"; ?></h5>
                        <p class="card-text"><?php echo "Perfil: $perfil"; ?></p>
                        <p class="card-text"><?php echo "Tamanho da Camisa: $tamanho;" ?></p>
                        <table class="table table-striped table-hover text-center">
                        
                            <ul>
                                <?php if($texto != "") {?>
                                <li><?= $texto?></li>
                                <?php }if($texto2 != "") {?>
                                <li><?= $texto2?></li>
                                <?php }if($texto3 != "") {?>
                                <li><?= $texto3?></li>
                                <?php }if($texto4 != "") {?>
                                <li><?= $texto4?></li>
                                <?php }?>
                            </ul>
                        
                    </table>
                        <a href="index.php" class="btn btn-primary">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    
        
            



            <!-- Final do seu código PHP aqui -->
        </div>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
