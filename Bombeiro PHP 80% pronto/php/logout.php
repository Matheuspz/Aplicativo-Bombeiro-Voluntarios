<?php
    session_start();
    include("../conecta.php");

    if (isset($_COOKIE["lembrar_de_mim"])) {
        $email = $_SESSION['email'];
        setcookie("lembrar_de_mim", "", time() - 3600, "/");

        $comando = $pdo->prepare("UPDATE `perfil` SET `token` = '' WHERE `perfil`.`email` = :email");
        $comando->bindParam(':email', $email, PDO::PARAM_STR);
        $resultado = $comando->execute();  
    }
    
    if (isset($_SESSION["user"])) {
        session_unset();
        session_destroy();
    }
    
    // Redirecione para a página de login ou qualquer outra página após o logout
    header("Location: ../index.php");
    exit();
?>