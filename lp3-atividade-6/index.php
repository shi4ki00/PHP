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
            <div class="col">
                <h1>Cadastro para Maratona de Programação</h1>
                <form action="recebedados.php" method="POST">
                    <div class="mb-3">
                        <label for="campoNome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="campoNome" name="txtNome" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="campoEmail" class="form-label">Email: </label>
                        <input type="email" class="form-control" id="campoEmail" placeholder="name@example.com" name="txtEmail" required>
                    </div>
                    <label for="catePart">Categoria de Participação: </label>
                    <select class="form-select" id="catePart" name="tipoPartici" required>

                        <option value="">Selecione</option>
                        <option value="Iniciante">Iniciante</option>
                        <option value="Intermediario">Intermediário</option>
                        <option value="Avancado">Avançado</option>
                    </select>

                    <p>Áreas de Interesse:</p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkDefault" name="areas[]" value="Desenvolviimento Web">
                        <label class="form-check-label" for="checkDefault">
                            Desenvolvimento Web
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkChecked" name="areas[]" value="Inteligência Atificial">
                        <label class="form-check-label" for="checkChecked">
                            Inteligência Artificial
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkDefault2" name="areas[]" value="Banco de Dados">
                        <label class="form-check-label" for="checkDefault2">
                            Banco de Dados
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkChecked2" name="areas[]" value="Segurança da Informação">
                        <label class="form-check-label" for="checkChecked2">
                            Segurança da Informação
                        </label>
                    </div>

                    <button type="submit" class="btn btn-success mt-3">Enviar</button>
                    <button type="reset" class="btn btn-warning mt-3">Limpar campos</button>
                </form>
            </div>
            <div class="col-6">
                <h3>Sistema de Consulta de Linguagens de Programação</h3>
                <form action="recebedados2.php" method="GET">
                    <div class="mb-3">
                        <label for="idNome" class="form-label">Linguagem: </label>
                        <input type="text" class="form-control" id="idNome" name="campoNome">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        </div>
    </div>
</body>

</html>