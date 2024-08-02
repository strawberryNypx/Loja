<?php
session_start();
 
if (!isset($_GET['id'])) {
    die("ID não fornecido na URL.");
} else {

     

    $_SESSION['carrinho'][$_GET['id']] = '';
    unset($_SESSION['carrinho'][$_GET['id']]);

    ?>
    <script>
        location.href = "/Projetos/Loja/Pages/Carrinho.php";
    </script>
<?php
        exit;
    
}


 
?>