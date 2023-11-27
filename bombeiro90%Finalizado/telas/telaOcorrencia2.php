<?php 
    include("../conecta.php");
    session_start();

    require_once '../php/classes.php';

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

        header('Location: telaOcorrencia3.php');
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
                    <li><a href="telaOcorrencia1.php">Voltar</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <form action="telaOcorrencia2.php" method="post">
    <main>
       <aside class="asideEsquerda">
            <section class="sectionProblemas">
                <h1>Problemas encontrados suspeitos:</h1>
                <div class="problemasGrid">
                    <div class="opcaoProblema">
                        <input type="radio" name="opcaoProblema" id="" value="1">
                        <label for="">Psiquiatrico</label>
                    </div>
                    <div class="opcaoProblema">
                        <input type="checkbox" id="toggleObstetrico" onchange="toggleDiv('hiddenObstétrico', 'toggleObstetrico')">
                        <label for="toggleObstetrico">Obstétrico</label>

                        <div class="hidden hiddenObstétrico">
                            <div class="obstetricoCells">
                                <input type="radio" name="opcaoObstetrico" id="" value="1">
                                <label for="">Parto Emergencial</label>
                            </div>
                            <div class="obstetricoCells">
                                <input type="radio" name="opcaoObstetrico" id="" value="2">
                                <label for="">Gestante</label>
                            </div>
                            <div class="obstetricoCells">
                                <input type="radio" name="opcaoObstetrico" id="" value="3">
                                <label for="">Hemor. Excessiva  </label>
                            </div>

                            <div class="closeButton X" onclick="fecharDiv('hiddenObstétrico', 'toggleObstetrico')">❌</div>
                        </div>
                    </div>
                    <div class="opcaoProblema">
                        <input type="radio" name="opcaoProblema" id="" value="2">
                        <label for="">Respiratório</label>
                    </div>
                    <div class="opcaoProblema">
                        <input type="checkbox" id="toggleTransporte" onchange="toggleDiv('hiddenTransporte', 'toggleTransporte')">
                        <label for="toggleTransporte">Transporte</label>

                        <div class="hidden hiddenTransporte">
                            <div class="transporteCells">
                                <input type="radio" name="opcaoTransporte" id="" value="1">
                                <label for="">Aéreo</label>
                            </div>
                            <div class="transporteCells">
                                <input type="radio" name="opcaoTransporte" id="" value="2">
                                <label for="">Clinico</label>
                            </div>
                            <div class="transporteCells">
                                <input type="radio" name="opcaoTransporte" id="" value="3">
                                <label for="">Emergencial</label>
                            </div>
                            <div class="transporteCells">
                                <input type="radio" name="opcaoTransporte" id="" value="4">
                                <label for="">Pós-trauma</label>
                            </div>
                            <div class="transporteCells">
                                <input type="radio" name="opcaoTransporte" id="" value="5">
                                <label for="">Samu</label>
                            </div>
                            <div class="transporteCells">
                                <input type="radio" name="opcaoTransporte" id="" value="6">
                                <label for="">Sem Remoção</label>
                            </div>
                            <div class="transporteCells">
                                <input type="radio" name="opcaoTransporte" id="" value="7">
                                <label for="">Outros:</label>
                                <input type="text" name="" id="">
                            </div>

                            <div class="closeButton X" onclick="fecharDiv('hiddenTransporte', 'toggleTransporte')">❌</div></div>
                        </div>
                    </div>
                    <div class="opcaoProblema">
                        <input type="radio" name="opcaoProblema" id="" value="3">
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
                                <input type="radio" name="aberturaOcular" id="" value="espontanea">
                                <label for="">Espontânea</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="aberturaOcular" id="" value="comando_verbal">
                                <label for="">Comando verbal</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="aberturaOcular" id="" value="estimulo_doloroso">
                                <label for="">Estimulo doloroso</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="aberturaOcular" id="" value="nenhuma">
                                <label for="">Nenhuma</label>
                            </div>
                        </div>
                    </div>
                    <div class="avaliacaoPaciente">
                        <h2>Resposta motora:</h2>
                        <div class="opcoesAvaliacao">
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaMotora" id="" value="obedece_prontamente">
                                <label for="">Obedece prontamente</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaMotora" id="" value="localiza_dor_estimulo_tatil">
                                <label for="">Localiza dor ou estímulo tátil</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaMotora" id="" value="retirada_do_seguimento_estimulado">
                                <label for="">Retirada do seguimento estimulado</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaMotora" id="" value="flexao_anormal_decorticacao">
                                <label for="">Flexão anormal (decorticação)</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaMotora" id="" value="extensao_anormal_descerebracao">
                                <label for="">Extensão anormal (descerebração)</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaMotora" id="" value="ausencia">
                                <label for="">Ausência</label>
                            </div>
                        </div>
                    </div>
                    <div class="avaliacaoPaciente">
                        <h2>Resposta verbal:</h2>
                        <div class="opcoesAvaliacao">
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaVerbal" id="" value="palavras_frases_apropriadas">
                                <label for="">Palavras e frases apropriadas</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaVerbal" id="" value="palavras_inapropriadas">
                                <label for="">Palavras inapropriadas</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaVerbal" id="" value="choro_persistente_gritos">
                                <label for="">Choro persistente ou gritos</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaVerbal" id="" value="sons_incompreensiveis">
                                <label for="">Sons incompreensíveis</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaVerbal" id="" value="nenhuma_resposta_verbal">
                                <label for="">Nenhuma resposta verbal</label>
                            </div>
                        </div>
                    </div>
                    <div class="avaliacaoPaciente">
                        <label for="">Total (GCS) (3-15):</label>
                        <input type="text" name="totalGCS" id="">
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