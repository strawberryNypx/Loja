<?php
session_start();
?><!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Cadastro de Produto</title>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <div class="container">
        <div class="content">
            <main class="form-signin w-100 m-auto">
                <form class="AdicionarItem" method="post" action="/Projetos/Loja/Functions/Redirect/AdicionarProtudosFuncao.php">
                    <h1 class="h3 mb-3 fw-normal">Cadastro de Produtos</h1>

                    <div class="form-floating">
                        <input name="NomeDoProduto" type="text" class="form-control" id="floatingInput"
                            placeholder="Nome do produto...">
                        <label for="floatingInput">Nome do produto</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input name="Preco" type="number" class="form-control" id="floatingPassword"
                            placeholder="">
                        <label for="floatingPassword">$</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input name="Estoque" type="number" class="form-control" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword">Quantidade
                        </label>
                    </div>
                    <br>
                    <button class="btn btn-primary w-100 py-2" type="submit">Adicionar</button>
                </form>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>