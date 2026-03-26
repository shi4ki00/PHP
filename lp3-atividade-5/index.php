<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 aitividade 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col text-bg-secondary p-3 rounded-4 border border-2 border border-black mt-3 me-3">
                <h1>Sistema de Pedidos com Adicionais</h1>
                <form action="recebedados.php" method="POST">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Digite seu Nome</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome" name="txtnome" required>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkDefault" name="adicionais[]" value="bacon">
                        <label class="form-check-label" for="checkDefault">
                            Bacon: R$ 3,00
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkChecked" name="adicionais[]" value="cheddar">
                        <label class="form-check-label" for="checkChecked">
                            Cheddar Cremoso: R$ 2,50
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkDefault" name="adicionais[]" value="cebola">
                        <label class="form-check-label" for="checkDefault">
                            Cebola Caramelizada: R$ 2,00
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkChecked" name="adicionais[]" value="extra">
                        <label class="form-check-label" for="checkChecked">
                            Hambúrguer Extra: R$ 5,00
                        </label>
                    </div>

                    <button type="submit" class="btn btn-success mt-3">Enviar</button>
                    <button type="reset" class="btn btn-warning mt-3">Limpar campos</button>

                </form>
            </div>

            <div class="col text-bg-secondary p-3 rounded-4 border border-2 border border-black mt-3 ms-3">
                <h1>Gerador de Tabuada Dinâmica</h1>
                <form action="recebedados.php" method="GET">

                    <div class="mb-3">
                        <label for="numero" class="form-label">Digite um valor</label>
                        <input type="number" class="form-control" id="numero" placeholder="Numero" name="txtnumero" min="0" max="50" step="1" required>
                    </div>

                    <button type="submit" class="btn btn-success mt-3">Enviar</button>
                    <button type="reset" class="btn btn-warning mt-3">Limpar campos</button>

                </form>
            </div>
        </div>
    </div>

</body>

</html>