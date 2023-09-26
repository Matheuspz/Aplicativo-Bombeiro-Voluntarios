<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <link rel="stylesheet" href="../css/telaOcorrencia.css">
</head>
<body>
    <header>
        <img src="../img/logo_grande.png" alt="logo noar">
        <h1>Associação Humanitária de Busca Salvamento Aéreo e Resgate</h1>
        <h1 id="cellphone-only">AHBSAR</h1>
    </header>
    <main>

        <form action="" class="form">
            <section class="sec1">
                <div class="clm">
                    <label for="">Nome:</label>
                    <input type="text" name="" id="">
                </div>
                <div class="clm">
                    <label for="">Sobrenome:</label>
                    <input type="text" name="" id="">
                </div>
                <div class="clm">
                    <label for="">Idade:</label>
                    <input type="text" name="" id="">
                </div>
                <div class="clm">
                    <label for="">Telefone:</label>
                    <input type="text" name="" id="">
                </div>
                <div class="clm">
                    <label for="">Sexo:</label>
                    <div class="rw gender">
                        <div class="rw">
                            <input type="radio" name="teste" id="">
                            <label for="">Homem</label>
                        </div>
                        <div class="rw">
                            <input type="radio" name="teste" id="">
                            <label for="">Mulher</label>
                        </div>
                    </div>
                </div>
                <div class="clm">
                    <label for="">CPF/RG:</label>
                    <input type="text" name="" id="">
                </div>
            </section>

            <section class="sec2">
                <div class="clm aside1">
                    <h2>Possui acompanhante?</h2>
                    <div class="rw">
                        <input type="radio" name="peido" id="acompanhanteSim">
                        <label for="acompanhanteSim">Sim</label>
                    </div>
                    <div class="rw">
                        <input type="radio" name="peido" id="acompanhanteNao">
                        <label for="acompanhanteNao">Não</label>
                    </div>
                    <div id="formularioAcompanhante">
                        <input type="text" name="nomeAcompanhante" id="nomeAcompanhante" placeholder="Nome acompanhante">
                        <input type="text" name="idadeAcompanhante" id="idadeAcompanhante" placeholder="Idade acompanhante">
                        <input type="text" name="foneAcompanhante" id="foneAcompanhante" placeholder="Fone acompanhante">
                    </div>
                    <br>
                    <div class="clm">
                        <label for="">Local da Ocorrência</label>
                        <input type="text" name="" id="">
                    </div>
                </div>

                <div class="clm aside2">
                    <h2>TIPO DE OCORRÊNCIA (PRÉ-HOSPITALAR) </h2>
                    <div class="rw tiposDeDano">
                        <div class="clm gap">
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Causada por animais</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Com meio de transporte</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Desmoronamento / Deslizamento</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Emergência médica</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Queda de Altura 2M</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Tentativa de Suicídio</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Queda própria altura</label>
                            </div>
                        </div>
                        <div class="clm gap">
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Afogamento</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Agressão</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Atropelamento</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Choque Elétrico</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Desabamento</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Domêstico</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Esportiva</label>
                            </div>
                        </div>
                        <div class="clm gap">
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Intoxicação</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Queda Bicicleta</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Queda Moto</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Queda Nível <2M</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Trabalho</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Transferência</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <input type="text" name="" id="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <button class="avancar">SALVAR E AVANÇAR</button>
        </form>


        <!-- <div class="corpo">
            <img src="../img/corpo.png" alt="corpo">
            <div class="check-cabeca"></div>

            <div class="check-ombroEsquerdo"></div>
            <div class="check-ombroDireito"></div>

            <div class="check-peito"></div>

            <div class="check-abdomen"></div>

            <div class="check-pelvis"></div>

            <div class="check-quadEsquerdo"></div>
            <div class="check-quadDireito"></div>

            <div class="check-tibiaEsquerda"></div>
            <div class="check-tibiaDireita"></div>

            <div class="check-peEsquerdo"></div>
            <div class="check-peDireito"></div>

            <div class="check-bracoEsquerdo"></div>
            <div class="check-bracoDireito"></div>

            <div class="check-anteEsquerdo"></div>
            <div class="check-anteDireito"></div>

            <div class="check-maoEsquerda"></div>
            <div class="check-maoDireita"></div>
        </div> -->
    </main>
</body>
<script>
    const acompanhanteSim = document.getElementById('acompanhanteSim');
    const acompanhanteNao = document.getElementById('acompanhanteNao');
    const formularioAcompanhante = document.getElementById('formularioAcompanhante');

    acompanhanteSim.addEventListener('change', function () {
        if (acompanhanteSim.checked) {
            formularioAcompanhante.style.display = 'flex';
        } else {
            formularioAcompanhante.style.display = 'none';
        }
    });

    acompanhanteNao.addEventListener('change', function () {
        if (acompanhanteNao.checked) {
            formularioAcompanhante.style.display = 'none';
        }
    });
</script>
</html>