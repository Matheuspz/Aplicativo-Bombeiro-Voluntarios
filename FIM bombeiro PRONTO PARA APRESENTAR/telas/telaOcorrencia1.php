<?php 
    include("../conecta.php");
    session_start();

    require_once '../php/classes.php';

    $tipo_user = $_SESSION['id_tipo'];

    if($tipo_user == 2) {
        $headerLoc = "telaInicialAdmin.php";
    } else {
        $headerLoc = "telaInicial.php";
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

        header('Location: telaOcorrencia2.php');
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
                    <li><a href="<?php echo($headerLoc); ?>">Voltar</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <form action="telaOcorrencia1.php" method="post">
    <main>
        <section class="upperSection">
            <div class="upperGrid">

                <div class="cadastroPaciente">
                    <label for="">Nome:</label>
                    <input type="text" name="nome" required>
                </div>

                <div class="cadastroPaciente">
                    <label for="">Sobrenome:</label>
                    <input type="text" name="sobrenome" required >
                </div>

                <div class="cadastroPaciente">
                    <label for="">Idade:</label>
                    <input type="number" name="idade" required>
                </div>

                <div class="cadastroPaciente">
                    <label for="">Telefone:</label>
                    <input type="text" name="telefone" required>
                </div>

                <div class="cadastroPaciente">
                    <label for="">Sexo:</label>
                    <div class="sexoPaciente">
                        <div>
                            <input type="radio" name="sexo" id="" value="Masculino" required>
                            <label for="">Masculino</label>
                        </div>
                        <div>
                            <input type="radio" name="sexo" id="" value="Feminino" required>
                            <label for="">Feminino</label>
                        </div>
                    </div>
                </div>

                <div class="cadastroPaciente">
                    <label for="">CPF/RG:</label>
                    <input type="text" name="cpf" required>
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
                        <input type="text" placeholder="Nome acompanhante" name="nomeAcompanhante">
                        <input type="number" placeholder="Idade acompanhante" name="idadeAcompanhante">
                        <input type="tel" name="" id="" placeholder="Telefone acompanhante">
                    </div>

                </div>

                <div class="localOcorrencia">
                    <label for="">Local da ocorrência:</label>
                    <input type="text" name="local" id="" required>
                </div>
            </aside>
            <aside class="rightAside">
                <h2>TIPO DE OCORRÊNCIA (PRÉ-HOSPITALAR):</h2>

                <div class="lowerGrid">

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="1">
                        <label for="">Causada por animais</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="8">
                        <label for="">Afogamento</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="15">
                        <label for="">Intoxicação</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="2">
                        <label for="">Com meio de transporte</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="9">
                        <label for="">Agressão</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="16">
                        <label for="">Queda Bicicleta</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="3">
                        <label for="">Desmoronamento / Deslizamento</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="10">
                        <label for="">Atropelamento</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="17">
                        <label for="">Queda Moto</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="4">
                        <label for="">Emergência médica</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="11">
                        <label for="">Choque Elétrico</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="18">
                        <label for="">Queda Nível menor 2M </label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="5">
                        <label for="">Queda de Altura 2M</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="12"> 
                        <label for="">Desabamento</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="19">
                        <label for="">Trabalho</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="6">
                        <label for="">Tentativa de Suicídio</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="13">
                        <label for="">Domêstico</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="20">
                        <label for="">Transferência</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="7">
                        <label for="">Queda própria altura</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="14">
                        <label for="">Esportiva</label>
                    </div>

                    <div class="tipoOcorrencia">
                        <input type="radio" name="tipoDaOcorrencia" id="" value="21">
                        <label for="">Outros:</label>
                        <input type="text" name="" id="">
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