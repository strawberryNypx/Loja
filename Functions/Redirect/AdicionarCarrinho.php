<?php
session_start();
 
//echo "<pre>"; print_r($_SESSION);

/*
if (!isset($_SESSION['id'])) {
    die("ID de sessão não definido.");
}
*/
if (!isset($_GET['id'])) {
    die("ID não fornecido na URL.");
} else {

    if( isset($_GET['quantidade']) && !empty($_GET['quantidade'])) {
        $quantidadeNova = $_GET['quantidade'];
    } else {
        $quantidadeNova = $_SESSION['carrinho'][$_GET['id']]['quantidade'] + 1;
    }

    $_SESSION['carrinho'][$_GET['id']] = array(
        'id'         => $_GET['id'], 
        'quantidade' => $quantidadeNova
    );

    if( isset($_GET['quantidade']) && !empty($_GET['quantidade'])) {
?>
    <script>
        location.href = "/Projetos/Loja/Pages/Carrinho.php";
    </script>
<?php
        exit;
    }
}

//echo "<pre>"; print_r($_SESSION);
/*
if($_SESSION['logado'] == True){
    require("../funcoes.php");

    $funcoes = new funcoes();
    $funcoes->AdicionarItemNoCarrinho($_SESSION['id'],'1', $_GET['id']);
    header("Location: /Projetos/Loja/index.php");

}else{
    echo"<script>alert('Produtos só podem ser adicionados se o usuario estiver logado');</script>";
    header("Location: /Projetos/Loja/index.php");
}
*/
?>