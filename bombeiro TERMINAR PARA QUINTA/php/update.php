<?php 
    include("../conecta.php");
    include("classes.php");

    session_start();

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

    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }

    $paciente = $_SESSION['paciente'];
    $tipoLocalOcorrencia = $_SESSION['tipoLocalOcorrencia'];
    $problemasEncontrados = $_SESSION['problemasEncontrados'];
    $glasgow = $_SESSION['glasgow'];
    $sinaisVitais = $_SESSION['sinaisVitais'];
    $decisaoTransporte = $_SESSION['decisaoTransporte'];
    $sinasSintomas = $_SESSION['sinasSintomas'];
    $formaConducao = $_SESSION['formaConducao'];
    $vitimaEra = $_SESSION['vitimaEra'];
    $objetosRecolhidos = $_SESSION['objetosRecolhidos'];

    //PACIENTE
    //______________________________________________________________//
    $nomePaciente = $paciente->nomePaciente;
    $sobrenomePaciente = $paciente->sobrenomePaciente;
    $idadePaciente = $paciente->idadePaciente;
    $cpfRgPaciente = $paciente->cpfRgPaciente;
    $sexo = $paciente->sexo;
    $nomeAcompanhante = $paciente->nomeAcompanhante;
    $idadeAcompanhante = $paciente->idadeAcompanhante;

    $comandoPaciente = $pdo->prepare("UPDATE paciente SET 
        nome_paciente = :nome_paciente,
        sobrenome_paciente = :sobrenome_paciente,
        idade_paciente = :idade_paciente,
        rg_cpf_paciente = :rg_cpf_paciente,
        sexo_paciente = :sexo_paciente,
        nome_acompanhante = :nome_acompanhante,
        idade_acompanhante = :idade_acompanhante
        WHERE id_paciente = :idPaciente");

    $comandoPaciente->bindParam(':nome_paciente', $nomePaciente);
    $comandoPaciente->bindParam(':sobrenome_paciente', $sobrenomePaciente);
    $comandoPaciente->bindParam(':idade_paciente', $idadePaciente);
    $comandoPaciente->bindParam(':rg_cpf_paciente', $cpfRgPaciente);
    $comandoPaciente->bindParam(':sexo_paciente', $sexo);
    $comandoPaciente->bindParam(':nome_acompanhante', $nomeAcompanhante);
    $comandoPaciente->bindParam(':idade_acompanhante', $idadeAcompanhante);
    $comandoPaciente->bindParam(':idPaciente', $pacienteTable['id_paciente']);

    $resultadoPaciente = $comandoPaciente->execute();
    //______________________________________________________________//

    // GLASGOW
    //______________________________________________________________//
    $aberturaOcular = $glasgow->aberturaOcular;
    $respostaMotora = $glasgow->respostaMotora;
    $respostaVerbal = $glasgow->respostaVerbal;
    $totalGCS = $glasgow->gcsTotal;

    // Se o ID da avaliação Glasgow Menor estiver disponível na sessão ou de qualquer outra fonte
    $idAvaliacaoGlasgowMenor = $avaliacao_glasgow_menorTable['id_glasgow_menor']; // Substitua isso pelo método real de obter o ID

    $comandoGlasgow = $pdo->prepare("UPDATE avaliacao_glasgow_menor SET 
        abertura_ocular = :abertura_ocular,
        resposta_motora = :resposta_motora,
        resposta_verbal = :resposta_verbal,
        total_gcs = :total_gcs
        WHERE id_glasgow_menor = :idAvaliacaoGlasgowMenor");

    $comandoGlasgow->bindParam(':abertura_ocular', $aberturaOcular);
    $comandoGlasgow->bindParam(':resposta_motora', $respostaMotora);
    $comandoGlasgow->bindParam(':resposta_verbal', $respostaVerbal);
    $comandoGlasgow->bindParam(':total_gcs', $totalGCS);
    $comandoGlasgow->bindParam(':idAvaliacaoGlasgowMenor', $idAvaliacaoGlasgowMenor);

    $resultadoGlasgow = $comandoGlasgow->execute();
    //______________________________________________________________//

    // SINAIS VITAIS
    //______________________________________________________________//
    $pressao = $sinaisVitais->pressao;
    $pulso = $sinaisVitais->pulso;
    $respiracao = $sinaisVitais->respiracao;
    $saturacao = $sinaisVitais->saturacao;
    $temperatura = $sinaisVitais->temperatura;
    $perfusao = $sinaisVitais->perfusao;
    $hgtValor = $sinaisVitais->hgtValor;

    // Se o ID dos sinais vitais estiver disponível na sessão ou de qualquer outra fonte
    $idSinaisVitais = $sinais_vitaisTable['id_sinais_vitais']; // Substitua isso pelo método real de obter o ID

    $comandoSinaisVitais = $pdo->prepare("UPDATE sinais_vitais SET 
        pressao_arterial = :pressao,
        pulso = :pulso,
        respiracao = :respiracao,
        saturacao = :saturacao,
        temperatura = :temperatura,
        perfusao = :perfusao,
        hgt = :hgt_valor
        WHERE id_sinais_vitais = :idSinaisVitais");

    $comandoSinaisVitais->bindParam(':pressao', $pressao);
    $comandoSinaisVitais->bindParam(':pulso', $pulso);
    $comandoSinaisVitais->bindParam(':respiracao', $respiracao);
    $comandoSinaisVitais->bindParam(':saturacao', $saturacao);
    $comandoSinaisVitais->bindParam(':temperatura', $temperatura);
    $comandoSinaisVitais->bindParam(':perfusao', $perfusao);
    $comandoSinaisVitais->bindParam(':hgt_valor', $hgtValor);
    $comandoSinaisVitais->bindParam(':idSinaisVitais', $idSinaisVitais);

    $resultadoSinaisVitais = $comandoSinaisVitais->execute();
    //______________________________________________________________//

    // SINAIS E SINTOMAS
    //______________________________________________________________//
    $abdomenSensivelRigido = $sinasSintomas->AbdomenSensivelRigido;
    $afundamentoCranio = $sinasSintomas->AfundamentoCranio;
    $agitacao = $sinasSintomas->Agitacao;
    $amnesia = $sinasSintomas->Amnesia;
    $anginaPeito = $sinasSintomas->AnginaPeito;
    $apneia = $sinasSintomas->Apneia;
    $bradicardia = $sinasSintomas->Bradicardia;
    $bradipneia = $sinasSintomas->Bradipneia;
    $broncoAspirando = $sinasSintomas->BroncoAspirando;
    $cefaleia = $sinasSintomas->Cefaleia;
    $opcaoCianose = $sinasSintomas->opcaoCianose;
    $convulsao = $sinasSintomas->Convulsao;
    $decorticacao = $sinasSintomas->Decorticacao;
    $deformidade = $sinasSintomas->Deformidade;
    $descerebracao = $sinasSintomas->Descerebracao;
    $desmaio = $sinasSintomas->Desmaio;
    $desvioTraqueia = $sinasSintomas->DesvioTraqueia;
    $dispneia = $sinasSintomas->Dispneia;
    $dorLocal = $sinasSintomas->DorLocal;
    $opcaoEdema = $sinasSintomas->opcaoEdema;
    $enfisemaSubcutanea = $sinasSintomas->EnfisemaSubcutanea;
    $estaseJugular = $sinasSintomas->EstaseJugular;
    $facePalida = $sinasSintomas->FacePalida;
    $opcaoHemorragia = $sinasSintomas->opcaoHemorragia;
    $hipertensao = $sinasSintomas->Hipertensao;
    $hipotensao = $sinasSintomas->Hipotensao;
    $nauseasVomitos = $sinasSintomas->NauseasVomitos;
    $nasorogia = $sinasSintomas->Nasorogia;
    $obito = $sinasSintomas->Obito;
    $otorreia = $sinasSintomas->Otorreia;
    $otorracia = $sinasSintomas->Otorracia;
    $ovace = $sinasSintomas->Ovace;
    $opcaoParada = $sinasSintomas->opcaoParada;
    $priaprismo = $sinasSintomas->Priaprismo;
    $pruridoPele = $sinasSintomas->PruridoPele;
    $sede = $sinasSintomas->Sede;
    $sinalBattle = $sinasSintomas->SinalBattle;
    $sinalGuaxinim = $sinasSintomas->SinalGuaxinim;
    $opcaoPupila = $sinasSintomas->opcaoPupila;
    $sudorese = $sinasSintomas->Sudorese;
    $taquipineia = $sinasSintomas->Taquipineia;
    $taquicardiaca = $sinasSintomas->Taquicardiaca;
    $tontura = $sinasSintomas->Tontura;
    $outro = $sinasSintomas->Outro;

    $comandoSinaisSintomas = $pdo->prepare("UPDATE sinais_sintomas SET 
        abdomen_sensivel_rigido = :abdomenSensivelRigido,
        afundamento_de_cranio = :afundamentoCranio,
        agitacao = :agitacao,
        amnesia = :amnesia,
        angina_de_peito = :anginaPeito,
        apneia = :apneia,
        bradicardia = :bradicardia,
        bradipneia = :bradipneia,
        bronco_aspirando = :broncoAspirando,
        cefaleia = :cefaleia,
        convulsao = :convulsao,
        decorticacao = :decorticacao,
        deformidade = :deformidade,
        descerebracao = :descerebracao,
        desmaio = :desmaio,
        desvio_de_traqueia = :desvioTraqueia,
        dispneia = :dispneia,
        dor_local = :dorLocal,
        enfisema_subcutaneo = :enfisemaSubcutanea,
        estase_de_jugular = :estaseJugular,
        face_palida = :facePalida,
        o_v_a_c_e = :ovace,
        prurido_na_pele = :pruridoPele,
        sinal_de_battle = :sinalBattle,
        hipertensao = :hipertensao,
        hipotensao = :hipotensao,
        nauseas_e_vomitos = :nauseasVomitos,
        nasorogia = :nasorogia,
        obito = :obito,
        otorreia = :otorreia,
        otorracia = :otorracia,
        priaprismo = :priaprismo,
        sede = :sede,
        sinal_de_guaxinim = :sinalGuaxinim,
        sudorese = :sudorese,
        taquipineia = :taquipineia,
        taquicardiaca = :taquicardiaca,
        tontura = :tontura,
        cianose = :opcaoCianose,
        edema = :opcaoEdema,
        hemorragia = :opcaoHemorragia,
        parada = :opcaoParada,
        pupila = :opcaoPupila
        WHERE id_sinais_sintomas = :idSinaisSintomas");

    $comandoSinaisSintomas->bindParam(':abdomenSensivelRigido', $abdomenSensivelRigido, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':afundamentoCranio', $afundamentoCranio, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':agitacao', $agitacao, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':amnesia', $amnesia, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':anginaPeito', $anginaPeito, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':apneia', $apneia, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':bradicardia', $bradicardia, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':bradipneia', $bradipneia, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':broncoAspirando', $broncoAspirando, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':cefaleia', $cefaleia, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':convulsao', $convulsao, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':decorticacao', $decorticacao, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':deformidade', $deformidade, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':descerebracao', $descerebracao, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':desmaio', $desmaio, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':desvioTraqueia', $desvioTraqueia, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':dispneia', $dispneia, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':dorLocal', $dorLocal, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':enfisemaSubcutanea', $enfisemaSubcutanea, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':estaseJugular', $estaseJugular, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':facePalida', $facePalida, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':ovace', $ovace, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':pruridoPele', $pruridoPele, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':sinalBattle', $sinalBattle, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':hipertensao', $hipertensao, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':hipotensao', $hipotensao, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':nauseasVomitos', $nauseasVomitos, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':nasorogia', $nasorogia, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':obito', $obito, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':otorreia', $otorreia, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':otorracia', $otorracia, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':priaprismo', $priaprismo, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':sede', $sede, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':sinalGuaxinim', $sinalGuaxinim, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':sudorese', $sudorese, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':taquipineia', $taquipineia, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':taquicardiaca', $taquicardiaca, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':tontura', $tontura, PDO::PARAM_INT);
    $comandoSinaisSintomas->bindParam(':opcaoCianose', $opcaoCianose, PDO::PARAM_STR);
    $comandoSinaisSintomas->bindParam(':opcaoEdema', $opcaoEdema, PDO::PARAM_STR);
    $comandoSinaisSintomas->bindParam(':opcaoHemorragia', $opcaoHemorragia, PDO::PARAM_STR);
    $comandoSinaisSintomas->bindParam(':opcaoParada', $opcaoParada, PDO::PARAM_STR);
    $comandoSinaisSintomas->bindParam(':opcaoPupila', $opcaoPupila, PDO::PARAM_STR);
    $comandoSinaisSintomas->bindParam(':idSinaisSintomas', $sinais_sintomasTable['id_sinais_sintomas'], PDO::PARAM_INT);

    $resultadoSinaisSintomas = $comandoSinaisSintomas->execute();
    //______________________________________________________________//

    // TIPO LOCAL OCORRENCIA
    //______________________________________________________________//
    $tipoOcorrencia = $tipoLocalOcorrencia->tipoOcorrencia;
    $localOcorrencia = $tipoLocalOcorrencia->local;
    //______________________________________________________________//

    // PROBLEMAS ENCONTRADOS
    //______________________________________________________________//
        $opcaoProblema = $problemasEncontrados->opcaoProblema;
        $opcaoObstetrico = $problemasEncontrados->opcaoObstetrico;
        $opcaoTransporte = $problemasEncontrados->transporte;
    //______________________________________________________________//

    // DECISAO TRANSPORTE
    //______________________________________________________________//
    $decisaoTransporte = $decisaoTransporte->decisaoTransporte;
    //______________________________________________________________//

    // FORMA CONDUCAO
    //______________________________________________________________//
    $formaConducao = $formaConducao->formaConducao;
    //______________________________________________________________//
        
    // VITIMA ERA
    //______________________________________________________________//
        $vitimaEra = $vitimaEra->vitimaEra;
    //______________________________________________________________//
    
    // OBJETOS RECOLHIDOS
    //______________________________________________________________//
    $TxtObjetosRecolhidos = $objetosRecolhidos->objetosRecolhidos;
    //______________________________________________________________//

    // OCORRENCIA
    //______________________________________________________________//
    //______________________________________________________________//
    
    $comando = $pdo->prepare("SELECT id_decisao_transporte FROM decisao_transporte WHERE nome='$decisaoTransporte'");
    $comando->execute();
    $resultado = $comando->fetch(PDO::FETCH_ASSOC);
    $idDecisaoTransporte = $resultado['id_decisao_transporte']; // ID DECISAO TRANSPORTE

    $idOpcaoObstetrico = $opcaoObstetrico; // ID OBSTETRICO
    $idTipoOcorrencia = $tipoOcorrencia; // ID TIPO OCORRENCIA
    $idFormaConducao = $formaConducao; // ID FORMA CONDUCAO
    $idTransporte = $opcaoTransporte; // ID TRASNPORTE
    $idVitimaEra = $vitimaEra; // ID VITIMA ERA
    $idProblemasEncontrados = $opcaoProblema; // ID PROBLEMA ENCONTRADO
    $idOcorrencia = $cod;

    // OCORRENCIA
    //______________________________________________________________//
    $comando = $pdo->prepare("UPDATE ocorrencia SET 
        local_ocorrencia = :localOcorrencia,
        id_tipo_ocorrencia = :idTipoOcorrencia,
        id_decisao_transporte = :idDecisaoTransporte,
        id_forma_conducao = :idFormaConducao,
        id_transporte = :idTransporte,
        id_vitima_era = :idVitimaEra,
        id_problemas_encontrados_suspeitos = :idProblemasEncontrados,
        id_obstetrico = :idOpcaoObstetrico,
        objetos_recolhidos = :objetosRecolhidos
        WHERE id_ocorrencia = :idOcorrencia");

    $comando->bindParam(':localOcorrencia', $localOcorrencia);
    $comando->bindParam(':idTipoOcorrencia', $idTipoOcorrencia);
    $comando->bindParam(':idDecisaoTransporte', $idDecisaoTransporte);
    $comando->bindParam(':idFormaConducao', $idFormaConducao);
    $comando->bindParam(':idTransporte', $idTransporte);
    $comando->bindParam(':idVitimaEra', $idVitimaEra);
    $comando->bindParam(':idProblemasEncontrados', $idProblemasEncontrados);
    $comando->bindParam(':idOpcaoObstetrico', $idOpcaoObstetrico);
    $comando->bindParam(':objetosRecolhidos', $TxtObjetosRecolhidos);
    $comando->bindParam(':idOcorrencia', $idOcorrencia); // Substitua isso pelo método real de obter o ID da ocorrência

    $resultadoOcorrencia = $comando->execute();  
    //______________________________________________________________//

    echo("<script> 
        alert('FORMULÁRIO MODIFICADO');
        window.location.href = '../telas/historicoDeOcorrencia.php';
        </script>");

?>  