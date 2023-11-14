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
    <form action="">
    <main>
       <aside class="asideEsquerda">
            <section class="sectionProblemas">
                <h1>Problemas encontrados suspeitos:</h1>
                <div class="problemasGrid">
                    <div class="opcaoProblema">
                        <input type="radio" name="psiquiatrico" id="">
                        <label for="">Psiquiatrico</label>
                    </div>
                    <div class="opcaoProblema">
                        <input type="radio" name="obstretico" id="">
                        <label for="">Obstrético</label>
                    </div>
                    <div class="opcaoProblema">
                        <input type="radio" name="respiratorio" id="">
                        <label for="">Respiratório</label>
                    </div>
                    <div class="opcaoProblema">
                        <input type="radio" name="transporte" id="">
                        <label for="">Transporte</label>
                    </div>
                    <div class="opcaoProblema">
                        <input type="radio" name="diabetes" id="">
                        <label for="">Diabetes</label>
                    </div>
                    <div class="opcaoProblema">
                        <!-- NADA -->
                    </div>
                    <div class="opcaoProblema">
                        <label for="">Outro</label>
                        <input type="text" name="opcaoProblemaOutro" id="">
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
                                <input type="radio" name="aberturaOcular" value="espontanea" id="">
                                <label for="">Espontânea</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="aberturaOcular" id="">
                                <label for="">Comando verbal</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="aberturaOcular" id="">
                                <label for="">Estimulo doloroso</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="aberturaOcular" id="">
                                <label for="">Nenhuma</label>
                            </div>
                        </div>
                    </div>
                    <div class="avaliacaoPaciente">
                        <h2>Resposta motora:</h2>
                        <div class="opcoesAvaliacao">
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaMotora" id="">
                                <label for="">Obedece prontamente</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaMotora" id="">
                                <label for="">Localiza dor ou estímulo tátil</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaMotora" id="">
                                <label for="">Retirada do seguimento estimulado</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaMotora" id="">
                                <label for="">Flexão anormal (decorticação)</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaMotora" id="">
                                <label for="">Extensão anormal (descerebração)</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaMotora" id="">
                                <label for="">Ausência</label>
                            </div>
                        </div>
                    </div>
                    <div class="avaliacaoPaciente">
                        <h2>Resposta verbal:</h2>
                        <div class="opcoesAvaliacao">
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaVerbal" id="">
                                <label for="">Palavras e frases apropriadas</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaVerbal" id="">
                                <label for="">Palavras inapropriadas</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaVerbal" id="">
                                <label for="">Choro persistente ou gritos</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaVerbal" id="">
                                <label for="">Sons incompreensíveis</label>
                            </div>
                            <div class="opcaoDeAvaliacao">
                                <input type="radio" name="respostaVerbal" id="">
                                <label for="">Nenhuma resposta verbal</label>
                            </div>
                        </div>
                    </div>
                    <div class="avaliacaoPaciente">
                        <label for="">Total (GCS) (3-15):</label>
                        <input type="text" name="gcsTotal" id="">
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