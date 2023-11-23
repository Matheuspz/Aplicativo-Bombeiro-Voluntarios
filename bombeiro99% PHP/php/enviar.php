<?php 
    include("../conecta.php");
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
        $opcaoTrasnporte = $problemasEncontrados->opcaoTrasnporte;
        $opcaoProblemaOutro = $problemasEncontrados->opcaoProblemaOutro;
    //______________________________________________________________//

    // GLASGOW
    //______________________________________________________________//
        $aberturaOcular = $glasgow->aberturaOcular;
        $respostaMotora = $glasgow->respostaMotora;
        $respostaVerbal = $glasgow->respostaVerbal;
        $totalGCS = $glasgow->totalGCS;

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
        $abdomenSensivelRigido = $sinaisVitais->AbdomenSensivelRigido;
        $afundamentoCranio = $sinaisVitais->AfundamentoCranio;
        $agitacao = $sinaisVitais->Agitacao;
        $amnesia = $sinaisVitais->Amnesia;
        $anginaPeito = $sinaisVitais->AnginaPeito;
        $apneia = $sinaisVitais->Apneia;
        $bradicardia = $sinaisVitais->Bradicardia;
        $bradipneia = $sinaisVitais->Bradipneia;
        $broncoAspirando = $sinaisVitais->BroncoAspirando;
        $cefaleia = $sinaisVitais->Cefaleia;
        $opcaoCianose = $sinaisVitais->opcaoCianose;
        $convulsao = $sinaisVitais->Convulsao;
        $decorticacao = $sinaisVitais->Decorticacao;
        $deformidade = $sinaisVitais->Deformidade;
        $descerebracao = $sinaisVitais->Descerebracao;
        $desmaio = $sinaisVitais->Desmaio;
        $desvioTraqueia = $sinaisVitais->DesvioTraqueia;
        $dispneia = $sinaisVitais->Dispneia;
        $dorLocal = $sinaisVitais->DorLocal;
        $opcaoEdema = $sinaisVitais->opcaoEdema;
        $enfisemaSubcutanea = $sinaisVitais->EnfisemaSubcutanea;
        $estaseJugular = $sinaisVitais->EstaseJugular;
        $facePalida = $sinaisVitais->FacePalida;
        $opcaoHemorragia = $sinaisVitais->opcaoHemorragia;
        $hipertensao = $sinaisVitais->Hipertensao;
        $hipotensao = $sinaisVitais->Hipotensao;
        $nauseasVomitos = $sinaisVitais->NauseasVomitos;
        $nasorogia = $sinaisVitais->Nasorogia;
        $obito = $sinaisVitais->Obito;
        $otorreia = $sinaisVitais->Otorreia;
        $otorracia = $sinaisVitais->Otorracia;
        $ovace = $sinaisVitais->Ovace;
        $opcaoParada = $sinaisVitais->opcaoParada;
        $priaprismo = $sinaisVitais->Priaprismo;
        $pruridoPele = $sinaisVitais->PruridoPele;
        $sede = $sinaisVitais->Sede;
        $sinalBattle = $sinaisVitais->SinalBattle;
        $sinalGuaxinim = $sinaisVitais->SinalGuaxinim;
        $opcaoPupila = $sinaisVitais->opcaoPupila;
        $sudorese = $sinaisVitais->Sudorese;
        $taquipineia = $sinaisVitais->Taquipineia;
        $taquicardiaca = $sinaisVitais->Taquicardiaca;
        $tontura = $sinaisVitais->Tontura;
        $outro = $sinaisVitais->Outro;

        $comando = $pdo->prepare("INSERT INTO sinais_sintomas VALUES(
        $abdomenSensivelRigido,'',$agitacao,
        $amnesia,$anginaPeito,$apneia,$bradicardia,$bradipneia,
        $broncoAspirando,$cefaleia,$opcaoCianose,$convulsao,$decorticacao,
        $deformidade,$descerebracao,$desmaio,$desvioTraqueia,$dispneia,$dorLocal,
        $opcaoEdema,$enfisemaSubcutanea,$estaseJugular,$facePalida,$opcaoHemorragia,
        $hipertensao,$hipotensao,$nauseasVomitos,$nasorogia,$obito,$otorreia,$otorracia,
        $ovace,$opcaoParada,$priaprismo,$pruridoPele,$sede,$sinalBattle,$sinalGuaxinim,$opcaoPupila,
        $sudorese,$taquipineia,$taquicardiaca,$tontura,$outro)");
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
        
        $idTipoOcorrencia = $tipoOcorrencia; // ID TIPO OCORRENCIA
        $idDecisaoTrasnporte = $decisaoTransporte; // ID DECISAO TRANSPORTE
        $idFormaConducao = $formaConducao; // ID FORMA CONDUCAO
        $idTransporte = $opcaoTrasnporte; // ID TRASNPORTE
        $idVitimaEra = $vitimaEra; // ID VITIMA ERA
        $idProblemasEncontrados = $problemasEncontrados; // ID PROBLEMA ENCONTRADO
        $dataAtual = date("Y-m-d H:i:s");

        $comando = $pdo->prepare("INSERT INTO ocorrencia VALUES(
        NULL, 
        '$localOcorrencia',
        '$dataAtual',
        $idUsuario,
        $idPaciente,
        $idTipoOcorrencia,
        $idDecisaoTrasnporte,
        $idFormaConducao,
        $idTransporte,
        $idvitimaEra,
        $idProblemasEncontrados,
        '$objetosRecolhidos',
        '',
        '',
        '',
        '',
        '')");
        $resultado = $comando->execute();



        header('Location: ../telas/telaInicial.php');
?>  