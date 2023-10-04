<?php
    include("../conecta.php");

/*
    $email = $_POST["loginEmail"];
    $senha = $_POST["loginSenha"];*/

    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifique as credenciais do usuário (substitua com seu próprio código de autenticação)
        $email = $_POST["loginEmail"];
        $senha = $_POST["loginSenha"];
    
        $comando = $pdo->prepare("SELECT * FROM perfil WHERE email = :email AND senha = :senha");
        $comando->bindParam(':email', $email);
        $comando->bindParam(':senha', $senha);
        $resultado = $comando->execute();

        if ($resultado) {
            $iduser = $comando->fetchColumn();
    
            // Se as credenciais estiverem corretas, crie um cookie "Lembrar de Mim" com um token aleatório
            $token = bin2hex(random_bytes(16));
            setcookie("lembrar_de_mim", $token, time() + 3600 * 24 * 30, "/"); // Defina o cookie para expirar em 30 dias
            // Redirecione para a página de perfil ou dashboard
            header("Location: ../telas/telaInicial.php");
            exit();

            if ($iduser) {
                $_SESSION['user'] = $iduser;
            } else {
                // Credenciais inválidas, exiba uma mensagem de erro
                $erro = "Credenciais inválidas.";
            }
        }   
    }

?>  