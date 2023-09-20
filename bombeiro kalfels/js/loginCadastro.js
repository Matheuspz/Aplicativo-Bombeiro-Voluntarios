const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#id_password');

togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('eye-off-outline');
});

function togglePasswordVisibility() {
    const togglePasswordIcon = document.getElementById('togglePassword');
    if (togglePasswordIcon.name === 'eye-off-outline') {
        togglePasswordIcon.name = 'eye-outline';
    } else {
        togglePasswordIcon.name = 'eye-off-outline';
    }
}

function lValidar() {
    let regexEmail = /^[a-z0-9]+@[a-z]+\.[a-z]{2,3}$/; // Removed "gm" flag
    let regexSenha = /^.{8,20}$/;

    let lEmailF = document.forms    ["loginForm"]["loginEmail"].value;
    let lSenhaF = document.forms["loginForm"]["loginSenha"].value;

    let lEmail = document.getElementById("loginEmail");
    let lSenha = document.getElementById("loginSenha");

    lEmail.style.backgroundColor = "#ffffff";
    lSenha.style.backgroundColor = "#ffffff";

    let emailVerify = regexEmail.test(lEmailF); // Corrected variable name
    if (!emailVerify) { // Simplified the condition
        lEmail.style.backgroundColor = "#ff9d9d";
        return false;
    } else {
        lEmail.style.backgroundColor = "#9dffba";
    }

    let senhaVerify = regexSenha.test(lSenhaF); // Corrected variable name
    if (!senhaVerify) { // Simplified the condition
        lSenha.style.backgroundColor = "#ff9d9d";
        return false;
    } else {
        lSenha.style.backgroundColor = "#9dffba";
    }
    
    return true; // Added this line to ensure form submission when both email and password are valid
}
