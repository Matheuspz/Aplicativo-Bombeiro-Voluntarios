<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Login</title>
    <link rel="stylesheet" href="../css/index.css">
    <style>
        @media screen and (max-width: 400px) {
            h1{
                font-size: 2.75rem;
            }
        }
    </style>
</head>
<body>

    <div class="azul-escuro">
        <img src="../img/logo_grande.png" alt="logo bombeiros">
        <div class="azul-claro">
            <h1 style="top: 20px">CADASTRO</h1>
            <form action="" style="height: 100%;">
                <div class="form-column" style="margin-top: 100px;">
                    <input type="text" name="" id="" placeholder="Digite um email">
                    <hr>
                    <div class="row">
                        <input type="password" name="" id="id_password" placeholder="Digite uma senha">
                        <ion-icon name="eye-outline" class="olho" id="togglePassword" onclick="togglePasswordVisibility()"></ion-icon>
                    </div>
                    <hr>
                </div>
                <div class="form-row" style="flex-direction: column; gap: 10px;">
                    <input type="submit" value="EXCLUIR" class="btn">
                    <input type="submit" value="INSERIR" class="btn">
                    <input type="submit" value="ATUALIZAR" class="btn">
                </div>
                <a href="telaInicialAdmin.php">Voltar</a>
            </form>
        </div>
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="../js/loginCadastro.js"></script>
</html>