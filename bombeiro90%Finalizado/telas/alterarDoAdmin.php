<?php 
    include("../conecta.php");
    session_start();

    $cod = $_GET['codigo'];

    $comando = $pdo->prepare("SELECT id_usuario, email, senha, id_tipo FROM usuario WHERE id_usuario=$cod");
    $comando->execute();
    $resultado = $comando->fetch(PDO::FETCH_ASSOC);

    if($resultado) {
        $idUsuario = $resultado['id_usuario'];
        $email = $resultado['email'];
        $senha = $resultado['senha'];
        $idTipo = $resultado['id_tipo'];
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
        $tipoSubmit = $_POST['submit'];
        $idBombeiro = $_POST['idBombeiro'];
        $emailBombeiro = $_POST['emailBombeiro'];
        $senhaBombeiro = $_POST['senhaBombeiro'];
        $opcaoAdmin = isset($_POST['opcaoAdmin']) ? $_POST['opcaoAdmin'] : null;
    
        if ($tipoSubmit == "EXCLUIR") {
            $comando = $pdo->prepare("DELETE FROM usuario WHERE id_usuario=:idBombeiro");
            $comando->bindParam(':idBombeiro', $idBombeiro);
            $comando->execute();
            echo("<script> alert('USUÁRIO DELETADO'); </script>");
        }
        if ($tipoSubmit == "ATUALIZAR") {
            $comando = $pdo->prepare("UPDATE usuario SET email=:email, senha=:senha, id_tipo=:opcaoAdmin WHERE id_usuario=:idBombeiro");
            $comando->bindParam(':idBombeiro', $idBombeiro);
            $comando->bindParam(':email', $emailBombeiro);
            $comando->bindParam(':senha', $senhaBombeiro);
            $comando->bindParam(':opcaoAdmin', $opcaoAdmin); 
            $comando->execute();
            echo("<script> alert('USUÁRIO ATUALIZADO'); </script>");

        }
    }
    
?>

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
            <h1>MODIFICAR</h1>
            <form action="alterarDoAdmin.php?codigo=<?php echo $cod; ?>" method="POST">
                <div class="form-column">
                    <input type="number" name="idBombeiro" id="" placeholder="Digite um ID" value="<?php echo($idUsuario) ?>" readonly>
                    <hr>
                    <input type="text" name="emailBombeiro" id="" placeholder="Digite seu email" value="<?php echo($email) ?>">
                    <hr>
                    <div class="row">
                        <input type="password" name="senhaBombeiro" id="id_password" placeholder="Digite sua senha" value="<?php echo($senha) ?>">
                        <ion-icon name="eye-outline" class="olho" id="togglePassword" onclick="togglePasswordVisibility()"></ion-icon>
                    </div>
                    <hr>
                </div>
                <div class="form-row">

                    <input type="submit" value="EXCLUIR" class="btn" name="submit">
                    <input type="submit" value="ATUALIZAR" class="btn" name="submit">

                    <a>
                        <div class="adminRadio">
                            <h2>É ADMIN?</h2>
                            <div class="adminOption">
                            <label for="adminSim">Sim</label>
                            <input type="radio" name="opcaoAdmin" id="adminSim" value="2" <?php echo ($idTipo == '2') ? 'checked' : ''; ?> required>
                        </div>
                        <div class="adminOption">
                            <label for="adminNao">Não</label>
                            <input type="radio" name="opcaoAdmin" id="adminNao" value="1" <?php echo ($idTipo == '1') ? 'checked' : ''; ?> required>
                        </div>
                        </div>
                        <a href="crudAdmin.php">
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