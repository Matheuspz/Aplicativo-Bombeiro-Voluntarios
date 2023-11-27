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
        $opcaoProblema = isset($_POST['opcaoProblema']) ? $_POST['opcaoProblema'] : null;
        $opcaoObstetrico = isset($_POST['opcaoObstetrico']) ? $_POST['opcaoObstetrico'] : null;
        $opcaoTransporte = isset($_POST['opcaoTransporte']) ? $_POST['opcaoTransporte'] : null;

        $aberturaOcular = $_POST['aberturaOcular'];
        $respostaMotora = $_POST['respostaMotora'];
        $respostaVerbal = $_POST['respostaVerbal'];
        $totalGCS = $_POST['totalGCS'];


        $problemasEncontrados = new ProblemasEncontrados(
            $opcaoProblema,
            $opcaoObstetrico,
            $opcaoTransporte,
        );

        $glasgow = new GlasGow(
            $aberturaOcular,
            $respostaMotora,
            $respostaVerbal,
            $totalGCS
        );

        $_SESSION['problemasEncontrados'] = $problemasEncontrados;
        $_SESSION['glasgow'] = $glasgow;

        header("Location: visualizarTelaOcorrencia3.php?codigo=" . $cod);    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Ocorrência</title>
    <link rel="stylesheet" href="../css/telaOcorrencia2.css">
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
                    <li><a href="visualizarTelaOcorrencia1.php?codigo=<?php echo($cod)?>">Voltar</a></li> <br>
                    <li><a href="../telas/historicoDeOcorrencia.php">Sair da Visualização</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <form action="visualizarTelaOcorrencia2.php?codigo=<?php echo($cod); ?>" method="post">
    <main>
       <aside class="asideEsquerda">
            <section class="sectionProblemas">
                <h1>Problemas encontrados suspeitos:</h1>
                <div class="problemasGrid">
                    <div class="opcaoProblema">
                        <input type="radio" name="opcaoProblema" id="" value="1" <?php echo ($ocorrenciaTable['id_problemas_encontrados_suspeitos'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Psiquiatrico</label>
                    </div>
                    <div class="opcaoProblema">
                        <input type="checkbox" id="toggleObstetrico" onchange="toggleDiv('hiddenObstétrico', 'toggleObstetrico')">
                        <label for="toggleObstetrico">Obstétrico</label>

                        <div class="hidden hiddenObstétrico">
                            <div class="obstetricoCells">
                                <input type="radio" name="opcaoObstetrico" id="" value="1" <?php echo ($ocorrenciaTable['id_obstetrico'] == 1) ? 'checked' : ''; ?>>
                                <label for="">Parto Emergencial</label>
                            </div>
                            <div class="obstetricoCells">
                                <input type="radio" name="opcaoObstetrico" id="" value="2" <?php echo ($ocorrenciaTable['id_obstetrico'] == 2) ? 'checked' : ''; ?>>
                                <label for="">Gestante</label>
                            </div>
                            <div class="obstetricoCells">
                                <input type="radio" name="opcaoObstetrico" id="" value="3" <?php echo ($ocorrenciaTable['id_obstetrico'] == 3) ? 'checked' : ''; ?>>
                                <label for="">Hemor. Excessiva  </label>
                            </div>

                            <div class="closeButton X" onclick="fecharDiv('hiddenObstétrico', 'toggleObstetrico')">❌</div>
                        </div>
                    </div>
                    <div class="opcaoProblema">
                        <input type="radio" name="opcaoProblema" id="" value="2" <?php echo ($ocorrenciaTable['id_problemas_encontrados_suspeitos'] == 2) ? 'checked' : ''; ?>>
                        <label for="">Respiratório</label>
                    </div>
                    <div class="opcaoProblema">
                        <input type="checkbox" id="toggleTransporte" onchange="toggleDiv('hiddenTransporte', 'toggleTransporte')">
                        <label for="toggleTransporte">Transporte</label>

                        <div class="hidden hiddenTransporte">
                            <div class="transporteCells">
                                <input type="radio" name="opcaoTransporte" id="" value="1" <?php echo ($ocorrenciaTable['id_transporte'] == 1) ? 'checked' : ''; ?>>
                                <label for="">Aéreo</label>
                            </div>
                            <div class="transporteCells">
                                <input type="radio" name="opcaoTransporte" id="" value="2" <?php echo ($ocorrenciaTable['id_transporte'] == 2) ? 'checked' : ''; ?>>
                                <label for="">Clinico</label>
                            </div>
                            <div class="transporteCells">
                                <input type="radio" name="opcaoTransporte" id="" value="3" <?php echo ($ocorrenciaTable['id_transporte'] == 3) ? 'checked' : ''; ?>>
                                <label for="">Emergencial</label>
                            </div>
                            <div class="transporteCells">
                                <input type="radio" name="opcaoTransporte" id="" value="4" <?php echo ($ocorrenciaTable['id_transporte'] == 4) ? 'checked' : ''; ?>>
                                <label for="">Pós-trauma</label>
                            </div>
                            <div class="transporteCells">
                                <input type="radio" name="opcaoTransporte" id="" value="5" <?php echo ($ocorrenciaTable['id_transporte'] == 5) ? 'checked' : ''; ?>>
                                <label for="">Samu</label>
                            </div>
                            <div class="transporteCells">
                                <input type="radio" name="opcaoTransporte" id="" value="6" <?php echo ($ocorrenciaTable['id_transporte'] == 6) ? 'checked' : ''; ?>>
                                <label for="">Sem Remoção</label>
                            </div>
                            <div class="transporteCells">
                                <input type="radio" name="opcaoTransporte" id="" value="7" <?php echo ($ocorrenciaTable['id_transporte'] == 7) ? 'checked' : ''; ?>>
                                <label for="">Outros:</label>
                                <input type="text" name="" id="">
                            </div>

                            <div class="closeButton X" onclick="fecharDiv('hiddenTransporte', 'toggleTransporte')">❌</div></div>
                        </div>
                    </div>
                    <div class="opcaoProblema">
                        <input type="radio" name="opcaoProblema" id="" value="3" <?php echo ($ocorrenciaTable['id_problemas_encontrados_suspeitos'] == 3) ? 'checked' : ''; ?>>
                        <label for="">Diabetes</label>
                    </div>
                    <div class="opcaoProblema">
                        <input type="radio" name="opcaoProblemaOutro" id="">
                        <label for="">Outro:</label>
                        <input type="text" name="" id="">
                    </div>
                </div>
            </section>
            <section class="sectionAvaliacao">
                <h1>Avaliação do paciente (GLASGOW)</h1>
                <h2>Nível consciência: <span></span>que 5 anos</h2>
                <div class="avaliacaoPacienteGrid">
                    <div class="avaliacaoPaciente">
                        <h2>Abertura ocular:</h2>
                        <div class="opcoesAvaliacao">
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="aberturaOcular" id="" value="espontanea" <?php echo ($avaliacao_glasgow_menorTable['abertura_ocular'] == 'espontanea') ? 'checked' : ''; ?>>
                                <label for="">Espontânea</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="aberturaOcular" id="" value="comando_verbal" <?php echo ($avaliacao_glasgow_menorTable['abertura_ocular'] == 'comando_verbal') ? 'checked' : ''; ?>>
                                <label for="">Comando verbal</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="aberturaOcular" id="" value="estimulo_doloroso" <?php echo ($avaliacao_glasgow_menorTable['abertura_ocular'] == 'estimulo_doloroso') ? 'checked' : ''; ?>>
                                <label for="">Estimulo doloroso</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="aberturaOcular" id="" value="nenhuma" <?php echo ($avaliacao_glasgow_menorTable['abertura_ocular'] == 'nenhuma') ? 'checked' : ''; ?>>
                                <label for="">Nenhuma</label>
                            </div>
                        </div>
                    </div>
                    <div class="avaliacaoPaciente">
                        <h2>Resposta motora:</h2>
                        <div class="opcoesAvaliacao">
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaMotora" id="" value="obedece_prontamente" <?php echo ($avaliacao_glasgow_menorTable['resposta_motora'] == 'obedece_prontamente') ? 'checked' : ''; ?>>
                                <label for="">Obedece prontamente</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaMotora" id="" value="localiza_dor_estimulo_tatil" <?php echo ($avaliacao_glasgow_menorTable['resposta_motora'] == 'localiza_dor_estimulo_tatil') ? 'checked' : ''; ?>>
                                <label for="">Localiza dor ou estímulo tátil</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaMotora" id="" value="retirada_do_seguimento_estimulado" <?php echo ($avaliacao_glasgow_menorTable['resposta_motora'] == 'retirada_do_seguimento_estimulado') ? 'checked' : ''; ?>>
                                <label for="">Retirada do seguimento estimulado</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaMotora" id="" value="flexao_anormal_decorticacao" <?php echo ($avaliacao_glasgow_menorTable['resposta_motora'] == 'flexao_anormal_decorticacao') ? 'checked' : ''; ?>>
                                <label for="">Flexão anormal (decorticação)</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaMotora" id="" value="extensao_anormal_descerebracao" <?php echo ($avaliacao_glasgow_menorTable['resposta_motora'] == 'extensao_anormal_descerebracao') ? 'checked' : ''; ?>>
                                <label for="">Extensão anormal (descerebração)</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaMotora" id="" value="ausencia" <?php echo ($avaliacao_glasgow_menorTable['resposta_motora'] == 'ausencia') ? 'checked' : ''; ?>>
                                <label for="">Ausência</label>
                            </div>
                        </div>
                    </div>
                    <div class="avaliacaoPaciente">
                        <h2>Resposta verbal:</h2>
                        <div class="opcoesAvaliacao">
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaVerbal" id="" value="palavras_frases_apropriadas" <?php echo ($avaliacao_glasgow_menorTable['resposta_verbal'] == 'palavras_frases_apropriadas') ? 'checked' : ''; ?>>
                                <label for="">Palavras e frases apropriadas</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaVerbal" id="" value="palavras_inapropriadas"  <?php echo ($avaliacao_glasgow_menorTable['resposta_verbal'] == 'palavras_inapropriadas') ? 'checked' : ''; ?>>
                                <label for="">Palavras inapropriadas</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaVerbal" id="" value="choro_persistente_gritos" <?php echo ($avaliacao_glasgow_menorTable['resposta_verbal'] == 'choro_persistente_gritos') ? 'checked' : ''; ?>>
                                <label for="">Choro persistente ou gritos</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaVerbal" id="" value="sons_incompreensiveis" <?php echo ($avaliacao_glasgow_menorTable['resposta_verbal'] == 'sons_incompreensiveis') ? 'checked' : ''; ?>>
                                <label for="">Sons incompreensíveis</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaVerbal" id="" value="nenhuma_resposta_verbal" <?php echo ($avaliacao_glasgow_menorTable['resposta_verbal'] == 'nenhuma_resposta_verbal') ? 'checked' : ''; ?>>
                                <label for="">Nenhuma resposta verbal</label>
                            </div>
                        </div>
                    </div>
                    <div class="avaliacaoPaciente">
                        <label for="">Total (GCS) (3-15):</label>
                        <input type="text" name="totalGCS" id="" value="<?php echo($avaliacao_glasgow_menorTable['total_gcs']); ?>">
                    </div>
                </div>
            </section>
       </aside>
       <aside class="asideDireito">
            <h1>Localização dos Traumas</h1>
            <div class="corposGrid">
                <div class="corpos">
                    <img src="../img/corpo.png" alt="" srcset="">
                    <h2>Frente</h2>
                </div>
                <div class="corpos">
                    <img src="../img/corpo.png" alt="" srcset="">
                    <h2>Trás</h2>
                </div>
            </div>
            <h3>Clique no local desejado para adicionar o problema</h3>
       </aside>
        <a href="telaOcorrencia3.php"><input type="submit" class="btn" value="Salvar e Avançar"></a>
    </main>
    </form>
</body>
<script src="../js/telaOcorrencia.js"></script>
</html>