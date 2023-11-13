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
                    <li><a href="telaInicial.php">Voltar</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <form action="">
    <main>
        <section class="upperSection">
            <div class="upperGrid">

                <div class="cadastroPaciente">
                    <label for="">Nome:</label>
                    <input type="text">
                </div>

                <div class="cadastroPaciente">
                    <label for="">Sobrenome:</label>
                    <input type="text">
                </div>

                <div class="cadastroPaciente">
                    <label for="">Idade:</label>
                    <input type="number">
                </div>

                <div class="cadastroPaciente">
                    <label for="">Telefone:</label>
                    <input type="text">
                </div>

                <div class="cadastroPaciente">
                    <label for="">Sexo:</label>
                    <div class="sexoPaciente">
                        <div>
                            <input type="radio" name="sexo" id="">
                            <label for="">Masculino</label>
                        </div>
                        <div>
                            <input type="radio" name="sexo" id="">
                            <label for="">Feminino</label>
                        </div>
                    </div>
                </div>

                <div class="cadastroPaciente">
                    <label for="">CPF/RG:</label>
                    <input type="text">
                </div>

            </div>
        </section>
        <section class="middleSection">
            <aside>
                <h2>Possui acompanhante?</h2>

                <div class="acompanhanteEscolha">

                    <div class="escolhaAcompanhante">
                        <input type="radio" name="acompanhante" id="acompanhanteSim">
                        <label for="">Sim</label>
                    </div>
                    <div class="escolhaAcompanhante">
                        <input type="radio" name="acompanhante" id="acompanhanteNao">
                        <label for="">Não</label>
                    </div>

                    <div class="hiddenAcompanhanteDiv" id="formularioAcompanhante">
                        <input type="text" placeholder="Nome acompanhante">
                        <input type="number" placeholder="Idade acompanhante">
                        <input type="tel" name="" id="" placeholder="Telefone acompanhante">
                    </div>

                </div>

                <div class="localOcorrencia">
                    <label for="">Local da ocorrência:</label>
                    <input type="text" name="" id="">
                </div>
            </aside>
            <aside class="rightAside">
                <h2>TIPO DE OCORRÊNCIA (PRÉ-HOSPITALAR):</h2>

                <div class="lowerGrid">

                    <div class="tipoOcorrencia">
                        <input type="radio" name="ocorrencia" id="">
                        <label for="">Causada por animais</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="ocorrencia" id="">
                        <label for="">Afogamento</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="ocorrencia" id="">
                        <label for="">Intoxicação</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="ocorrencia" id="">
                        <label for="">Com meio de transporte</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="ocorrencia" id="">
                        <label for="">Agressão</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="ocorrencia" id="">
                        <label for="">Queda Bicicleta</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="ocorrencia" id="">
                        <label for="">Desmoronamento / Deslizamento</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="ocorrencia" id="">
                        <label for="">Atropelamento</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="ocorrencia" id="">
                        <label for="">Queda Moto</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="ocorrencia" id="">
                        <label for="">Emergência médica</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="ocorrencia" id="">
                        <label for="">Choque Elétrico</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="ocorrencia" id="">
                        <label for="">Queda Nível <2M </label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="ocorrencia" id="">
                        <label for="">Queda de Altura 2M</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="ocorrencia" id="">
                        <label for="">Desabamento</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="ocorrencia" id="">
                        <label for="">Trabalho</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="ocorrencia" id="">
                        <label for="">Tentativa de Suicídio</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="ocorrencia" id="">
                        <label for="">Domêstico</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="ocorrencia" id="">
                        <label for="">Transferência</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="ocorrencia" id="">
                        <label for="">Queda própria altura</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="ocorrencia" id="">
                        <label for="">Esportiva</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="ocorrencia" id="">
                        <label for="">Outros</label>
                    </div>

                </div>
            </aside>
        </section>
        <section class="lowerSection">
            <a href="telaOcorrencia2.php"><input type="submit" class="btn" value="Salvar e Avançar"></a>
        </section>
    </main>
    </form>
</body>
<script src="../js/telaOcorrencia.js"></script>
</html>