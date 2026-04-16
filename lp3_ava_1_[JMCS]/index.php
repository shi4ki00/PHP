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
            <!-- Início do seu código PHP aqui -->
            <div class="col">
                    <h1>Fomulário de Incrição para Evento Geek</h1>
                <form action="respQ1.php" method="POST" >

                    <div class="mb-3">
                        <label for="campoNome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="campoNome" name="txtNome" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="campoEmail" class="form-label">Email: </label>
                        <input type="email" class="form-control" id="campoEmail" placeholder="name@example.com" name="txtEmail" required>
                    </div>

                    <h6 class="mb-3">Perfil do Participante</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault" value="Professor" id="radioDefault1" required>
                        <label class="form-check-label" for="radioDefault1">
                            Professor
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault" value="Estudante" id="radioDefault2" required>
                        <label class="form-check-label" for="radioDefault2">
                            Estudante
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="radioDefault" value="Competidor" id="radioDefault3" required>
                        <label class="form-check-label" for="radioDefault3">
                            Competidor
                        </label>
                    </div>

                    <h6 class="mb-3">Tamanho da Camisa</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault2" value="P" id="1radioDefault1" required>
                        <label class="form-check-label" for="1radioDefault1">
                            P
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault2" value="M" id="2radioDefault2" required>
                        <label class="form-check-label" for="2radioDefault2">
                            M
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault2" value="G" id="3radioDefault3" required>
                        <label class="form-check-label" for="3radioDefault3">
                            G
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault2" value="GG" id="4radioDefault4" required>
                        <label class="form-check-label" for="4radioDefault4">
                            GG
                        </label>
                    </div>

                    <h6 class="mb-3">Workshops</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkDefault" name="work[]" value="DL">
                        <label class="form-check-label" for="checkDefault">
                            Desenvolvimento com Laravel
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkChecked" name="work[]" value="EB">
                        <label class="form-check-label" for="checkChecked">
                            Estilização com Bootstrap
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="1checkDefault" name="work[]" value="LJ">
                        <label class="form-check-label" for="1checkDefault">
                            Lógica com Javascript
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="2checkChecked" name="work[]" value="HC">
                        <label class="form-check-label" for="2checkChecked">
                            Hístoria da Computação
                        </label>
                    </div>



                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>

                </form>

            </div>

            <div class="col">

                <form action="respQ2.php" method="GET" >
                    <h1>Sistema de Busca de Personalidades Históricas</h1>
                    <div class="mb-3">
                        <label for="pesquisa" class="form-label">Nome de uma figura importante</label>
                        <input type="text" class="form-control" id="pesquisa" name="txtpesq"></input>
                    </div>

                    <button type="submit" class="btn btn-success">Pesquisar</button>

                </form>

            </div>

            <!-- Final do seu código PHP aqui -->
        </div>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>