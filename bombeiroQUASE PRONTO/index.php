<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Login</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

    <div class="azul-escuro">
        <img src="img/logo_grande.png" alt="logo bombeiros">
        <div class="azul-claro">
            <h1>LOGIN</h1>
            <form action="php/login.php" method="POST">
                <div class="form-column">
                    <input type="text" name="loginEmail" id="" placeholder="Digite seu email">
                    <hr>
                    <div class="row">
                        <input type="password" name="loginSenha" id="id_password" placeholder="Digite sua senha">
                        <ion-icon name="eye-outline" class="olho" id="togglePassword" onclick="togglePasswordVisibility()"></ion-icon>
                    </div>
                    <hr>
                </div>
                <div class="form-row">
                    <div class="checkbox">
                        <input type="checkbox" name="rememberMe" id="check">
                        <label for="check">Lembre de mim</label>
                    </div>
                    <input type="submit" value="ENTRAR" class="btn">
                </div>
                <a href="telas/telaInicial.php">TESTE</a>
                <a href="telas/telaInicialAdmin.php">Admin</a>
            </form>
        </div>
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="js/loginCadastro.js"></script>
</html>