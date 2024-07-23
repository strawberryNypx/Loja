<?php
session_start();
if($_SESSION['logado'] == True){
    header('Location: /Projetos/Loja/index.php');
}else{
    header('Location: /Projetos/Loja/Pages/LogIn.php');}
?>