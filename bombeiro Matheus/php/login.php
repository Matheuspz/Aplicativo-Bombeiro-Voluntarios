<?php
    include("../conecta.php");


    $email = $_POST["loginEmail"];
    $senha = $_POST["loginSenha"];

    session_start();

    $comando = $pdo->prepare("SELECT * FROM perfil WHERE email = :email AND senha = :senha");
    $comando->bindParam(':email', $email);
    $comando->bindParam(':senha', $senha);
    $resultado = $comando->execute();

    if ($resultado) {
        $iduser = $comando->fetchColumn();

        if(isset($_POST['rememberMe']))
            {
                setcookie('loginEmail',$_POST['loginEmail'],time() + (60*60*24));
                setcookie('loginSenha',$_POST['loginSenha'],time() + (60*60*24));
            } else {
                setcookie('loginEmail','',time() - (60*60*24));
                setcookie('loginSenha','',time() - (60*60*24));
            }

        if ($iduser) {
            $_SESSION['user'] = $iduser;
            header("Location: ../telas/telaInicial.php");
        } else {
            echo "ERRO";
        }
    }   
?>  