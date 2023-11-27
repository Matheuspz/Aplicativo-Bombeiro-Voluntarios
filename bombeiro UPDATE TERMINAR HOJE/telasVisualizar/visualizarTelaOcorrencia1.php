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
        $stmt_glasgow_menor = $pdo->prepare("SELECT * FROM avaliacao_glasgow_menor WHERE id_glasgow_menor IN (SELECT id_glasgow_menor FROM ocorrencia_avaliacao_glasgowmenor WHERE id_ocorrencia = :id_ocorrencia)");
        $stmt_glasgow_menor->bindParam(':id_ocorrencia', $id_ocorrencia, PDO::PARAM_INT);
        $stmt_glasgow_menor->execute();
        $avaliacao_glasgow_menorTable = $stmt_glasgow_menor->fetch(PDO::FETCH_ASSOC);




        // Exibir os resultados 
        //var_dump($ocorrencia, $paciente, $sinais_vitais, $sinais_sintomas, $avaliacao_glasgow_menor);

    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $nomePaciente = $_POST['nome'];
        $sobrenomePaciente = $_POST['sobrenome'];
        $idadePaciente = $_POST['idade'];
        $cpfRgPaciente = $_POST['cpf'];
        $sexo = $_POST['sexo'];
        $nomeAcompanhante = isset($_POST['nomeAcompanhante']) ? $_POST['nomeAcompanhante'] : null;
        $idadeAcompanhante = isset($_POST['idadeAcompanhante']) ? (int)$_POST['idadeAcompanhante'] : null;

        $tipoDaOcorrencia = $_POST['tipoDaOcorrencia'];
        $localOcorrencia = $_POST['local'];

        $paciente = new Paciente(
            $nomePaciente,
            $sobrenomePaciente,
            $idadePaciente,
            $cpfRgPaciente,
            $sexo,
            $nomeAcompanhante,
            $idadeAcompanhante
        );

        $tipoLocalOcorrencia = new TipoOcorrencia(
            $tipoDaOcorrencia,
            $localOcorrencia
        );

        $_SESSION['tipoLocalOcorrencia'] = $tipoLocalOcorrencia;
        $_SESSION['paciente'] = $paciente;

        header("Location: visualizarTelaOcorrencia2.php?codigo=" . $cod);
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Ocorrência</title>
    <link rel="stylesheet" href="../css/telaOcorrencia1.css">
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
                    <li><a href="../telas/historicoDeOcorrencia.php">Voltar</a></li> <br>
                    <li><a href="../telas/historicoDeOcorrencia.php">Sair da Visualização</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <form action="visualizarTelaOcorrencia1.php?codigo=<?php echo($cod); ?>" method="post">
    <main>
        <section class="upperSection">
            <div class="upperGrid">

                <div class="cadastroPaciente">
                    <label for="">Nome:</label>
                    <input type="text" name="nome" value="<?php echo($pacienteTable['nome_paciente']); ?>" required>
                </div>

                <div class="cadastroPaciente">
                    <label for="">Sobrenome:</label>
                    <input type="text" name="sobrenome" value="<?php echo($pacienteTable['sobrenome_paciente']); ?>" required >
                </div>

                <div class="cadastroPaciente">
                    <label for="">Idade:</label>
                    <input type="number" name="idade" value="<?php echo($pacienteTable['idade_paciente']); ?>" required>
                </div>

                <div class="cadastroPaciente">
                    <label for="">Telefone:</label>
                    <input type="text" name="telefone" required>
                </div>

                <div class="cadastroPaciente">
                    <label for="">Sexo:</label>
                    <div class="sexoPaciente">
                        <div>
                            <input type="radio" name="sexo" id="" value="Masculino" <?php echo ($pacienteTable['sexo_paciente'] == 'Masculino') ? 'checked' : ''; ?> required>
                            <label for="">Masculino</label>
                        </div>
                        <div>
                            <input type="radio" name="sexo" id="" value="Feminino" <?php echo ($pacienteTable['sexo_paciente'] == 'Feminino') ? 'checked' : ''; ?> required>
                            <label for="">Feminino</label>
                        </div>
                    </div>
                </div>

                <div class="cadastroPaciente">
                    <label for="">CPF/RG:</label>
                    <input type="text" name="cpf" required value="<?php echo($pacienteTable['rg_cpf_paciente']); ?>">
                </div>

            </div>
        </section>
        <section class="middleSection">
            <aside>
                <h2>Possui acompanhante?</h2>

                <div class="acompanhanteEscolha">

                    <div class="escolhaAcompanhante">
                        <input type="radio" name="acompanhante" id="acompanhanteSim" value="Sim" required>
                        <label for="">Sim</label>
                    </div>
                    <div class="escolhaAcompanhante">
                        <input type="radio" name="acompanhante" id="acompanhanteNao" value="Nao" required>
                        <label for="">Não</label>
                    </div>

                    <div class="hiddenAcompanhanteDiv hidden" id="formularioAcompanhante">
                        <input type="text" placeholder="Nome acompanhante" name="nomeAcompanhante" value="<?php echo($pacienteTable['Nome_acompanhante']); ?>">
                        <input type="number" placeholder="Idade acompanhante" name="idadeAcompanhante" value="<?php echo($pacienteTable['idade_acompanhante']); ?>">
                        <input type="tel" name="" id="" placeholder="Telefone acompanhante">
                    </div>

                </div>

                <div class="localOcorrencia">
                    <label for="">Local da ocorrência:</label>
                    <input type="text" name="local" id="" required value="<?php echo($ocorrenciaTable['local_ocorrencia']); ?>">
                </div>
            </aside>
            <aside class="rightAside">
                <h2>TIPO DE OCORRÊNCIA (PRÉ-HOSPITALAR):</h2>

                <div class="lowerGrid">

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="1" <?php echo ($ocorrenciaTable['id_tipo_ocorrencia'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Causada por animais</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="8" <?php echo ($ocorrenciaTable['id_tipo_ocorrencia'] == 8) ? 'checked' : ''; ?>>
                        <label for="">Afogamento</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="15" <?php echo ($ocorrenciaTable['id_tipo_ocorrencia'] == 15) ? 'checked' : ''; ?>>
                        <label for="">Intoxicação</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="2" <?php echo ($ocorrenciaTable['id_tipo_ocorrencia'] == 2) ? 'checked' : ''; ?>>
                        <label for="">Com meio de transporte</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="9" <?php echo ($ocorrenciaTable['id_tipo_ocorrencia'] == 9) ? 'checked' : ''; ?>>
                        <label for="">Agressão</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="16" <?php echo ($ocorrenciaTable['id_tipo_ocorrencia'] == 16) ? 'checked' : ''; ?>>
                        <label for="">Queda Bicicleta</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="3" <?php echo ($ocorrenciaTable['id_tipo_ocorrencia'] == 3) ? 'checked' : ''; ?>>
                        <label for="">Desmoronamento / Deslizamento</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="10" <?php echo ($ocorrenciaTable['id_tipo_ocorrencia'] == 10) ? 'checked' : ''; ?>>
                        <label for="">Atropelamento</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="17" <?php echo ($ocorrenciaTable['id_tipo_ocorrencia'] == 17) ? 'checked' : ''; ?>>
                        <label for="">Queda Moto</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="4" <?php echo ($ocorrenciaTable['id_tipo_ocorrencia'] == 4) ? 'checked' : ''; ?>>
                        <label for="">Emergência médica</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="11" <?php echo ($ocorrenciaTable['id_tipo_ocorrencia'] == 11) ? 'checked' : ''; ?>>
                        <label for="">Choque Elétrico</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="18" <?php echo ($ocorrenciaTable['id_tipo_ocorrencia'] == 18) ? 'checked' : ''; ?>>
                        <label for="">Queda Nível menor 2M </label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="5" <?php echo ($ocorrenciaTable['id_tipo_ocorrencia'] == 5) ? 'checked' : ''; ?>>
                        <label for="">Queda de Altura 2M</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="12" <?php echo ($ocorrenciaTable['id_tipo_ocorrencia'] == 12) ? 'checked' : ''; ?>> 
                        <label for="">Desabamento</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="19" <?php echo ($ocorrenciaTable['id_tipo_ocorrencia'] == 19) ? 'checked' : ''; ?>>
                        <label for="">Trabalho</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="6" <?php echo ($ocorrenciaTable['id_tipo_ocorrencia'] == 6) ? 'checked' : ''; ?>>
                        <label for="">Tentativa de Suicídio</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="13" <?php echo ($ocorrenciaTable['id_tipo_ocorrencia'] == 13) ? 'checked' : ''; ?>>
                        <label for="">Domêstico</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="20" <?php echo ($ocorrenciaTable['id_tipo_ocorrencia'] == 20) ? 'checked' : ''; ?>>
                        <label for="">Transferência</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="7" <?php echo ($ocorrenciaTable['id_tipo_ocorrencia'] == 7) ? 'checked' : ''; ?>>
                        <label for="">Queda própria altura</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="14" <?php echo ($ocorrenciaTable['id_tipo_ocorrencia'] == 14) ? 'checked' : ''; ?>>
                        <label for="">Esportiva</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="21" <?php echo ($ocorrenciaTable['id_tipo_ocorrencia'] == 21) ? 'checked' : ''; ?>>
                        <label for="">Outros:</label>
                        <input type="text" name="" id="">
                    </div>

                </div>
            </aside>
        </section>
        <section class="lowerSection">
            <input type="submit" class="btn" value="Salvar e Avançar">
        </section>
    </main>
    </form>
</body>
<script src="../js/telaOcorrencia.js"></script>
</html>