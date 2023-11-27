<?php 
    include("../conecta.php");
    session_start();

    require_once '../php/classes.php';

    $cod = $_GET['codigo'];

    try {
        // ID da ocorrência
        $id_ocorrencia = $cod;

        // Selecionar da tabela ocorrencia
        $stmt_ocorrencia = $pdo->prepare("SELECT * FROM ocorrencia WHERE id_ocorrencia = :id_ocorrencia");
        $stmt_ocorrencia->bindParam(':id_ocorrencia', $id_ocorrencia, PDO::PARAM_INT);
        $stmt_ocorrencia->execute();
        $ocorrenciaTable = $stmt_ocorrencia->fetch(PDO::FETCH_ASSOC);

        // Selecionar da tabela paciente
        $stmt_paciente = $pdo->prepare("SELECT * FROM paciente WHERE id_paciente = :id_paciente");
        $stmt_paciente->bindParam(':id_paciente', $ocorrenciaTable['id_paciente'], PDO::PARAM_INT);
        $stmt_paciente->execute();
        $pacienteTable = $stmt_paciente->fetch(PDO::FETCH_ASSOC);

        // Selecionar da tabela sinais_vitais
        $stmt_sinais_vitais = $pdo->prepare("SELECT * FROM sinais_vitais WHERE id_sinais_vitais IN (SELECT id_sinais_vitais FROM ocorrencia_sinais_vitais WHERE id_ocorrencia = :id_ocorrencia)");
        $stmt_sinais_vitais->bindParam(':id_ocorrencia', $id_ocorrencia, PDO::PARAM_INT);
        $stmt_sinais_vitais->execute();
        $sinais_vitaisTable = $stmt_sinais_vitais->fetch(PDO::FETCH_ASSOC);

        // Selecionar da tabela sinais_sintomas
        $stmt_sinais_sintomas = $pdo->prepare("SELECT * FROM sinais_sintomas WHERE id_sinais_sintomas IN (SELECT id_sinais_sintomas FROM ocorrencia_sinais_sintomas WHERE id_ocorrencia = :id_ocorrencia)");
        $stmt_sinais_sintomas->bindParam(':id_ocorrencia', $id_ocorrencia, PDO::PARAM_INT);
        $stmt_sinais_sintomas->execute();
        $sinais_sintomasTable = $stmt_sinais_sintomas->fetch(PDO::FETCH_ASSOC);

        // Selecionar da tabela avaliacao_glasgow_menor
        $stmt_glasgow_menor = $pdo->prepare("SELECT * FROM avaliacao_glasgow_menor WHERE id_glasgow_menor IN (SELECT id_avaliacao_glasgow_menor FROM ocorrencia_avaliacao_glasgowmenor WHERE id_ocorrencia = :id_ocorrencia)");
        $stmt_glasgow_menor->bindParam(':id_ocorrencia', $id_ocorrencia, PDO::PARAM_INT);
        $stmt_glasgow_menor->execute();
        $avaliacao_glasgow_menorTable = $stmt_glasgow_menor->fetch(PDO::FETCH_ASSOC);

        // Exibir os resultados 
        //var_dump($ocorrencia, $paciente, $sinais_vitais, $sinais_sintomas, $avaliacao_glasgow_menor);

    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }

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

        header("Location: ../php/update.php?codigo=" . $cod);
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
                <li><a href="visualizarTelaOcorrencia3.php?codigo=<?php echo($cod)?>">Voltar</a></li> <br>
                    <li><a href="../telas/historicoDeOcorrencia.php">Sair da Visualização</a></li>
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
                            <input type="radio" name="formaDeConducao" id="" value="1" <?php echo ($ocorrenciaTable['id_forma_conducao'] == 1) ? 'checked' : ''; ?>>
                            <label for="">Deitada</label>
                        </div>
                        <div class="formaDeConducaoCell">
                            <input type="radio" name="formaDeConducao" id="" value="2" <?php echo ($ocorrenciaTable['id_forma_conducao'] == 2) ? 'checked' : ''; ?>>
                            <label for="">Semi-Sentada</label>
                        </div>
                        <div class="formaDeConducaoCell">
                            <input type="radio" name="formaDeConducao" id="" value="3" <?php echo ($ocorrenciaTable['id_forma_conducao'] == 3) ? 'checked' : ''; ?>>
                            <label for="">Sentada</label>
                        </div>
                    </div>
                </aside>
                <aside class="rightAside">
                    <h1>A Vítima era</h1>
                    <div class="vitimaGrid">
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="" value="1" <?php echo ($ocorrenciaTable['id_vitima_era'] == 1) ? 'checked' : ''; ?>>
                            <label for="">Ciclista</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="" value="6" <?php echo ($ocorrenciaTable['id_vitima_era'] == 6) ? 'checked' : ''; ?>>
                            <label for="">Condutor carro</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="" value="2" <?php echo ($ocorrenciaTable['id_vitima_era'] == 2) ? 'checked' : ''; ?>>
                            <label for="">Condutor moto</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="" value="7" <?php echo ($ocorrenciaTable['id_vitima_era'] == 7) ? 'checked' : ''; ?>>
                            <label for="">Clinico</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="" value="3" <?php echo ($ocorrenciaTable['id_vitima_era'] == 3) ? 'checked' : ''; ?>>
                            <label for="">Sentada</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="" value="8" <?php echo ($ocorrenciaTable['id_vitima_era'] == 8) ? 'checked' : ''; ?>>
                            <label for="">Trauma</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="" value="4" <?php echo ($ocorrenciaTable['id_vitima_era'] == 4) ? 'checked' : ''; ?>>
                            <label for="">Pas. bco. frente</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="" value="9" <?php echo ($ocorrenciaTable['id_vitima_era'] == 9) ? 'checked' : ''; ?>>
                            <label for="">Pas. bco. trás</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="" value="5" <?php echo ($ocorrenciaTable['id_vitima_era'] == 5) ? 'checked' : ''; ?>>
                            <label for="">Pas. moto</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="" value="10" <?php echo ($ocorrenciaTable['id_vitima_era'] == 10) ? 'checked' : ''; ?>>
                            <label for="">Pedestre</label>
                        </div>
                    </div>
                </aside>
            </section>
            <section class="lowerSection">
                <h1>Objetos Recolhidos</h1>
                <textarea class="custom-textarea" placeholder="Digite seu texto aqui" name="objetosRecolhidos"> <?php echo($ocorrenciaTable['objetos_recolhidos']) ?></textarea>
            </section>
            <a href="telaInicial.php"><input type="submit" class="btn" value="MODIFICAR FORMULARIO"></a>
        </main>
    </form>
</body>
<script src="../js/telaOcorrencia.js"></script>
</html>