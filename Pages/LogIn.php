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

  <link rel="stylesheet" href="Style/index.css">
  <title>Login</title>
</head>
<style>
  .ContainerLogin {
    margin-top: 10%;
    margin-left: 40%;
    max-width: 50%;
    min-width: 20%;
    max-height: 50%;
    min-height: 20%;
  }
</style>

<!-- area de login --------------------------------------------------------------------------------->

<?php
if ($_SESSION["logado"] != "True") {
  ?>

<body class="d-flex align-items-center py-4 bg-body-tertiary"></body>
<div class="ContainerLogin">
  <div class="ContanteLogin">
    <main class="form-signin w-100 m-auto">
      <form method="post" action="../Functions/Redirect/LogInFuncao.php">
        <h1 class="h3 mb-3 fw-normal">Entrar</h1>

        <div class="form-floating">
          <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <br>
        <div class="form-floating">
          <input name="senha" type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <br>
        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-body-secondary">Caso não tenha conta aperte <a
            href="/Projetos/Loja/Pages/CriarConta.php">aqui</a></p>
      </form>
    </main>
  </div>
</div>
<?php
} else {
  ?>


<!-- caso esteja logado ----------------------------------------------------------------------->


<body>
  <?php require ("../Functions/Includes/Navbar.php"); ?>


  <div class="container">
    <div class="Contante">
      <div class="row g-5">
        <!-- Historico de compras ------------------------------------------------------------------------->
        <div class="col-md-5 col-lg-4 order-md-last">
          <br>
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Historico de compras</span>
            <span class="badge bg-primary rounded-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Product name</h6>
                <small class="text-body-secondary">Brief description</small>
              </div>
              <span class="text-body-secondary">$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Second product</h6>
                <small class="text-body-secondary">Brief description</small>
              </div>
              <span class="text-body-secondary">$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Third item</h6>
                <small class="text-body-secondary">Brief description</small>
              </div>
              <span class="text-body-secondary">$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">−$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$20</strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <button type="submit" class="btn btn-secondary">Redeem</button>
            </div>
          </form>
        </div>
        <!-- FIM HISTORICO ------------------------------------------------------------------------------->
        <div class="col-md-7 col-lg-8">

          <div class="py-5 text-center">
            <h2>Seja bem vindo <?php echo $_SESSION['nome']?>  ;)</h2>
          </div>

          <h4 class="mb-3">Informações da Conta</h4>
         
            <div class="row g-3">
              <div class="col-sm-12">
                <label for="firstName" class="form-label">Nome</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="<?php echo $_SESSION['nome']?>" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>

              <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" value="<?php echo $_SESSION['email']?>" id="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>




              

              

            </div>



            <br>
            <a class="w-100 btn btn-danger btn-lg" href="logout.php" >Sair</a>

        </div>
      </div>
      </main>

      <footer class="my-5 pt-5 text-body-secondary text-center text-small">
        <p class="mb-1">&copy; 2017–2024 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>
  </div>



  <?php }
?>
  <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>