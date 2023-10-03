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


