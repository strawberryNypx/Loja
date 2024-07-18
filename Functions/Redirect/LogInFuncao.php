<?php
if(isset( $_POST["email"] ) && isset( $_POST["senha"] )){
    require("../Conexao/Conexao.php");
    
    $conexao = new Conexao();
    
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM `Usuario` WHERE email = '$email' AND senha = '$senha'";

    $user = $conexao->select($sql);
    $row = $user->fetch_object();
    $qnt = $user->num_rows; 

    if($qnt > 0){
        session_start();
        $id = "SELECT `id` FROM `Usuario` WHERE email = '$email' AND senha = '$senha'";

        $_SESSION['id'] = $id;
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['logado'] = True;
        header('Location: ../../index.php');
        exit();
    }else{
        echo'email ou senha invalidos, por favor tente novamente';
    }
}else{
    echo 'senha e email estao vazios!';
}