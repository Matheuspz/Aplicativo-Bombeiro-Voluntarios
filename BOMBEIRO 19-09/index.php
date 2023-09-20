<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bombeiro</title>
    <link rel="stylesheet" href="index.css">
    <script src="js/index.js"></script>
</head>

<body>
    <div class="diagonal">
        <div class="centro"><img src="img/logo_grande.png" class="img">
            <div class="login">
                <div class="texto1">LOGIN</div>

                <form name="loginForm" action="php/login.php" method="post">
                    <input type="text" name="loginEmail" placeholder="Insira seu E-mail" class="inform" id="loginEmail" required>
                    <div class="linha"></div>
                    <input type="password" name="loginSenha" placeholder="Insira sua Senha" class="inform" id="loginSenha" required>
                    <div class="linha"></div>
                    <button type="submit" class="button">ENTRAR</button>
                </form>                
            </div>
        </div>

    </div>

</body>

</html>