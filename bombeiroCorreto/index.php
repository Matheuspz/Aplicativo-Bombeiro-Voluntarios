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

                <form name="loginForm" action="#" method="post" onsubmit="return lValidar();">
                    <input type="text" name="loginEmail" placeholder="Insira seu E-mail" class="inform" id="loginEmail">
                    <div class="linha"></div>
                    <input type="password" name="loginSenha" placeholder="Insira sua Senha" class="inform" id="loginSenha">
                    <div class="linha"></div>
                    <input type="submit" class="button" value="ENTRAR"> 
                </form>                
            </div>
        </div>

    </div>

</body>

</html>