<?php
    session_start();

    // Verifique se o cookie "Lembrar de Mim" existe
    if (isset($_COOKIE["lembrar_de_mim"])) {
        // Exclua o cookie definindo seu tempo de expiração para um valor passado
        setcookie("lembrar_de_mim", "", time() - 3600, "/");
    }
    
    // Destrua a sessão (se existir)
    if (isset($_SESSION["user"])) {
        session_unset();
        session_destroy();
    }
    
    // Redirecione para a página de login ou qualquer outra página após o logout
    header("Location: ../index.php");
    exit();
?>