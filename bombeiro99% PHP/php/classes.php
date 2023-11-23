<?php
    include("../conecta.php");

    class Paciente {

        public string $nomePaciente;
        public string $sobrenomePaciente;
        public int $idadePaciente;
        public string $cpfRgPaciente;
        public string $sexo;
        public ?string $nomeAcompanhante;
        public ?int $idadeAcompanhante;

        public function __construct(
            string $nomePaciente,
            string $sobrenomePaciente,
            int $idadePaciente,
            string $cpfRgPaciente,
            string $sexo,
            ?string $nomeAcompanhante,
            ?int $idadeAcompanhante
        ) {
            $this->nomePaciente = $nomePaciente;
            $this->sobrenomePaciente = $sobrenomePaciente;
            $this->idadePaciente = $idadePaciente;
            $this->cpfRgPaciente = $cpfRgPaciente;
            $this->sexo = $sexo;
            $this->nomeAcompanhante = $nomeAcompanhante;
            $this->idadeAcompanhante = $idadeAcompanhante;
        }
    }
    

    class TipoOcorrencia {
        public int $tipoOcorrencia;
        public string $local;

        public function __construct(
            int $tipoOcorrencia, 
            string $local,
        ) {
            $this->tipoOcorrencia = $tipoOcorrencia;
            $this->$local;
        }
    }
    

    class ProblemasEncontrados {

        public ?int $opcaoProblema;
        public ?int $opcaoObstetrico;
        public ?int $transporte;
        public ?string $opcaoProblemaOutro;
    
        public function __construct(
            ?int $opcaoProblema,
            ?int $opcaoObstetrico,
            ?int $transporte,
            ?string $opcaoProblemaOutro
        ) {
            $this->opcaoProblema = $opcaoProblema;
            $this->opcaoObstetrico = $opcaoObstetrico;
            $this->transporte = $transporte;
            $this->opcaoProblemaOutro = $opcaoProblemaOutro;
        }
    }
    

    class GlasGow {

        public string $aberturaOcular;
        public string $respostaMotora;
        public string $respostaVerbal;
        public int $gcsTotal;
    
        public function __construct(
            string $aberturaOcular,
            string $respostaMotora,
            string $respostaVerbal,
            int $gcsTotal
        ) {
            $this->aberturaOcular = $aberturaOcular;
            $this->respostaMotora = $respostaMotora;
            $this->respostaVerbal = $respostaVerbal;
            $this->gcsTotal = $gcsTotal;
        }
    }

    /* class localizacaoTraumas */

    class SinaisVitais {

        public string $pressao;
        public int $pulso;
        public int $respiracao;
        public int $saturacao;
        public int $temperatura;
        public string $perfusao;
        public int $hgtValor;
    
        public function __construct(
            string $pressao,
            int $pulso,
            int $respiracao,
            int $saturacao,
            int $temperatura,
            string $perfusao,
            int $hgtValor
        ) {
            $this->pressao = $pressao;
            $this->pulso = $pulso;
            $this->respiracao = $respiracao;
            $this->saturacao = $saturacao;
            $this->temperatura = $temperatura;
            $this->perfusao = $perfusao;
            $this->hgtValor = $hgtValor;
        }
    }
    
    class DecisaoTransporte {

        public int $decisaoTransporte;
    
        public function __construct(int $decisaoTransporte) {
            $this->decisaoTransporte = $decisaoTransporte;
        }
    }    

    class SinaisSintomas {

        public ?int $AbdomenSensivelRigido;
        public ?int $AfundamentoCranio;
        public ?int $Agitacao;
        public ?int $Amnesia;
        public ?int $AnginaPeito;
        public ?int $Apneia;
        public ?int $Bradicardia;
        public ?int $Bradipneia;
        public ?int $BroncoAspirando;
        public ?int $Cefaleia;
        public ?int $opcaoCianose;
        public ?int $Convulsao;
        public ?int $Decorticacao;
        public ?int $Deformidade;
        public ?int $Descerebracao;
        public ?int $Desmaio;
        public ?int $DesvioTraqueia;
        public ?int $Dispneia;
        public ?int $DorLocal;
        public ?int $opcaoEdema;
        public ?int $EnfisemaSubcutanea;
        public ?int $EstaseJugular;
        public ?int $FacePalida;
        public ?int $opcaoHemorragia;
        public ?int $Hipertensao;
        public ?int $Hipotensao;
        public ?int $NauseasVomitos;
        public ?int $Nasorogia;
        public ?int $Obito;
        public ?int $Otorreia;
        public ?int $Otorracia;
        public ?int $Ovace;
        public ?int $opcaoParada;
        public ?int $Priaprismo;
        public ?int $PruridoPele;
        public ?int $Sede;
        public ?int $SinalBattle;
        public ?int $SinalGuaxinim;
        public ?int $opcaoPupila;
        public ?int $Sudorese;
        public ?int $Taquipineia;
        public ?int $Taquicardiaca;
        public ?int $Tontura;
        public ?int $Outro;
    
        public function __construct(
            ?int $AbdomenSensivelRigido,
            ?int $AfundamentoCranio,
            ?int $Agitacao,
            ?int $Amnesia,
            ?int $AnginaPeito,
            ?int $Apneia,
            ?int $Bradicardia,
            ?int $Bradipneia,
            ?int $BroncoAspirando,
            ?int $Cefaleia,
            ?int $opcaoCianose,
            ?int $Convulsao,
            ?int $Decorticacao,
            ?int $Deformidade,
            ?int $Descerebracao,
            ?int $Desmaio,
            ?int $DesvioTraqueia,
            ?int $Dispneia,
            ?int $DorLocal,
            ?int $opcaoEdema,
            ?int $EnfisemaSubcutanea,
            ?int $EstaseJugular,
            ?int $FacePalida,
            ?int $opcaoHemorragia,
            ?int $Hipertensao,
            ?int $Hipotensao,
            ?int $NauseasVomitos,
            ?int $Nasorogia,
            ?int $Obito,
            ?int $Otorreia,
            ?int $Otorracia,
            ?int $Ovace,
            ?int $opcaoParada,
            ?int $Priaprismo,
            ?int $PruridoPele,
            ?int $Sede,
            ?int $SinalBattle,
            ?int $SinalGuaxinim,
            ?int $opcaoPupila,
            ?int $Sudorese,
            ?int $Taquipineia,
            ?int $Taquicardiaca,
            ?int $Tontura,
            ?int $Outro

        ) {
            $this->AbdomenSensivelRigido = $AbdomenSensivelRigido;
            $this->AfundamentoCranio = $AfundamentoCranio;
            $this->Agitacao = $Agitacao;
            $this->Amnesia = $Amnesia;
            $this->AnginaPeito = $AnginaPeito;
            $this->Apneia = $Apneia;
            $this->Bradicardia = $Bradicardia;
            $this->Bradipneia = $Bradipneia;
            $this->BroncoAspirando = $BroncoAspirando;
            $this->Cefaleia = $Cefaleia;
            $this->opcaoCianose = $opcaoCianose;
            $this->Convulsao = $Convulsao;
            $this->Decorticacao = $Decorticacao;
            $this->Deformidade = $Deformidade;
            $this->Descerebracao = $Descerebracao;
            $this->Desmaio = $Desmaio;
            $this->DesvioTraqueia = $DesvioTraqueia;
            $this->Dispneia = $Dispneia;
            $this->DorLocal = $DorLocal;
            $this->opcaoEdema = $opcaoEdema;
            $this->EnfisemaSubcutanea = $EnfisemaSubcutanea;
            $this->EstaseJugular = $EstaseJugular;
            $this->FacePalida = $FacePalida;
            $this->opcaoHemorragia = $opcaoHemorragia;
            $this->Hipertensao = $Hipertensao;
            $this->Hipotensao = $Hipotensao;
            $this->NauseasVomitos = $NauseasVomitos;
            $this->Nasorogia = $Nasorogia;
            $this->Obito = $Obito;
            $this->Otorreia = $Otorreia;
            $this->Otorracia =$Otorracia;
            $this->Ovace = $Ovace;
            $this->opcaoParada = $opcaoParada;
            $this->Priaprismo = $Priaprismo;
            $this->PruridoPele = $PruridoPele;
            $this->Sede = $Sede;
            $this->SinalBattle = $SinalBattle;
            $this->SinalGuaxinim = $SinalGuaxinim;
            $this->opcaoPupila = $opcaoPupila;
            $this->Sudorese = $Sudorese;
            $this->Taquipineia = $Taquipineia;
            $this->Taquicardiaca = $Taquicardiaca;
            $this->Tontura = $Tontura;
            $this->Outro = $Outro;
        }
    }

    class FormaConducao {
        public int $formaConducao;

        public function __construct(int $formaConducao)
        {
            $this->formaConducao = $formaConducao;
        }
    }

    class VitimaEra {

        public int $vitimaEra;

        public function __construct(int $vitimaEra) {
            $this->vitimaEra = $vitimaEra;
        }
    }

    class ObjetosRecolhidos {

        public string $objetosRecolhidos;

        public function __construct(string $objetosRecolhidos) {
            $this->objetosRecolhidos = $objetosRecolhidos;
        }
    }

?>  