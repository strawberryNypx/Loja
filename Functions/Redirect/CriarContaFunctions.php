<?php

require("../funcoes.php");
if(isset($_POST["emailCriar"]) && isset($_POST["senhaCriar"])){
    if(isset($_POST["nome"]) && isset($_POST["cpf"])){
        if(isset($_POST["estado"]) && isset($_POST["rua"]) && isset($_POST["cep"])){

            $emailCriar = $_POST["emailCriar"];
            $senhaCriar = $_POST["senhaCriar"];
            $nome = $_POST["nome"];
            $cpf = $_POST["cpf"];
            $estado = $_POST["estado"];
            $rua = $_POST["rua"];
            $cep = $_POST["cep"];
        }
    }
}
   

$funcao = new funcoes();

$funcao->CriarConta($emailCriar,$senhaCriar, $nome, $cpf, $estado, $rua, $cep);

header("Location: /Projetos/Loja/Pages/LogIn.php");