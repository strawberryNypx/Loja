<?php
session_start();
if (!isset($_SESSION['id'])) {
    die("ID de sessão não definido.");
}
if (!isset($_GET['id'])) {
    die("ID não fornecido na URL.");
}

if($_SESSION['logado'] = True){
    require("../funcoes.php");

    $funcoes = new funcoes();
    $funcoes->AdicionarItemNoCarrinho($_SESSION['id'],1, $_GET['id']);
    header("Location: /Projetos/Loja/index.php");

}else{
    echo"<script>alert('Produtos só podem ser adicionados se o usuario estiver logado');</script>";
    header("Location: /Projetos/Loja/index.php");
}

?>