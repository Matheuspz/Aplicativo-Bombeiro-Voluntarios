<?php 
    include("../conecta.php");
    session_start();

    require_once '../php/classes.php';

    $cod = $_GET['codigo'];


    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $formaDeConducao = $_POST['formaDeConducao'];
        $vitima = $_POST['vitima'];
        $objetosRecolhidosVar = $_POST['objetosRecolhidos'];
        

        $formaConducao = new FormaConducao(
            $formaDeConducao
        );

        $vitimaEra = new VitimaEra(
            $vitima
        );

        $objetosRecolhidos = new ObjetosRecolhidos(
            $objetosRecolhidosVar
        );

        $_SESSION['formaConducao'] = $formaConducao;
        $_SESSION['vitimaEra'] = $vitimaEra;
        $_SESSION['objetosRecolhidos'] = $objetosRecolhidos;

        header('Location: ../php/update.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Ocorrência</title>
    <link rel="stylesheet" href="../css/telaOcorrencia4.css">
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
                    <li><a href="telaOcorrencia3.php">Voltar</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <form action="visualizarTelaOcorrencia4.php?codigo=<?php echo($cod); ?>" method="post">    <main>
        <main>
            <section class="upperSection">
                <aside class="leftAside">
                    <h1>Forma de Condução</h1>
                    <div class="formaDeConducaoGrid">
                        <div class="formaDeConducaoCell">
                            <input type="radio" name="formaDeConducao" id="" value="1">
                            <label for="">Deitada</label>
                        </div>
                        <div class="formaDeConducaoCell">
                            <input type="radio" name="formaDeConducao" id="" value="2">
                            <label for="">Semi-Sentada</label>
                        </div>
                        <div class="formaDeConducaoCell">
                            <input type="radio" name="formaDeConducao" id="" value="3">
                            <label for="">Sentada</label>
                        </div>
                    </div>
                </aside>
                <aside class="rightAside">
                    <h1>A Vítima era</h1>
                    <div class="vitimaGrid">
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="" value="1">
                            <label for="">Ciclista</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="" value="6">
                            <label for="">Condutor carro</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="" value="2">
                            <label for="">Condutor moto</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="" value="7">
                            <label for="">Clinico</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="" value="3">
                            <label for="">Sentada</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="" value="8">
                            <label for="">Trauma</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="" value="4">
                            <label for="">Pas. bco. frente</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="" value="9">
                            <label for="">Pas. bco. trás</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="" value="5">
                            <label for="">Pas. moto</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="" value="10">
                            <label for="">Pedestre</label>
                        </div>
                    </div>
                </aside>
            </section>
            <section class="lowerSection">
                <h1>Objetos Recolhidos</h1>
                <textarea class="custom-textarea" placeholder="Digite seu texto aqui" name="objetosRecolhidos"></textarea>
            </section>
            <a href="telaInicial.php"><input type="submit" class="btn" value="Salvar e Avançar"></a>
        </main>
    </form>
</body>
<script src="../js/telaOcorrencia.js"></script>
</html>