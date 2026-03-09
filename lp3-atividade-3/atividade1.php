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
                <h1>Calculadora de Índice de Massa Corpórea (IMC)</h1>
                <form action="atividade1.php" method="POST">

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Coloque seu peso</label>
                        <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Peso" name="txtPeso" min="0" step="0.1" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Coloque sua altura</label>
                        <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Altura" name="txtAltura" min="0" step="0.01" required>
                    </div>

                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>


                    <?php

                    if (isset($_POST['txtPeso'])) {
                        $peso = $_POST['txtPeso'];


                        if (isset($_POST['txtAltura'])) {
                            $altura = $_POST['txtAltura'];


                            if ($altura == 0) {
                    ?>
                                <div class="alert alert-danger d-flex align-items-center mt-3" role="alert" style="height: 54px; pointer-events: none">
                                    <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:" width="26px">
                                        <use xlink:href="#exclamation-triangle-fill" />
                                    </svg>
                                    <div>
                                        <?php echo "Erro, divisão por 0"; ?>
                                    </div>
                                </div><?php

                                    } else {
                                        $imc = ($peso / ($altura * $altura));


                                        if (isset($_POST['txtPeso'])) {
                                            if ($imc < 18) {
                                        ?>

                                        <div class="alert alert-warning d-flex align-items-center mt-3" role="alert" style="height: 54px; pointer-events: none">
                                            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Warning:" width="26px">
                                                <use xlink:href="#exclamation-triangle-fill" />
                                            </svg>
                                            <div>

                                            <?php
                                            } else if ($imc >= 18.5 && $imc <= 25) {


                                            ?>
                                                <div class="alert alert-success d-flex align-items-center mt-3" role="alert" style="height: 54px; pointer-events: none">
                                                    <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:" width="26px">
                                                        <use xlink:href="#check-circle-fill" />
                                                    </svg>
                                                    <div>



                                                    <?php   } else if ($imc > 25 && $imc <= 30) {  ?>

                                                        <div class="alert alert-warning d-flex align-items-center mt-3" role="alert" style="height: 54px; pointer-events: none">
                                                            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Warning:" width="26px">
                                                                <use xlink:href="#exclamation-triangle-fill" />
                                                            </svg>
                                                            <div>


                                                            <?php    } else if ($imc > 30 && $imc <= 40) { ?>

                                                                <div class="alert alert-warning d-flex align-items-center mt-3" role="alert" style="height: 54px; pointer-events: none">
                                                                    <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Warning:" width="26px">
                                                                        <use xlink:href="#exclamation-triangle-fill" />
                                                                    </svg>
                                                                    <div>


                                                                    <?php } else if ($imc > 40) { ?>

                                                                        <div class="alert alert-danger d-flex align-items-center mt-3" role="alert" style="height: 54px; pointer-events: none">
                                                                            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:" width="26px">
                                                                                <use xlink:href="#exclamation-triangle-fill" />
                                                                            </svg>
                                                                            <div>


                                                                            <?php
                                                                        }

                                                                        if ($imc < 18.5) {
                                                                            echo "Você está abaixo do peso";
                                                                        } else if ($imc >= 18.5 && $imc <= 25) {
                                                                            echo "Você está com o peso ideal";
                                                                        } else if ($imc > 25 && $imc <= 30) {
                                                                            echo "Você está com sobrepeso";
                                                                        } else if ($imc > 30 && $imc <= 40) {
                                                                            echo "Você está obeso";
                                                                        } else if ($imc > 40) {
                                                                            echo "Você está com obesidade mórbita";
                                                                        }


                                                                            ?>
                                                                            </div>
                                                                        </div>

                                                        <?php }
                                                }
                                            }
                                        } ?>
                </form>
            </div>



            <div class="col text-bg-secondary p-3 rounded-4 border border-2 border border-black mt-3 ">
                <h1>Sistema de Faturamento de Locadora de Veículos</h1>
                <form action="atividade1.php" method="POST">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault" value="txtpopular" id="radioDefault1" required>
                        <label class="form-check-label" for="radioDefault1">
                            Popular
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault" value="txtluxo" id="radioDefault2" required>
                        <label class="form-check-label" for="radioDefault2">
                            Luxo
                        </label>
                    </div>



                    <div class="mb-3">
                        <label for="kmsPercorridos" class="form-label">Coloque quantos Km você percorreu com o carro</label>
                        <input type="number" class="form-control" id="kmsPercorridos" placeholder="Km" name="txtkm" min="0" required>
                    </div>
                    <div class="mb-3">
                        <label for="diasPercorridos" class="form-label">Coloque quantos dias você percorreu com seu carro</label>
                        <input type="number" class="form-control" id="diasPercorridos" placeholder="Dias" name="txtdias" min="0" required>
                    </div>

                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>

                    <?php
                    if (isset($_POST['radioDefault'])) {

                        $tipoDeCarro = $_POST['radioDefault'];
                        $km = $_POST['txtkm'];
                        $dias = $_POST['txtdias'];
                        $valorTotal = 0;
                        $kms = 0;
                        if ($tipoDeCarro == 'txtpopular') {
                            if ($km <= 100) {
                                $kms = 0.2 * $km;
                            } else if ($km > 100) {
                                $kms = 0.1 * $km;
                            }

                            $valorTotal = ($kms + ($dias * 90));
                        } else if ($tipoDeCarro == 'txtluxo') {
                            if ($km <= 200) {
                                $kms = 0.3 * $km;
                            } else if ($km > 200) {
                                $kms = 0.25 * $km;
                            }

                            $valorTotal = ($kms + ($dias * 150));
                        }
                    }

                    ?>

                    <?php if (isset($_POST['txtdias'])) {
                    ?>

                        <div class="alert alert-primary d-flex align-items-center mt-3" role="alert" style="height: 54px; pointer-events: none">
                            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:" width="26px">
                                <use xlink:href="#info-fill" style="font-size: 10px;" />
                            </svg>
                            <div>


                                <?php
                                if (isset($_POST['txtdias'])) {
                                    echo "O valor total a pagar é R$ $valorTotal";
                                }
                                ?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>


                </form>
            </div>



            <div class="col text-bg-secondary p-3 rounded-4 border border-2 border border-black mt-3  ms-3">
                <h1>Calculadora de Recompensas do Programa Vida Saudável</h1>

                <form action="atividade1.php" method="POST">

                    <div class="mb-3">
                        <label for="horasnoMes" class="form-label">Coloque quantas horas de atividade física você fez no mês</label>
                        <input type="number" class="form-control" id="horasnoMes" placeholder="Horas" name="txthoras" required min="0">
                    </div>

                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>

                    <?php

                    if (isset($_POST['txthoras'])) {
                        $horas = $_POST['txthoras'];
                        $pontos = 0;
                        $money = 0;

                        if ($horas < 10) {
                            $pontos = $horas * 2;
                        } else if ($horas >= 10 && $horas < 20) {
                            $pontos = $horas * 5;
                        } else if ($horas >= 20) {
                            $pontos = $horas * 10;
                        }

                        $money = $pontos * 0.05;
                    }



                    if (isset($_POST['txthoras'])) {
                    ?>
                        <div class="alert alert-primary d-flex align-items-center mt-3" role="alert" style="height: 54px; pointer-events: none">
                            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:" width="26px">
                                <use xlink:href="#info-fill" style="font-size: 10px;" />
                            </svg>
                            <div>
                                <?php


                                if (isset($_POST['txthoras'])) {
                                    echo "O total de pontos feitos foi: $pontos";
                                }
                                ?>
                            </div>
                        </div>


                    <?php
                    }
                    if (isset($_POST['txthoras'])) {
                    ?>
                        <div class="alert alert-success d-flex align-items-center mt-3" role="alert" style="height: 54px; pointer-events: none">
                            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:" width="26px">
                                <use xlink:href="#check-circle-fill" />
                            </svg>
                            <div>
                                <?php


                                if (isset($_POST['txthoras'])) {
                                    echo "O total ganho em dinehiro foi: $money";
                                }
                                ?>
                            </div>
                        </div>
                    <?php  } ?>
                </form>
            </div>
        </div>
    </div>



</body>

</html>