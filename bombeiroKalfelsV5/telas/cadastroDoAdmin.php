<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Cadastro Admin</title>
    <link rel="stylesheet" href="../css/index.css">
    <style>
        .checkbox{
            display: none;
        }
        .form-row{
            flex-direction: column;
            gap: 15px;
            position: relative;
        }
        h1{
            top: 15px;
        }
        .form-row a{
            position: absolute;
            color: #fff;
            right: 0;
            bottom: -15px;
        }
        .azul-claro{
            height: 580px;
            top: 10px;
        }
        .adminRadio{
            width: 100px;
            position: absolute;
            right: 220px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 2px;
        }
        .adminOption{
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 10px;
        }
        @media screen and (max-width: 640px){
            .adminRadio{
                right: 161px;
            }

        }
    </style>
</head>
<body>
    <div class="azul-escuro">
        <img src="../img/logo_grande.png" alt="logo bombeiros">
        <div class="azul-claro">
            <h1>CADASTRO</h1>
            <form action="">
                <div class="form-column">
                    <input type="number" name="" id="" placeholder="Digite um ID">
                    <hr>
                    <input type="text" name="" id="" placeholder="Digite seu email">
                    <hr>
                    <div class="row">
                        <input type="password" name="" id="id_password" placeholder="Digite sua senha">
                        <ion-icon name="eye-outline" class="olho" id="togglePassword" onclick="togglePasswordVisibility()"></ion-icon>
                    </div>
                    <hr>
                </div>
                <div class="form-row">
                    <div class="checkbox">
                        <input type="checkbox" name="" id="check">
                        <label for="check">Lembre de mim</label>
                    </div>
                    <input type="submit" value="INSERIR" class="btn">
                    <input type="submit" value="EXCLUIR" class="btn">
                    <input type="submit" value="ATUALIZAR" class="btn">

                    <a>
                        <div class="adminRadio">
                            <h2>É ADMIN?</h2>
                            <div class="adminOption">
                                <label for="adminSim">Sim</label>
                                <input type="radio" name="opcaoAdmin" id="adminSim">
                            </div>
                            <div class="adminOption">
                                <label for="adminNao">Não</label>
                                <input type="radio" name="opcaoAdmin" id="adminNao">
                            </div>
                        </div>
                        <a href="telaInicialAdmin.php">
                            <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                        </a>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="../js/loginCadastro.js"></script>
</html>