<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 Atividade 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>

    <div class="container">
        <div class="row">
            <div class="col text-bg-secondary p-3 rounded-4 border border-2 border border-black mt-3  me-3">
                <h1>Sistema de Aprovação Escolar</h1>
                <form action="index.php" method="POST">

                    <div class="mb-3 input-group">
                        <span class="input-group-text" id="basic-addon1">%</span>
                        <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Coloque sua frequencia" name="txtFreq" min="0" max="100" step="0.1" required>
                    </div>
                    <div class="mb-3">
                        <label for="nota1" class="form-label">Coloque sua nota 1</label>
                        <input type="number" class="form-control" id="nota1" placeholder="nota 1" name="txtnota1" min="0" max="10" step="1" required>
                    </div>
                    <div class="mb-3">
                        <label for="nota2" class="form-label">Coloque sua nota 2</label>
                        <input type="number" class="form-control" id="nota2" placeholder="nota 2" name="txtnota2" min="0" max="10" step="1" required>
                    </div>
                    <div class="mb-3">
                        <label for="nota3" class="form-label">Coloque sua nota 3</label>-
                        <input type="number" class="form-control" id="nota3" placeholder="nota 3" name="txtnota3" min="0" max="10" step="1" required>
                    </div>

                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>

                    <?php

                    if (isset($_POST['txtFreq'])) {
                        $freq = $_POST['txtFreq'];


                        if (isset($_POST['txtFreq'])) {
                            $nota1 = $_POST['txtnota1'];
                            $nota2 = $_POST['txtnota2'];
                            $nota3 = $_POST['txtnota3'];


                            if ($freq < 75) {
                    ?>
                                <div class="alert alert-danger d-flex align-items-center mt-3" role="alert" style="height: 54px; pointer-events: none">
                                    <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:" width="26px">
                                        <use xlink:href="#exclamation-triangle-fill" />
                                    </svg>
                                    <div>
                                        <?php echo "Reprovado por faltas"; ?>
                                    </div>
                                </div>

                                <?php

                            } else if ($freq >= 75) {
                                $media = ($nota1 + $nota2 + $nota3) / 3;

                                if ($media >= 7) {
                                ?>
                                    <div class="alert alert-success d-flex align-items-center mt-3" role="alert" style="height: 54px; pointer-events: none">
                                        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:" width="26px">
                                            <use xlink:href="#check-circle-fill" />
                                        </svg>
                                        <div>
                                            <?php echo "Aprovado"; ?>
                                        </div>
                                    </div>



                                <?php
                                } else if ($media < 7 && $media >= 4) {
                                ?>
                                    <div class="alert alert-warning d-flex align-items-center mt-3" role="alert" style="height: 54px; pointer-events: none">
                                        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Warning:" width="26px">
                                            <use xlink:href="#exclamation-triangle-fill" />
                                        </svg>
                                        <div>
                                            <?php echo "Recuperação"; ?>
                                        </div>
                                    </div>

                                <?php
                                } else if ($media < 4) {
                                ?>
                                    <div class="alert alert-danger d-flex align-items-center mt-3" role="alert" style="height: 54px; pointer-events: none">
                                        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:" width="26px">
                                            <use xlink:href="#exclamation-triangle-fill" />
                                        </svg>
                                        <div>
                                            <?php echo "Recuperação por nota"; ?>
                                        </div>
                                    </div>

                    <?php
                                }
                            }
                        }
                    } ?>


                </form>

            </div>

            <div class="col text-bg-secondary p-3 rounded-4 border border-2 border border-black mt-3 ">
                <h1> Calculadora de Tarifas de Energia Elétrica</h1>
                <form action="index.php" method="POST">

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault" value="txtresi" id="radioDefault1" required>
                        <label class="form-check-label" for="radioDefault1">
                            Instalação Residancial
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault" value="txtcomer" id="radioDefault2" required>
                        <label class="form-check-label" for="radioDefault2">
                            Instalação Comercial
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault" value="txtindus" id="radioDefault2" required>
                        <label class="form-check-label" for="radioDefault2">
                            Instalação Industrial
                        </label>
                    </div>

                    <div class="mb-3">
                        <label for="KWh" class="form-label">Coloque quantos KWh foram consumidos</label>-
                        <input type="number" class="form-control" id="KWh" placeholder="KWh" name="txtKWh" min="0" step="1" required>
                    </div>

                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>

                    <?php

                    if (isset($_POST['radioDefault'])) {

                        $instalacao = $_POST['radioDefault'];
                        $kwh = $_POST['txtKWh'];
                        $consumo = 0;

                        if ($instalacao == 'txtresi') {
                            if ($kwh <= 500) {
                                $consumo = $kwh * 0.4;
                            } else if ($kwh > 500) {
                                $consumo = $kwh * 0.6;
                            }
                        } else if ($instalacao == 'txtcomer') {
                            if ($kwh <= 1000) {
                                $consumo = $kwh * 0.55;
                            } else if ($kwh > 1000) {
                                $consumo = $kwh * 0.6;
                            }
                        } else if ($instalacao == 'txtindus') {
                            if ($kwh <= 500) {
                                $consumo = $kwh * 0.55;
                            } else if ($kwh > 500) {
                                $consumo = $kwh * 0.6;
                            }
                        }
                    ?>
                        <div class="alert alert-primary d-flex align-items-center mt-3" role="alert" style="height: 54px; pointer-events: none">
                            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:" width="26px">
                                <use xlink:href="#info-fill" style="font-size: 10px;" />
                            </svg>
                            <div>
                                <?php echo "R$ $consumo"; ?>
                            </div>
                        </div>
                    <?php
                    }

                    ?>

                </form>
            </div>

            <div class="col text-bg-secondary p-3 rounded-4 border border-2 border border-black mt-3 ms-3">

                <h1>Sistema de Descontos para E-commerce</h1>
                <form action="index.php" method="POST">

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault1" value="txtcomum" id="radioDefault1" required>
                        <label class="form-check-label" for="radioDefault1">
                            Cliente Comum
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault1" value="txtvip" id="radioDefault2" required>
                        <label class="form-check-label" for="radioDefault2">
                            Cliente VIP
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault1" value="txtpremium" id="radioDefault2" required>
                        <label class="form-check-label" for="radioDefault3">
                            Cliente Premium
                        </label>
                    </div>

                    <div class="mb-3">
                        <label for="valor" class="form-label">Qual foi o valor da sua compra</label>
                        <input type="number" class="form-control" id="valor" placeholder="Valor" name="txtvalor" min="0" step="1" required>
                    </div>

                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>


                    <?php

                    if (isset($_POST['radioDefault1'])) {
                        $cliente = $_POST['radioDefault1'];
                        $valor = $_POST['txtvalor'];
                        $desconto = 0;
                        $valorfinal = 0;
                        $i = 0;
                    ?>

                        <div class="alert alert-primary d-flex align-items-center mt-3" role="alert" style="height: 54px; pointer-events: none">
                            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:" width="26px">
                                <use xlink:href="#info-fill" style="font-size: 10px;" />
                            </svg>
                            <div>
                                <?php

                                if ($cliente == 'txtcomum') {
                                    if ($valor <= 500) {
                                        $valorfinal = $valor;
                                        echo "O valor total a pagar é: R$ $valor";
                                        $i = 0.05;
                                    } else if ($valor > 500) {
                                        $valorfinal = $valor - ($valor * 0.05);
                                        echo "O valor total a pagar é: R$ $valor";
                                        $i = 0.05;
                                    }
                                } else if ($cliente == 'txtvip') {
                                    $valorfinal = $valor - ($valor * 0.10);
                                    echo "O valor total a pagar é: R$ $valor";
                                        $i = 0.1;
                                    
                                } else if ($cliente == 'txtpremium') {
                                    $valorfinal = $valor - ($valor * 0.15);
                                    echo "O valor total a pagar é: R$ $valor";
                                    $i = 0.15;
                                }
                                ?> </div>
                        </div>
                    
                        <div class="alert alert-primary d-flex align-items-center mt-3" role="alert" style="height: 54px; pointer-events: none">
                            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:" width="26px">
                                <use xlink:href="#info-fill" style="font-size: 10px;" />
                            </svg>
                            <div>
                                <?php if($cliente == 'txtcomum' && $valor <= 500){ echo "Você não possui desconto. ";} echo "O desconto aplicado na compra é: R$" . ($valor * $i); ?>
                            </div>
                        </div>
                            <?php    ?>
                        <div class="alert alert-primary d-flex align-items-center mt-3" role="alert" style="height: 54px; pointer-events: none">
                            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:" width="26px">
                                <use xlink:href="#info-fill" style="font-size: 10px;" />
                            </svg>
                            <div>
                                <?php echo "O valor a pagar é: R$ $valorfinal"; ?>
                            </div>
                        </div>

                        <?php
                        if ($cliente == 'txtpremium') {

                        ?> <div class="alert alert-primary d-flex align-items-center mt-3" role="alert" style="height: 54px; pointer-events: none">
                                <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:" width="26px">
                                    <use xlink:href="#info-fill" style="font-size: 10px;" />
                                </svg>
                                <div>
                                    <?php echo "Frete Grátis"; ?>
                                </div>
                            </div> <?php
                                } else if ($cliente == 'txtvip' && $valor > 1000) {
                                    ?> <div class="alert alert-primary d-flex align-items-center mt-3" role="alert" style="height: 54px; pointer-events: none">
                                <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:" width="26px">
                                    <use xlink:href="#info-fill" style="font-size: 10px;" />
                                </svg>
                                <div>
                                    <?php echo "Frete Grátis"; ?>
                                </div>
                            </div> <?php

                                }
                            }

                                    ?>

                </form>

            </div>
        </div>
    </div>


</body>

</html>