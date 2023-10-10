function fecharMenu(menu) {
    var menuEscolhido = document.getElementById(menu);
    menuEscolhido.style.display = "none";
}

// Função para fechar um menu específico
function closeMenu(menuId) {
    var menu = document.getElementById(menuId);
    menu.style.display = 'none';
}

// Função para lidar com a alteração de estado da checkbox Obstétrico
document.getElementById('obstetricoCheckbox').addEventListener('change', function() {
    if (this.checked) {
        closeMenu('transporteMenu'); // Fecha o outro menu se estiver aberto
        document.getElementById('obstetricoMenu').style.display = 'flex';
    } else {
        closeMenu('obstetricoMenu');
    }
});

// Função para lidar com a alteração de estado da checkbox Transporte
document.getElementById('transporteCheckbox').addEventListener('change', function() {
    if (this.checked) {
        closeMenu('obstetricoMenu'); // Fecha o outro menu se estiver aberto
        document.getElementById('transporteMenu').style.display = 'flex';
    } else {
        closeMenu('transporteMenu');
    }
});





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




