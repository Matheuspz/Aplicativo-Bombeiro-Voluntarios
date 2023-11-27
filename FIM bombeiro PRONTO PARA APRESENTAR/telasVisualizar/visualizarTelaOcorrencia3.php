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

    // Dividindo a string usando "x" como delimitador
    $partes = explode("x", $sinais_vitaisTable['pressao_arterial']);

    // Verificando se a divisão foi bem-sucedida
    if (count($partes) == 2) {
        $pressao1Value = $partes[0];
        $pressao2Value = $partes[1];
    } else {
        // Se a divisão não for bem-sucedida, forneça valores padrão ou lide com isso conforme necessário
        $pressao1Value = "";
        $pressao2Value = "";
    }



    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $pressao1 = $_POST['pressao1'];
        $pressao2 = $_POST['pressao2'];
        $pressao = $pressao1.'x'.$pressao2;
        $pulso = $_POST['pulso'];
        $respiracao = $_POST['respiracao'];
        $saturacao = $_POST['saturacao'];
        $temperatura = $_POST['temperatura'];
        $perfusao = $_POST['perfusao'];
        $hgtValor = $_POST['hgtValor'];

        $decisaoDeTransporte = $_POST['decisaoDeTransporte'];

        $abdomenSensivelRigido = isset($_POST['AbdomenSensivelRigido']) ? 1 : 0;
        $afundamentoCranio = isset($_POST['AfundamentoCranio']) ? 1 : 0;
        $agitacao = isset($_POST['Agitacao']) ? 1 : 0;
        $amnesia = isset($_POST['Amnesia']) ? 1 : 0;
        $anginaPeito = isset($_POST['anginaPeito']) ? 1 : 0;
        $apneia = isset($_POST['Apneia']) ? 1 : 0;
        $bradicardia = isset($_POST['Bradicardia']) ? 1 : 0;
        $bradipneia = isset($_POST['Bradipneia']) ? 1 : 0;
        $broncoAspirando = isset($_POST['BroncoAspirando']) ? 1 : 0;
        $afundamentoCranio = isset($_POST['AfundamentoCranio']) ? 1 : 0;
        $cefaleia = isset($_POST['Cefaleia']) ? 1 : 0;
        $opcaoCianose = isset($_POST['opcaoCianose']) ? $_POST['opcaoCianose'] : null;        
        $convulsao = isset($_POST['Convulsao']) ? 1 : 0;
        $decorticacao = isset($_POST['Decorticacao']) ? 1 : 0;
        $deformidade = isset($_POST['Deformidade']) ? 1 : 0;
        $descerebracao = isset($_POST['Descerebracao']) ? 1 : 0;
        $desmaio = isset($_POST['Desmaio']) ? 1 : 0;
        $desvioTraqueia = isset($_POST['DesvioTraqueia']) ? 1 : 0;
        $dispneia = isset($_POST['Dispneia']) ? 1 : 0;
        $dorLocal = isset($_POST['DorLocal']) ? 1 : 0;
        $opcaoEdema = isset($_POST['opcaoEdema']) ? $_POST['opcaoEdema'] : null;
        $enfisemaSubcutanea = isset($_POST['EnfisemaSubcutanea']) ? 1 : 0;
        $estaseJugular = isset($_POST['EstaseJugular']) ? 1 : 0;
        $facePalida = isset($_POST['FacePalida']) ? 1 : 0;
        $opcaoHemorragia = isset($_POST['opcaoHemorragia']) ? $_POST['opcaoHemorragia'] : null;
        $hipertensao = isset($_POST['Hipertensao']) ? 1 : 0;
        $hipotensao = isset($_POST['Hipotensao']) ? 1 : 0;
        $nauseasVomitos = isset($_POST['NauseasVomitos']) ? 1 : 0;
        $nasorogia = isset($_POST['Nasorogia']) ? 1 : 0;
        $obito = isset($_POST['Obito']) ? 1 : 0;
        $otorreia = isset($_POST['Otorreia']) ? 1 : 0;
        $otorracia = isset($_POST['Otorracia']) ? 1 : 0;
        $ovace = isset($_POST['Ovace']) ? 1 : 0;
        $opcaoParada = isset($_POST['opcaoParada']) ? $_POST['opcaoParada'] : null;
        $priaprismo = isset($_POST['Priaprismo']) ? 1 : 0;
        $pruridoPele = isset($_POST['PruridoPele']) ? 1 : 0;
        $sede = isset($_POST['Sede']) ? 1 : 0;
        $sinalBattle = isset($_POST['SinalBattle']) ? 1 : 0;
        $sinalGuaxinim = isset($_POST['SinalGuaxinim']) ? 1 : 0;
        $opcaoPupila = isset($_POST['opcaoPupila']) ? $_POST['opcaoPupila'] : null;
        $sudorese = isset($_POST['Sudorese']) ? 1 : 0;
        $taquipineia = isset($_POST['Taquipineia']) ? 1 : 0;
        $taquicardiaca = isset($_POST['Taquicardiaca']) ? 1 : 0;
        $tontura = isset($_POST['Tontura']) ? 1 : 0;
        $outro = isset($_POST['Outro']) ? $_POST['Outro'] : null;



        $sinaisVitais = new SinaisVitais(
            $pressao,
            $pulso,
            $respiracao,
            $saturacao,
            $temperatura,
            $perfusao,
            $hgtValor
        );

        $decisaoTransporte = new DecisaoTransporte(
            $decisaoDeTransporte,
        );

        $sinasSintomas = new SinaisSintomas(
            $abdomenSensivelRigido,
            $afundamentoCranio,
            $agitacao,
            $amnesia,
            $anginaPeito,
            $apneia,
            $bradicardia,
            $bradipneia,
            $broncoAspirando,
            $cefaleia,
            $opcaoCianose,
            $convulsao,
            $decorticacao,
            $deformidade,
            $descerebracao,
            $desmaio,
            $desvioTraqueia,
            $dispneia,
            $dorLocal,
            $opcaoEdema,
            $enfisemaSubcutanea,
            $estaseJugular,
            $facePalida,
            $opcaoHemorragia,
            $hipertensao,
            $hipotensao,
            $nauseasVomitos,
            $nasorogia,
            $obito,
            $otorreia,
            $otorracia,
            $ovace,
            $opcaoParada,
            $priaprismo,
            $pruridoPele,
            $sede,
            $sinalBattle,
            $sinalGuaxinim,
            $opcaoPupila,
            $sudorese,
            $taquipineia,
            $taquicardiaca,
            $tontura,
            $outro
        );


        $_SESSION['sinaisVitais'] = $sinaisVitais;
        $_SESSION['decisaoTransporte'] = $decisaoTransporte;
        $_SESSION['sinasSintomas'] = $sinasSintomas;

        header("Location: visualizarTelaOcorrencia4.php?codigo=" . $cod);    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Ocorrência</title>
    <link rel="stylesheet" href="../css/telaOcorrencia3.css">
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
                    <li><a href="visualizarTelaOcorrencia2.php?codigo=<?php echo($cod)?>">Voltar</a></li> <br>
                    <li><a href="../telas/historicoDeOcorrencia.php">Sair da Visualização</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <form action="visualizarTelaOcorrencia3.php?codigo=<?php echo($cod); ?>" method="post">    <main>
       <aside class="aside1">
            <section class="aside1section1">
                <h1>Sinais Vitais</h1>
                <div class="sinaisVitaisGrid">
                    <div class="sinaisVitaisCell">
                        <label for="">Pressão Arterial:</label>
                        <div class="pressaoArterial">
                            <input type="number" name="pressao1" id="" value="<?php echo $pressao1Value; ?>">
                            x
                            <input type="number" name="pressao2" id="" value="<?php echo $pressao2Value; ?>"> 
                        </div>
                        <p>mmHg</p>
                    </div>
                    <div class="sinaisVitaisCell">
                        <label for="">Pulso:</label>
                        <div class="pulso">
                            <input type="number" name="pulso" id="" value="<?php echo $sinais_vitaisTable['pulso']; ?>">
                            B.C.P.M
                        </div>
                    </div>
                    <div class="sinaisVitaisCell">
                        <label for="">Respiração:</label>
                        <div class="respiracao">
                            <input type="number" name="respiracao" id="" value="<?php echo $sinais_vitaisTable['respiracao']; ?>">
                            MRM
                        </div>
                    </div>
                    <div class="sinaisVitaisCell">
                        <label for="">Saturação:</label>
                        <div class="saturacao">
                            <input type="number" name="saturacao" id="" value="<?php echo $sinais_vitaisTable['saturacao']; ?>">
                            %
                        </div>
                    </div>
                    <div class="sinaisVitaisCell">
                        <label for="">Temperatura:</label>
                        <div class="temperatura">
                            <input type="number" name="temperatura" id="" value="<?php echo $sinais_vitaisTable['temperatura']; ?>">
                            C°
                        </div>
                    </div>
                    <div class="sinaisVitaisCell">
                        <label for="">Perfusão:</label>
                        <div class="perfusaoGrid">

                            <div class="perfusaoCell">
                                <label for="">>2 Seg</label>
                                <input type="radio" name="perfusao" id="" value=">2seg" <?php echo ($sinais_vitaisTable['perfusao'] == ">2seg") ? 'checked' : ''; ?>>
                            </div>

                            <div class="perfusaoCell">
                                <label for=""><2 Seg </label>
                                <input type="radio" name="perfusao" id="" value="<2seg" <?php echo ($sinais_vitaisTable['perfusao'] == "<2seg") ? 'checked' : ''; ?>>
                            </div>

                        </div>
                    </div>
                    <div class="sinaisVitaisCell HGT">
                        <label for="">HGT:</label>
                        <div class="hgtGrid">

                            <input type="text" name="hgtValor" id="" value="<?php echo $sinais_vitaisTable['hgt']; ?>">

                            <div class="hgtCell">
                                <input type="radio" name="hgt" id="">
                                <label for="">Anormal</label>
                            </div>

                            <div class="hgtCell">
                                <input type="radio" name="hgt" id="">
                                <label for="">Normal</label>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <section class="aside1section2">
                <h1>Decisão de Transporte</h1>
                <div class="decisaoTransporteGrid">
                    <div class="decisaoTransporteCell">
                        <input type="radio" name="decisaoDeTransporte" id="" value="critico" <?php echo ($ocorrenciaTable['id_decisao_transporte'] == 4) ? 'checked' : ''; ?>>
                        <img src="../img/critico.png">
                        <p>Crítico</p>
                    </div>
                    <div class="decisaoTransporteCell">
                        <input type="radio" name="decisaoDeTransporte" id="" value="instavel" <?php echo ($ocorrenciaTable['id_decisao_transporte'] == 3) ? 'checked' : ''; ?>>
                        <img src="../img/instavel.png">
                        <p>Instável</p>
                    </div>
                    <div class="decisaoTransporteCell">
                        <input type="radio" name="decisaoDeTransporte" id="" value="potencialmenteInstavel" <?php echo ($ocorrenciaTable['id_decisao_transporte'] == 2) ? 'checked' : ''; ?>>
                        <img src="../img/potencialmenteinstavel.png">
                        <p>Potencialmente instável</p>
                    </div>
                    <div class="decisaoTransporteCell">
                        <input type="radio" name="decisaoDeTransporte" id="" value="estavel" <?php echo ($ocorrenciaTable['id_decisao_transporte'] == 1) ? 'checked' : ''; ?>>
                        <img src="../img/estavel.png">
                        <p>Estável</p>
                    </div>
                </div>
            </section>
       </aside>
       <aside class="aside2">
            <h1>Sinais e Sintomas</h1>                              <!-- SINAIS E SINTOMAS -->
            <br><br>
            <div class="sinaisESintomasGrid">
                <aside class="aside2aside1">
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="AbdomenSensivelRigido" id="" value="1" <?php echo ($sinais_sintomasTable['abdomen_sensivel_rigido'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Abdômen Sensível ou Rígido</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="AfundamentoCranio" id="" value="1" <?php echo ($sinais_sintomasTable['afundamento_de_cranio'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Afundamento de Crânio</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Agitacao" id="" value="1" <?php echo ($sinais_sintomasTable['agitacao'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Agitação</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Amnesia" id="" value="1" <?php echo ($sinais_sintomasTable['amnesia'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Amnésia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="AnginaPeito" id=""value="1" <?php echo ($sinais_sintomasTable['angina_de_peito'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Angina de Peito</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Apneia" id="" value="1" <?php echo ($sinais_sintomasTable['apneia'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Apneia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Bradicardia" id="" value="1" <?php echo ($sinais_sintomasTable['bradicardia'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Bradicardia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Bradipneia" id="" value="1" <?php echo ($sinais_sintomasTable['bradipneia'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Bradipnéia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="BroncoAspirando" id="" value="1" <?php echo ($sinais_sintomasTable['bronco_aspirando'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Bronco - Aspirando</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Cefaleia" id="" value="1" <?php echo ($sinais_sintomasTable['cefaleia'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Cefaléia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="" onchange="toggleHidden('hidden1')">
                        <label for="">Cianose</label>

                        <div class="hidden" id="hidden1">
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoCianose" id="" value="Labios" <?php echo ($sinais_sintomasTable['cianose'] == "Labios") ? 'checked' : ''; ?>>
                                <label for="">Labios</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoCianose" id="" value="Extremidades" <?php echo ($sinais_sintomasTable['cianose'] == "Extremidades") ? 'checked' : ''; ?>>
                                <label for="">Extremidades</label>
                            </div>

                            <div class="X" onclick="fecharHidden('hidden1')">❌</div>
                        </div>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Convulsao" id="" value="1" <?php echo ($sinais_sintomasTable['convulsao'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Convulsão</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Decorticacao" id="" value="1" <?php echo ($sinais_sintomasTable['decorticacao'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Decorticação</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Deformidade" id="" value="1" <?php echo ($sinais_sintomasTable['deformidade'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Deformidade</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Descerebracao" id="" value="1" <?php echo ($sinais_sintomasTable['descerebracao'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Descerebração</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Desmaio" id="" value="1" <?php echo ($sinais_sintomasTable['desmaio'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Desmaio</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="DesvioTraqueia" id="" value="1" <?php echo ($sinais_sintomasTable['desvio_de_traqueia'] == 1) ? 'checked' : ''; ?>> 
                        <label for="">Desvio de Traquéia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Dispneia" id="" value="1" <?php echo ($sinais_sintomasTable['dispneia'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Dispnéia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="DorLocal" id="" value="1" <?php echo ($sinais_sintomasTable['dor_local'] == 1) ? 'checked' : ''; ?>> 
                        <label for="">Dor local</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="" onchange="toggleHidden('hidden2')">
                        <label for="">Edema</label>

                        <div class="hidden Edema" id="hidden2">
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoEdema" id="" value="Generalizado" <?php echo ($sinais_sintomasTable['edema'] == "Generalizado") ? 'checked' : ''; ?>>
                                <label for="">Generalizado</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoEdema" id="" value="Localizado" <?php echo ($sinais_sintomasTable['edema'] == "Localizado") ? 'checked' : ''; ?>>
                                <label for="">Localizado</label>
                            </div>

                            <div class="X" onclick="fecharHidden('hidden2')">❌</div>
                        </div>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="EnfisemaSubcutanea" id="" value="1" <?php echo ($sinais_sintomasTable['enfisema_subcutaneo'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Enfisema Subcutânea</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="EstaseJugular" id="" value="1" <?php echo ($sinais_sintomasTable['estase_de_jugular'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Estase de Jugular</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="FacePalida" id="" value="1" <?php echo ($sinais_sintomasTable['face_palida'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Face Pálida</label>
                    </div>
                </aside>
                <aside class="aside2aside2">
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="" onchange="toggleHidden('hidden3')">
                        <label for="">Hemorragia</label>

                        <div class="hidden Hemorragia" id="hidden3">
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoHemorragia" id="" value="Interna" <?php echo ($sinais_sintomasTable['hemorragia'] == "Interna") ? 'checked' : ''; ?>>
                                <label for="">Interna</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoHemorragia" id="" value="Externa" <?php echo ($sinais_sintomasTable['hemorragia'] == "Externa") ? 'checked' : ''; ?>> 
                                <label for="">Externa</label>
                            </div>

                            <div class="X" onclick="fecharHidden('hidden3')">❌</div>
                        </div>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Hipertensao" id="" value="1" <?php echo ($sinais_sintomasTable['hipertensao'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Hipertensão</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Hipotensao" id="" value="1" <?php echo ($sinais_sintomasTable['hipotensao'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Hipotensão</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="NauseasVomitos" id="" value="1" <?php echo ($sinais_sintomasTable['nauseas_e_vomitos'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Nâuseas e vômitos</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Nasorogia" id="" value="1" <?php echo ($sinais_sintomasTable['nasorogia'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Nasorogia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Obito" id="" value="1" <?php echo ($sinais_sintomasTable['obito'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Óbito</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Otorreia" id="" value="1" <?php echo ($sinais_sintomasTable['otorreia'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Otorréia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Otorracia" id="" value="1" <?php echo ($sinais_sintomasTable['otorracia'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Otorracia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Ovace" id="" value="1" <?php echo ($sinais_sintomasTable['o_v_a_c_e'] == 1) ? 'checked' : ''; ?>>
                        <label for="">O V A C E</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="" onchange="toggleHidden('hidden4')">
                        <label for="">Parada</label>

                        <div class="hidden Parada" id="hidden4">
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoParada" id="" value="Cardiaca" <?php echo ($sinais_sintomasTable['parada'] == "Cardiaca") ? 'checked' : ''; ?>>
                                <label for="">Cardíaca</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoParada" id="" value="Respiratoria" <?php echo ($sinais_sintomasTable['parada'] == "Respiratoria") ? 'checked' : ''; ?>>
                                <label for="">Respiratória</label>
                            </div>

                            <div class="X" onclick="fecharHidden('hidden4')">❌</div>
                        </div>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Priaprismo" id="" value="1" <?php echo ($sinais_sintomasTable['priaprismo'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Priaprismo</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="PruridoPele" id="" value="1" <?php echo ($sinais_sintomasTable['prurido_na_pele'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Prurido na pele</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Sede" id="" value="1" <?php echo ($sinais_sintomasTable['sede'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Sede</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="SinalBattle" id="" value="1" <?php echo ($sinais_sintomasTable['sinal_de_battle'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Sinal de Battle</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="SinalGuaxinim" id="" value="1" <?php echo ($sinais_sintomasTable['sinal_de_guaxinim'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Sinal de Guaxinim</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="" onchange="toggleHidden('hidden5')">
                        <label for="">Pupilas</label>

                        <div class="hidden" id="hidden5">
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoPupila" id="" value="Anisocoria" <?php echo ($sinais_sintomasTable['pupila'] == "Anisocoria") ? 'checked' : ''; ?>>
                                <label for="">Anisocoria</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoPupila" id="" value="Isocoria" <?php echo ($sinais_sintomasTable['pupila'] == "Isocoria") ? 'checked' : ''; ?>>
                                <label for="">Isocoria</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoPupila" id="" value="Midriase" <?php echo ($sinais_sintomasTable['pupila'] == "Midriase") ? 'checked' : ''; ?>>
                                <label for="">Midriase</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoPupila" id="" value="Miose" <?php echo ($sinais_sintomasTable['pupila'] == "Miose") ? 'checked' : ''; ?>>
                                <label for="">Miose</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoPupila" id="" value="Reagente" <?php echo ($sinais_sintomasTable['pupila'] == "Reagente") ? 'checked' : ''; ?>>
                                <label for="">Reagente</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoPupila" id="" value="NaoReagente" <?php echo ($sinais_sintomasTable['pupila'] == "NaoReagente") ? 'checked' : ''; ?>>
                                <label for="">Não Reagente</label>
                            </div>

                            <div class="X" onclick="fecharHidden('hidden5')">❌</div>
                        </div>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Sudorese" id="" value="1" <?php echo ($sinais_sintomasTable['sudorese'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Sudorese</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Taquipineia" id="" value="1" <?php echo ($sinais_sintomasTable['taquipineia'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Taquipinéia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Taquicardiaca" id="" value="1" <?php echo ($sinais_sintomasTable['taquicardiaca'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Taquicardiaca</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Tontura" id="" value="1" <?php echo ($sinais_sintomasTable['tontura'] == 1) ? 'checked' : ''; ?>>
                        <label for="">Tontura</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Outro" id="" value="1">
                        <label for="">Outro:</label>
                        <input type="text" name="" id="">
                    </div>
                </aside>
            </div>
       </aside>
    </main>
    <input type="submit" class="btn" value="Salvar e Avançar">
    </form>
</body>
<script src="../js/telaOcorrencia.js"></script>
</html>