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

    <table border=1>
        <thead>
            <tr>
                <th colspan="1"> Código </th>
                <th colspan=""> Nome </th>
                <th colspan=""> Sobrenome </th>
                <th colspan=""> Data e Hora </th>
                <th colspan="2"> Ação </th>
            </tr>
        </thead>
        <tbody>
        <?php
            include("../php/listarOcorrencia.php");

            if (!empty($listarOcorrencia)) {
                foreach ($listarOcorrencia as $linha) {
                    echo '<tr>
                            <td>' . $linha['id_ocorrencia'] . '</td>
                            <td>' . $linha['nome_paciente'] . '</td>
                            <td>' . $linha['sobrenome_paciente'] . '</td>
                            <td>' . $linha['data_ocorrencia'] . '</td>
                            <td><a href="../telasVisualizar/visualizarTelaOcorrencia1.php?codigo=' . $linha['id_ocorrencia'] . '"> Visualizar </a></td>
                            <td><a href="../php/excluirOcorrencia.php?codigo=' . $linha['id_ocorrencia'] . '"> Excluir </a></td>
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