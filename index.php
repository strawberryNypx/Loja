<?php
session_start();
include("Functions/Includes/Navbar.php");
require('Functions/funcoes.php');

$funcoes = new funcoes();
$Lista = $funcoes->listarPordutos();
?>

<body>
    <div class="Container">
        <main>
            <div class="album py-5 bg-body-tertiary">
                <div class="container">

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <?php
                            if($Lista){
                                foreach($Lista AS $i){
                        ?>
                                    <div class="col">
                                        <div class="card shadow-sm">
                                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                                <title>Placeholder</title>
                                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                                    fill="#eceeef" dy=".3em"></text>
                                            </svg>
                                            <div class="card-body">
                                                <p class="card-text"><?php $i["id"]; echo $i['NomeDoProduto'];?></p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                    <button type="button" class="btn btn-outline-primary" onclick="window.location.href='/Projetos/Loja/Functions/Redirect/AdicionarCarrinho.php?id=<?php echo $i['id']?>'"><i class="fa-solid fa-cart-plus"></i></button>

                                                    </div>
                                                    <text class="text-body-secondary">R$ <?php $i["id"]; echo $i['Preco'];?></>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    <?php       }
                            }?>
                    </div>
                </div>
            </div>

        </main>

        <footer class="text-body-secondary py-5">
            <div class="container">
                <p class="float-end mb-1">
                    <a href="#">Back to top</a>
                </p>
                <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!
                </p>
                <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a
                        href="/docs/5.3/getting-started/introduction/">getting started guide</a>.</p>
            </div>
        </footer>
    </div>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>