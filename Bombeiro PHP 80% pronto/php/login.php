<?php
    include("../conecta.php");

    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifique as credenciais do usuário (substitua com seu próprio código de autenticação)
        $email = $_POST["loginEmail"];
        $senha = $_POST["loginSenha"];
    
        $comando = $pdo->prepare("SELECT * FROM usuario WHERE email = :email AND senha = :senha");
        $comando->bindParam(':email', $email);
        $comando->bindParam(':senha', $senha);
        $resultado = $comando->execute();

        if ($resultado) {
            $iduser = $comando->fetchColumn();

            if ($iduser) {
                $_SESSION['user'] = $iduser;
                $_SESSION['email'] = $email;

                if(isset($_POST["rememberMe"])) {
                    // Se as credenciais estiverem corretas, crie um cookie "Lembrar de Mim" com um token aleatório
                    $token = bin2hex(random_bytes(16));
    
                    $comando = $pdo->prepare("UPDATE `usuario` SET `token` = :token WHERE `usuario`.`email` = :email");
                    $comando->bindParam(':token', $token, PDO::PARAM_STR);
                    $comando->bindParam(':email', $email, PDO::PARAM_STR);
                    $resultado = $comando->execute();
    
                    setcookie("lembrar_de_mim", $token, time() + 3600 * 24 * 30, "/"); // Defina o cookie para expirar em 30 dias
                    // Redirecione para a página de perfil ou dashboard
    
                    $comando = $pdo->prepare("SELECT id_tipo FROM `usuario` WHERE email = :email;");
                    $comando->bindParam(':email', $email, PDO::PARAM_STR);
                    $comando->execute(); // Executa a consulta

                    // Verifica se a consulta retornou algum resultado
                    if ($comando->rowCount() > 0) {
                        $resultado = $comando->fetch(); // Obtém o resultado da consulta
                        $tipo = $resultado['id_tipo'];

                        // Verifica se a coluna 'tipo' não é igual a 1
                        if ($tipo != 1) {
                            header("Location: ../telas/telaInicial.php");
                        } else {
                            header("Location: ../telas/telaInicialAdmin.php");
                        }
                    }

                    exit();
                } else {/*
                    $comando = $pdo->prepare("SELECT tipo FROM `perfil` WHERE email = :email;");
                    $comando->bindParam(':email', $email, PDO::PARAM_STR);
                    $resultado = $comando->execute();

                    if($resultado =! 1){
                        header("Location: ../telaInicial.php");
                    } else {
                        header("Location: ../telas/telaInicialAdmin.php");  
                    }*/

                }
                
            } else {
                // Credenciais inválidas, exiba uma mensagem de erro
                $erro = "Credenciais inválidas.";
            }

            


        }   
    }

?>  