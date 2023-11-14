<?php
    include("../conecta.php");
    session_start();

    class Paciente {

        public $nomePaciente;
        public $sobrenomePaciente;
        public $idadePaciente;
        public $telefonePaciente;
        public $cpfRgPaciente;

        __construct() {
            $this->nomePaciente = $nomePaciente;
            $this->sobrenomePaciente = $sobrenomePaciente;
            $this->idadePaciente = $idadePaciente;
            $this->telefonePaciente = $telefonePaciente;
            $this->cpfRgPaciente = $cpfRgPaciente;
        }
    }

    class tipoOcorrencia {
        
        public $tipoOcorrencia;

        __construct() {
            $this->tipoOcorrencia = $tipoOcorrencia;
        }
    }

    class ProblemasEncontrados {

        public $psiquiatrico;
        public $obstretico;
        public $respiratorio;
        public $transporte;
        public $diabetes;
        public $opcaoProblemaOutro;

        __construct() {
            $this->psiquiatrico = $psiquiatrico;
            $this->obstretico = $obstretico;
            $this->respiratorio = $respiratorio;
            $this->transporte = $transporte;
            $this->diabetes = $diabetes;
            $this->opcaoProblemaOutro = $opcaoProblemaOutro;
        }
    }

    class GlasGow {

        public $aberturaOcular;
        public $respostaMotora;
        public $respostaVernal;
        public $gcsTotal;

        __construct() {
            $this->aberturaOcular = $aberturaOcular;
            $this->respostaMotora = $respostaMotora;
            $this->respostaVerbal = $respostaVernal;
            $this->gcsTotal = $gcsTotal;
        }
    }

    /* class localizacaoTraumas */

    class SinaisVitais {

        public $pressao1;
        public $pressao2;
        public $pulso;
        public $respiracao;
        public $saturacao;
        public $temperatura;
        public $perfusao;
        public $hgtValor;
        public $hgtOpcao;

        __construct() {
            $this->pressao1 = $pressao1;
            $this->pressao2 = $pressao2;
            $this->pulso = $pulso;
            $this->respiracao = $respiracao;
            $this->saturacao = $saturacao;
            $this->temperatura = $temperatura;
            $this->perfusao = $perfusao;
            $this->hgtValor = $hgtValor;
            $this->hgtOpcao = $hgtOpcao;
        }
    }

    class DecisaoTrasnporte {

        public $decisaoTransporte;

        __construct() {
            $this->decisaoTransporte = $decisaoTransporte;
        }
    }

    class SinaisSintomas {
        
        public $AbdomenSensivelRigido;
        public $AfundamentoCranio;
        public $Agitacao;
        public $Amnesia;
        public $AnginaPeito;
        public $Apneia;
        public $Bradicardia;
        public $Bradipneia;
        public $BroncoAspirando;
        public $Cefaleia;
        public $Cianose;
        public $Convulsao;
        public $Decorticacao;
        public $Deformidade;
        public $Descerebracao;
        public $Desmaio;
        public $DesvioTraqueia;
        public $Dispneia;
        public $DorLocal;
        public $Edema;
        public $EnfisemaSubcutanea;
        public $EstaseJugular;
        public $FacePalida;
        public $Hemorragia;
        public $Hipertensao;
        public $Hipotensao;
        public $NauseasVomitos;
        public $Nasorogia;
        public $Obito;
        public $Otorreia;
        public $Otorracia;
        public $Ovace;
        public $Parada;
        public $Priaprismo;
        public $PruridoPele;
        public $Pupilas;
        public $Sede;
        public $SinalBattle;
        public $SinalGuaxinim;
        public $Sudorese;
        public $Taquipineia;
        public $Taquicardiaca;
        public $Tontura;
        public $Outro;

        __construct() {
            $this->AbdomenSensivelRigido = $AbdomenSensivelRigido;
            $this->AfundamentoCranio = $AfundamentoCranio;
            $this->Agitacao = $Agitacao;
            $this->Amnesia =$Amnesia;
            $this->AnginaPeito = $AnginaPeito;
            $this->Apneia = $Apneia;
            $this->Bradicardia = $Bradicardia;
            $this->Bradipneia = $Bradipneia;
            $this->BroncoAspirando = $BroncoAspirando;
            $this->Cefaleia = $Cefaleia;
            $this->Cianose = $Cianose;
            $this->Convulsao = $Convulsao;
            $this->Decorticacao = $Decorticacao;
            $this->Deformidade = $Deformidade;
            $this->Descerebracao = $Descerebracao;
            $this->Desmaio = $Desmaio;
            $this->DesvioTraqueia = $DesvioTraqueia;
            $this->Dispneia = $Dispneia;
            $this->DorLocal = $DorLocal;
            $this->Edema = $Edema;
            $this->EnfisemaSubcutanea = $EnfisemaSubcutanea;
            $this->EstaseJugular = $EstaseJugular;
            $this->FacePalida = $FacePalida;
            $this->Hemorragia = $Hemorragia;
            $this->Hipertensao = $Hipertensao;
            $this->Hipotensao = $Hipotensao;
            $this->NauseasVomitos = $NauseasVomitos;
            $this->Nasorogia = $Nasorogia;
            $this->Obito = $Obito;
            $this->Otorreia = $Otorreia;
            $this->Otorracia =$Otorracia;
            $this->Ovace = $Ovace;
            $this->Parada = $Parada;
            $this->Priaprismo = $Priaprismo;
            $this->PruridoPele = $PruridoPele;
            $this->Pupilas = $Pupilas;
            $this->Sede = $Sede;
            $this->SinalBattle = $SinalBattle;
            $this->SinalGuaxinim = $SinalGuaxinim;
            $this->Sudorese = $Sudorese;
            $this->Taquipineia = $Taquipineia;
            $this->Taquicardiaca = $Taquicardiaca;
            $this->Tontura = $Tontura;
            $this->Outro = $Outro;
        }
    }


















    /*
    $paciente = new Paciente (
        $_POST["nomePaciente"], 
        $_POST["sobrenomePaciente"],
        $_POST["idadePaciente"],
        $_POST["telefonePaciente"],
        $_POST["cpfRgPaciente"],)   
*/


?>  