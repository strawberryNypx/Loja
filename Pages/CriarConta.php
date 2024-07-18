<?php
session_start();
?><!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="Style/index.css">
  <title>Criar Conta</title>
</head>
<style>
    .ContainerCriarConta{
        margin-left: 40%;
        max-width: 50%;
        min-width: 20%;
        max-height: 50%;
        min-height: 20%;
    }
</style>
<body class="d-flex align-items-center py-4 bg-body-tertiary"></body>
    <div class="ContainerCriarConta">
        <div class="Contante">
            <main class="form-signin w-100 m-auto">
                <form method="post" action="../Functions/Redirect/CriarContaFunctions.php">
                    <h1 class="h3 mb-3 fw-normal">Create Account</h1>

                    <div class="form-floating">
                    <input name="emailCriar" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                    </div>
                    <br>
                    <div class="form-floating">
                    <input name="senhaCriar" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    </div>
                    <br>
                    <div class="form-floating">
                    <input name="nome" type="text" class="form-control" id="floatingPassword" placeholder="Nome">
                    <label for="floatingPassword">Nome</label>
                    </div>
                    <br>
                    <div class="form-floating">
                    <input name="cpf" type="text" class="form-control" id="floatingPassword" placeholder="CPF">
                    <label for="floatingPassword">CPF</label>
                    </div>
                    <br>
                    <div class="form-floating">
                    <input name="estado" type="text" class="form-control" id="floatingPassword" placeholder="Estado">
                    <label for="floatingPassword">Estado</label>
                    </div>
                    <br>
                    <div class="form-floating">
                    <input name="rua" type="text" class="form-control" id="floatingPassword" placeholder="Nome da rua">
                    <label for="floatingPassword">Nome da rua</label>
                    </div>
                    <br>
                    <div class="form-floating">
                    <input name="cep" type="text" class="form-control" id="floatingPassword" placeholder="CEP">
                    <label for="floatingPassword">CEP</label>
                    </div>
                    <br>
                    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-body-secondary">Caso já tenha conta aperte <a href="/Projetos/Loja/Pages/LogIn.php">aqui</a></p>
                </form>
            </main>
        </div>
    </div>

<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>