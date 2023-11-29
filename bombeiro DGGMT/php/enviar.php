<?php 
    include("../conecta.php");
    include("classes.php");

    session_start();

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


    // PACIENTE
    //______________________________________________________________//
        $nomePaciente = $paciente->nomePaciente;
        $sobrenomePaciente = $paciente->sobrenomePaciente;
        $idadePaciente = $paciente->idadePaciente;
        $cpfRgPaciente = $paciente->cpfRgPaciente;
        $sexo = $paciente->sexo;
        $nomeAcompanhante = $paciente->nomeAcompanhante;
        $idadeAcompanhante = $paciente->idadeAcompanhante;

        $comando = $pdo->prepare("INSERT INTO paciente VALUES(NULL, '$nomePaciente', '$sobrenomePaciente', $idadePaciente, '$cpfRgPaciente', '$sexo', '$nomeAcompanhante', $idadeAcompanhante)");
        $resultado = $comando->execute();
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

    // GLASGOW
    //______________________________________________________________//
        $aberturaOcular = $glasgow->aberturaOcular;
        $respostaMotora = $glasgow->respostaMotora;
        $respostaVerbal = $glasgow->respostaVerbal;
        $totalGCS = $glasgow->gcsTotal;

        $comando = $pdo->prepare("INSERT INTO avaliacao_glasgow_menor VALUES(NULL, '$aberturaOcular', '$respostaVerbal', '$respostaMotora', $totalGCS)");
        $resultado = $comando->execute();
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

        $comando = $pdo->prepare("INSERT INTO sinais_vitais VALUES(NULL, '$pressao', '$pulso', '$saturacao', '$temperatura', '$perfusao', '$respiracao', '$hgtValor' )");
        $resultado = $comando->execute();
    //______________________________________________________________//

    // DECISAO TRANSPORTE
    //______________________________________________________________//
        $decisaoTransporte = $decisaoTransporte->decisaoTransporte;
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

        $comando = $pdo->prepare("INSERT INTO sinais_sintomas VALUES(
            NULL, :abdomenSensivelRigido, :afundamentoCranio, :agitacao, :amnesia, :anginaPeito, :apneia, :bradicardia, 
            :bradipneia, :broncoAspirando, :cefaleia, :convulsao, :decorticacao, :deformidade, :descerebracao,
            :desmaio, :desvioTraqueia, :dispneia, :dorLocal, :enfisemaSubcutanea, :estaseJugular, :facePalida,
            :ovace, :pruridoPele, :sinalBattle, :hipertensao, :hipotensao, :nauseasVomitos, :nasorogia, :obito,
            :otorreia, :otorracia, :priaprismo, :sede, :sinalGuaxinim, :sudorese, :taquipineia, :taquicardiaca,
            :tontura, :opcaoCianose, :opcaoEdema, :opcaoHemorragia, :opcaoParada, :opcaoPupila )"
        );
        
        $comando->bindParam(':abdomenSensivelRigido', $abdomenSensivelRigido, PDO::PARAM_INT);
        $comando->bindParam(':afundamentoCranio', $afundamentoCranio, PDO::PARAM_INT);
        $comando->bindParam(':agitacao', $agitacao, PDO::PARAM_INT);
        $comando->bindParam(':amnesia', $amnesia, PDO::PARAM_INT);
        $comando->bindParam(':anginaPeito', $anginaPeito, PDO::PARAM_INT);
        $comando->bindParam(':apneia', $apneia, PDO::PARAM_INT);
        $comando->bindParam(':bradicardia', $bradicardia, PDO::PARAM_INT);
        $comando->bindParam(':bradipneia', $bradipneia, PDO::PARAM_INT);
        $comando->bindParam(':broncoAspirando', $broncoAspirando, PDO::PARAM_INT);
        $comando->bindParam(':cefaleia', $cefaleia, PDO::PARAM_INT);
        $comando->bindParam(':convulsao', $convulsao, PDO::PARAM_INT);
        $comando->bindParam(':decorticacao', $decorticacao, PDO::PARAM_INT);
        $comando->bindParam(':deformidade', $deformidade, PDO::PARAM_INT);
        $comando->bindParam(':descerebracao', $descerebracao, PDO::PARAM_INT);
        $comando->bindParam(':desmaio', $desmaio, PDO::PARAM_INT);
        $comando->bindParam(':desvioTraqueia', $desvioTraqueia, PDO::PARAM_INT);
        $comando->bindParam(':dispneia', $dispneia, PDO::PARAM_INT);
        $comando->bindParam(':dorLocal', $dorLocal, PDO::PARAM_INT);
        $comando->bindParam(':enfisemaSubcutanea', $enfisemaSubcutanea, PDO::PARAM_INT);
        $comando->bindParam(':estaseJugular', $estaseJugular, PDO::PARAM_INT);
        $comando->bindParam(':facePalida', $facePalida, PDO::PARAM_INT);
        $comando->bindParam(':ovace', $ovace, PDO::PARAM_INT);
        $comando->bindParam(':pruridoPele', $pruridoPele, PDO::PARAM_INT);
        $comando->bindParam(':sinalBattle', $sinalBattle, PDO::PARAM_INT);
        $comando->bindParam(':hipertensao', $hipertensao, PDO::PARAM_INT);
        $comando->bindParam(':hipotensao', $hipotensao, PDO::PARAM_INT);
        $comando->bindParam(':nauseasVomitos', $nauseasVomitos, PDO::PARAM_INT);
        $comando->bindParam(':nasorogia', $nasorogia, PDO::PARAM_INT);
        $comando->bindParam(':obito', $obito, PDO::PARAM_INT);
        $comando->bindParam(':otorreia', $otorreia, PDO::PARAM_INT);
        $comando->bindParam(':otorracia', $otorracia, PDO::PARAM_INT);
        $comando->bindParam(':priaprismo', $priaprismo, PDO::PARAM_INT);
        $comando->bindParam(':sede', $sede, PDO::PARAM_INT);
        $comando->bindParam(':sinalGuaxinim', $sinalGuaxinim, PDO::PARAM_INT);
        $comando->bindParam(':sudorese', $sudorese, PDO::PARAM_INT);
        $comando->bindParam(':taquipineia', $taquipineia, PDO::PARAM_INT);
        $comando->bindParam(':taquicardiaca', $taquicardiaca, PDO::PARAM_INT);
        $comando->bindParam(':tontura', $tontura, PDO::PARAM_INT);
        $comando->bindParam(':opcaoCianose', $opcaoCianose, PDO::PARAM_STR);
        $comando->bindParam(':opcaoEdema', $opcaoEdema, PDO::PARAM_STR);
        $comando->bindParam(':opcaoHemorragia', $opcaoHemorragia, PDO::PARAM_STR);
        $comando->bindParam(':opcaoParada', $opcaoParada, PDO::PARAM_STR);
        $comando->bindParam(':opcaoPupila', $opcaoPupila, PDO::PARAM_STR);
        
        $resultado = $comando->execute();
        

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
        $objetosRecolhidos = $objetosRecolhidos->objetosRecolhidos;
    //______________________________________________________________//

    // OCORRENCIA
    //______________________________________________________________//
        $idUsuario = $_SESSION['user']; // ID BOMBEIRO

        $comando = $pdo->prepare("SELECT MAX(id_paciente) FROM paciente");
        $comando->execute();
        $resultado = $comando->fetch(PDO::FETCH_ASSOC);
        $idPaciente = $resultado['MAX(id_paciente)']; // ID PACIENTE
        
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
        $dataAtual = date("Y-m-d H:i:s");
        $comando = $pdo->prepare("INSERT INTO ocorrencia 
        VALUES(
            NULL, 
            :localOcorrencia,
            :dataAtual,
            :idUsuario,
            :idPaciente,
            :idTipoOcorrencia,
            :idDecisaoTransporte,
            :idFormaConducao,
            :idTransporte,
            :idVitimaEra,
            :idProblemasEncontrados,
            :idOpcaoObstetrico,
            :objetosRecolhidos,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        )");
    
        $comando->bindParam(':localOcorrencia', $localOcorrencia);
        $comando->bindParam(':dataAtual', $dataAtual);
        $comando->bindParam(':idUsuario', $idUsuario);
        $comando->bindParam(':idPaciente', $idPaciente);
        $comando->bindParam(':idTipoOcorrencia', $idTipoOcorrencia);
        $comando->bindParam(':idDecisaoTransporte', $idDecisaoTransporte);
        $comando->bindParam(':idFormaConducao', $idFormaConducao);
        $comando->bindParam(':idTransporte', $idTransporte);
        $comando->bindParam(':idVitimaEra', $idVitimaEra);
        $comando->bindParam(':idProblemasEncontrados', $idProblemasEncontrados);
        $comando->bindParam(':objetosRecolhidos', $objetosRecolhidos);
        $comando->bindParam(':idOpcaoObstetrico', $idOpcaoObstetrico);
        
        $resultado = $comando->execute();
    
        
        $comando = $pdo->prepare("SELECT MAX(id_ocorrencia) FROM ocorrencia");
        $comando->execute();
        $resultado = $comando->fetch(PDO::FETCH_ASSOC);
        $idOcorrencia = $resultado['MAX(id_ocorrencia)']; // ID OCORRENCIA
        $comando = $pdo->prepare("SELECT MAX(id_glasgow_menor) FROM avaliacao_glasgow_menor");
        $comando->execute();
        $resultado = $comando->fetch(PDO::FETCH_ASSOC);
        $idGlasgowMenor = $resultado['MAX(id_glasgow_menor)']; // ID GlasgowMenor

        $comando = $pdo->prepare("INSERT INTO ocorrencia_avaliacao_glasgowmenor VALUES( $idOcorrencia, $idGlasgowMenor )");
        $comando->execute();

        $comando = $pdo->prepare("SELECT MAX(id_sinais_sintomas) FROM sinais_sintomas");
        $comando->execute();
        $resultado = $comando->fetch(PDO::FETCH_ASSOC);
        $idSinaisSintomas = $resultado['MAX(id_sinais_sintomas)']; // ID SinaisSintomas

        $comando = $pdo->prepare("SELECT MAX(id_sinais_vitais) FROM sinais_vitais");
        $comando->execute();
        $resultado = $comando->fetch(PDO::FETCH_ASSOC);
        $idSinaisVitais = $resultado['MAX(id_sinais_vitais)']; // ID SinaisVitais

        $comando = $pdo->prepare("INSERT INTO ocorrencia_sinais_sintomas VALUES( $idSinaisSintomas, $idOcorrencia )");
        $comando->execute();

        $comando = $pdo->prepare("INSERT INTO ocorrencia_sinais_vitais VALUES( $idOcorrencia, $idSinaisVitais )");
        $comando->execute();
        

        $tipo_user = $_SESSION['id_tipo'];

        if($tipo_user == 2) {
            header('Location: ../telas/telaInicialAdmin.php');
            echo("<script> alert('FORMULÁRIO ENVIADO'); </script>");
        } else {
            header('Location: ../telas/telaInicial.php');
        }

?>  