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

function verificarNumero() {
    const numeroInput = document.getElementById("numeroInput");
    const resultadoSpan = document.getElementById("resultadoSpan");
    const numero = parseFloat(numeroInput.value); // Converte o valor do input para um número de ponto flutuante

    if (isNaN(numero)) {
        resultadoSpan.textContent = "_____";
    } else {
        if (numero > 5) {
            resultadoSpan.textContent = "Maior";
        } else if (numero < 5) {
            resultadoSpan.textContent = "Menor";
        } else {
            resultadoSpan.textContent = "Igual";
        }
    }
}


