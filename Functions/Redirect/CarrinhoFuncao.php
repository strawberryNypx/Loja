<?php
session_start();
require('../funcoes.php');

//echo "<pre>"; print_r($_SESSION);

if(isset($_SESSION['id']) && !empty($_SESSION['id']) ){
    //echo $_SESSION['logado'] ;
    

    $userid = $_SESSION['id'];
    foreach($_SESSION['carrinho'] AS $car) {
        $idDoProduto          = $car['id'];
        $quantidadeDoProdutos = $car['quantidade'];
        
        $funcoes = new Funcoes();
        $funcoes->FinalizarCompra($userid , $idDoProduto ,$quantidadeDoProdutos);
    } 

    $_SESSION['carrinho'] = '';
    unset($_SESSION['carrinho']);
    // header('Location: /Projetos/Loja/index.php');
} else {
    header('Location: /Projetos/Loja/Pages/LogIn.php');
}
?>