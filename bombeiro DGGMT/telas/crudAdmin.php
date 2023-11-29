<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <link rel="stylesheet" href="../css/telaInicial.css">
</head>
<body>
    <header>
        <img src="../img/logo_grande.png" alt="logoNOAR">
        <h1>Associação Humanitária de Busca Salvamento Aéreo e Resgate</h1>
        <h1 class="cellphone">AHBSAR</h1>
        <div class="menu">
            <div class="menu_burguer"></div>
            <nav class="hidden_nav">
                <ul>
                    <li><a href="telaInicialAdmin.php">Voltar</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
    <a href="cadastroDoAdmin.php"><button>Cadastrar no Usuario</button></a>        <hr>
    <table border=1>
        <thead>
            <tr>
                <th> Código </th>
                <th> Email </th>
                <th> Tipo </th>
                <th colspan="2"> Ação </th>
            </tr>
        </thead>
        <tbody>
        <?php
            include("../php/listarUsuarios.php");

            if (!empty($listarUsuarios)) {
                foreach ($listarUsuarios as $linha) {
                    echo '<tr>
                            <td>' . $linha['id_usuario'] . '</td> 
                            <td>' . $linha['email'] . '</td>
                            <td>' . $linha['id_tipo'] . '</td>
                            <td><a href="alterarDoAdmin.php?codigo=' . $linha['id_usuario'] . '"> Modificar </a></td>
                        </tr>';
                }
            }
        ?>
        </tbody>
    </table>	


    </main>
</body>
<script src="../js/telaInicial.js"></script>
</html>