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
                    <li><a href="../index.php">SAIR</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>

    <table border=1>
        <thead>
            <tr>
                <th> Código </th>
                <th> Nome </th>
                <th colspan="2"> Ações </th>
            </tr>
        </thead>
        <tbody>
            <?php
                include("listarOcorrencia.php");
                    if(!empty($listarOcorrencia)){
                        foreach($listarOcorrencia as $linha){
                            echo ' <tr>
                            <td> '.$linha['pk_turma'] .' </td>
                            <td> '.$linha['nome_turma'] .' </td>
                            <td> <a href="excluir_usuario.php?codigo='.$linha['pk_turma'].'"> Excluir <a> </td>
                            <td> <a href="visualizar_usuario.php?codigo='.$linha['pk_turma'].'"> Visualizar <a> </td>
                            </tr>
                            ';
                        }
                    }
            ?>
        </tbody>
    </table>	


    </main>
</body>
<script src="../js/telaInicial.js"></script>
</html>