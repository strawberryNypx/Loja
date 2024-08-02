<?php
session_start();

if(isset( $_POST["email"] ) && isset( $_POST["senha"] )){
    require("../Conexao/Conexao.php");
    
    $conexao = new Conexao();
    
    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);

    $sql = "SELECT * FROM `Usuario` WHERE email = '$email' AND senha = '$senha'";

    $user = $conexao->select($sql);
    $row = $user->fetch_object();
    $qnt = $user->num_rows; 

    if($qnt > 0){
        $consulta = "SELECT `id`, `Email`, `Senha`, `Nome`, `Estado`, `Rua`, `Cep` FROM `Usuario` WHERE email = '$email'";
        $user = $conexao->select($consulta);

        $obj = $user->fetch_object();

        $_SESSION['nome'] = $obj->Nome;
        $_SESSION['id'] = $obj->id;
        $_SESSION['email'] = $email;
        //$_SESSION['senha'] = md5($senha);
        $_SESSION['logado'] = True;
        header('Location: ../../index.php');
 
    }else{
        echo'email ou senha invalidos, por favor tente novamente';
    }
}else{
    echo 'senha e email estao vazios!';
}