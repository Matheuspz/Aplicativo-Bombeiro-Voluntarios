<?php
    include("../conecta.php");

    $email = $_POST["loginEmail"];
    $senha = $_POST["loginSenha"];

    session_start();

    $comando = $pdo->prepare("SELECT * FROM perfil WHERE email = :email AND senha = :senha" );
    $comando->bindParam(':email', $email);
    $comando->bindParam(':senha', $senha);
    $resultado = $comando->execute();

    if ($resultado) {
        $iduser = $comando->fetchColumn();
    
        if ($iduser) {
            $_SESSION['user'] = $iduser;
            header("Location: ../php/bombeiro.php");
        } else {
            echo "ERRO";
        }
    }   
?>  