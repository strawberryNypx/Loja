<?php
session_start();
require ("../Functions/Includes/Navbar.php");
require('../Functions/funcoes.php');

$funcoes = new funcoes();

?>

<body>
<form action="/Projetos/Loja/Functions/Redirect/CarrinhoFuncao.php" method="post">
    <div class="Container">
        <div class="Contente">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Item</th>
                        <th scope="col">Preco</th>
                        <th scope="col">Excluir</th>
                        <th scope="col">Atualizar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($_SESSION['carrinho'] AS $item) {
                        
                        //print_r($item);

                        $dadosProduto = $funcoes->getProduto($item['id']);

                        //print_r($dadosProduto);
                    
                    ?>
                        <tr>
                            <th scope="row"><input id="quantidade_<?php echo $item['id']; ?>" value="<?php echo $item['quantidade']; ?>" type="number"></th>
                            <td><?php echo $dadosProduto[0]['NomeDoProduto']; ?></td>
                            <td><?php echo $dadosProduto[0]['Preco']; ?></td>
                            <td><a href=""><i class="fa-solid fa-trash" style="color: #a51d2d;"></i></a></td>
                            <td><a href="#null" onclick="atualizarCarrinho(<?php echo $item['id']; ?>)" class="btn-info" ><i class="fa-solid fa-edit  " ></i></a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <input class="btn btn-primary"  type="submit" value="comprar" >
</form>

    <script>
        
        function atualizarCarrinho(id) {
            var quantidade = document.getElementById('quantidade_'+id);

            location.href = "/Projetos/Loja/Functions/Redirect/AdicionarCarrinho.php?id="+id+"&quantidade="+quantidade.value;
        }
    </script>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>