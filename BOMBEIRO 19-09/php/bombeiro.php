<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../css/bombeiro.css">
</head>

<body>
    <div class="header"><img src="../img/logo_grande.png" class="img">
        <div class="texto1">Associação Humanitária de Busca Salvamento Aéreo e Resgate</div>
    </div>
    
    <div class="centro">
        <form action="" class="a">
            <div style="display:flex; flex-direction:column; align-items:center; justify-content:center;">
                <div class="espaco" style="height: 5vmin;"></div>

                <div class="parte1">
                        <div class="a">
                            <label>Nome:
                                <br>
                                <input type="text" name="nome" maxlength="15" class="labell">
                            </label>
                        </div>
                        <div class="a">
                            <label>Sobrenome:
                                <br>
                                <input type="text" name="nome" maxlength="15" class="labell">
                            </label>
                        </div>
                        <div class="a">
                            <label>Idade:
                                <br>
                                <input type="text" name="nome" maxlength="15" class="labell">
                            </label>
                        </div>
                        <div class="a">
                            <label>Telefone:
                                <br>
                                <input type="text" name="nome" maxlength="15" class="labell">
                            </label>
                        </div>
                        <div class="b">
                            <label>Sexo Biológico:
                                <br>
                                <div style="width:100%">
                                    <input type="radio" name="sexo" class="" required> Masculino        
                                    <input type="radio" name="sexo" class="sexo" required> Feminino
                                </div>
                            </label>
                        </div>
                        <div class="a">
                            <label>CPF/RG:
                                <br>
                                <input type="text" name="nome" maxlength="15" class="labell">
                            </label>
                        </div>
                </div>

                <div class="espaco" style="height: 5vmin;"></div>

                <div class="linha2">
                    <div class="parte2">
                        <div class="caixatopico">
                            <br>
                            <label>Possui Acompanhante?
                                <br>
                                <input type="radio" id="nao" name="acompanhante" class="acompanhante"
                                    onclick="showAcompanhanteInput()" checked> Não<br>
                                <input type="radio" id="sim" name="acompanhante" class="acompanhante"
                                    onclick="showAcompanhanteInput()">Sim
                            </label>
                            <div class="acompanhante">
                                <input type="text" name="nomeacomp" class="acompanhantetexto" max="20"
                                    placeholder="Nome Acompanhante">
                                <br>
                                <input type="number" name="idadeacomp" class="acompanhantetexto2" maxlength="3" min="0"
                                    placeholder="Idade Acompanhante">
                                <br>
                                <input type="number" name="foneacomp" class="acompanhantetexto3" maxlength="13"
                                    placeholder="Fone Acompanhante">
                            </div>
                        </div>
                    </div>

                    <div class="tipoOcorrencia">
                        
                    </div>
                </div>
            </div>
        </form>
    </div>
    
</body>
<script>

    function showAcompanhanteInput() {
        const acompanhanteInput = document.querySelector('.acompanhantetexto');
        const acompanhanteInput2 = document.querySelector('.acompanhantetexto2');
        const acompanhanteInput3 = document.querySelector('.acompanhantetexto3');
        const Sim = document.querySelector('input[id="sim"]:checked');
        const Nao = document.querySelector('input[id="nao"]:checked');

        if (Sim) {
            acompanhanteInput.style.display = 'block';
            acompanhanteInput2.style.display = 'block';
            acompanhanteInput3.style.display = 'block';

        } else {
            acompanhanteInput.style.display = 'none';
            acompanhanteInput2.style.display = 'none';
            acompanhanteInput3.style.display = 'none';
        }
    }
</script>


</html>