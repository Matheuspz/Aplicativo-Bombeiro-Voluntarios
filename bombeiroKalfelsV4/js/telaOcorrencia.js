document.querySelector(".menu").onclick = () => {
    let nav = document.querySelector(".hidden_nav");
    nav.classList.toggle("open");
    nav.style.transition = ".5s cubic-bezier(.17,.67,.46,.97)";
    
    let menuBurg = document.querySelector(".menu_burguer");
    menuBurg.classList.toggle("open");
    menuBurg.style.transition = ".5s cubic-bezier(.17,.67,.46,.97)";
};

function toggleDiv(showDiv, checkboxId) {
    var showDivElem = document.querySelector('.' + showDiv);
    var checkboxElem = document.getElementById(checkboxId);

    if (showDivElem && checkboxElem) {
        // Fecha a outra div se estiver aberta
        var allDivs = document.querySelectorAll('.visible');
        allDivs.forEach(function (div) {
            if (div !== showDivElem) {
                div.classList.remove('visible');
            }
        });

        // Alterna a visibilidade da div alvo
        showDivElem.classList.toggle('visible');
    }
}

function fecharDiv(divId) {
    var div = document.querySelector('.' + divId);
    
    if (div) {
        div.classList.remove('visible');
    }
}

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