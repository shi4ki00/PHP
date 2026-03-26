<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <?php
    if (isset($_POST['txtnome'])) {
        $lanche = 20;
        $adc = 0;
        $texto = "";
        $nome = $_POST['txtnome'];
        if (isset($_POST['adicionais'])) {

            $extras = $_POST['adicionais'];

            if (in_array("bacon", $extras)) {
                $adc += 3;
                $texto .= "Tem bacon <br>";
            }
            if (in_array("cheddar", $extras)) {
                $adc += 2.5;
                $texto .= "Tem cheddar <br>";
            }
            if (in_array("cebola", $extras)) {
                $adc += 2;
                $texto .= "Tem cebola <br>";
            }
            if (in_array("extra", $extras)) {
                $adc += 5;
                $texto .= "Tem hamburguer extra <br>";
            }
        } else {
            $texto .= "Sem adicionais";
        }

        $total = $adc + $lanche;

    ?>

        <div class="container mt-3 ">
            <div class="row">
                <div class="card text-bg-success">
                    <h5 class="card-header"><?php echo $nome; ?></h5>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo "Valor total a pagar: R$ $total"; ?></h5>
                        <p class="card-text"><?php echo $texto; ?></p>
                        <a href="index.php" class="btn btn-primary">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } 
    
    if (isset($_GET['txtnumero'])) {
        $numero = $_GET['txtnumero'];
        ?>


    
    <div class="container mt-3">
        <div class="row">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">X</th>
                        <th scope="col">*</th>
                        <th scope="col">Y</th>
                        <th scope="col">Resultado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    
                    for($i = 1;$i <= 10; $i++){

                    $resultado = $i * $numero;
   
                    ?>
                    <tr>
                        <th scope="row"> <?php echo $numero; ?> </th>
                        <td> <?php echo "*"; ?> </td>
                        <td> <?php echo $i; ?> </td>
                        <td> <?php echo $resultado; ?> </td>
                    </tr>
                    <?php }}?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>