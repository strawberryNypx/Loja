<?php
session_start();
require("../funcoes.php");

if(isset($_POST['NomeDoProduto'])&& isset($_POST['Preco']) && isset($_POST['Estoque'])){

    $NomeDoProduto = $_POST['NomeDoProduto'];
    $Preco = $_POST['Preco'];
    $Estoque = $_POST['Estoque'];

    $funcao = new funcoes();

    $funcao->adicionarProdutos($NomeDoProduto,$Preco,$Estoque);

    header('Location: ../../index.php');
}