<?php
session_start();

echo "<pre>";

$_SESSION = array();
unset($_SESSION);

//print_r($_SESSION);
?>

<script>
    location.href = "LogIn.php";
</script>