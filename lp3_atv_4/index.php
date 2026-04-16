<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Atividade 4 - Questão 3</h1>
            <form action="recebeDados.php" method="POST" class="col-4">
                <div class="mb-3">
                    <label for="CboCliente">Tipo Cliente: </label>
                    <select class="form-select" id="CboCliente" name="tipoCliente" required>
                        <option value="">Selecione uma opção</option>
                        <option value="1">Comum</option>
                        <option value="2">Vip</option>
                        <option value="3">Premium</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="txtCompra" class="form-label">Valor</label>
                    <input type="text" class="form-control" id="txtCompra" name="valorCompra" required>
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar campos</button>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>