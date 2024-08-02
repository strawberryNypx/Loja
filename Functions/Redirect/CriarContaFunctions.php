<?php

require("../funcoes.php");
if(isset($_POST["emailCriar"]) && isset($_POST["senhaCriar"])){
    if(isset($_POST["nome"])){
        if(isset($_POST["estado"]) && isset($_POST["rua"]) && isset($_POST["cep"])){

            $emailCriar = $_POST["emailCriar"];
            $senhaCriar = md5($_POST["senhaCriar"]);
            $nome = $_POST["nome"];
            $estado = $_POST["estado"];
            $rua = $_POST["rua"];
            $cep = $_POST["cep"];
        }
    }
}
   

$funcao = new funcoes();

$funcao->CriarConta($emailCriar,$senhaCriar, $nome, $estado, $rua, $cep);

header("Location: /Projetos/Loja/Pages/LogIn.php");