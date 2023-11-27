<?php
    session_start();
    include("../conecta.php");

    if (isset($_COOKIE["lembrar_de_mim"])) {
        $idUser = $_SESSION['user'];
        setcookie("lembrar_de_mim", "", time() - 3600, "/");

        $comando = $pdo->prepare("UPDATE `usuario` SET `token`=NULL WHERE `id_usuario` = :idUser");
        $comando->bindParam(':idUser', $idUser, PDO::PARAM_STR);
        $resultado = $comando->execute();
    }

    if (session_status() == PHP_SESSION_ACTIVE && isset($_SESSION["user"])) {
        session_unset();
        session_destroy();
    }

    // Redirecione para a página de login ou qualquer outra página após o logout
    header("Location: ../index.php");
    exit();
?>
