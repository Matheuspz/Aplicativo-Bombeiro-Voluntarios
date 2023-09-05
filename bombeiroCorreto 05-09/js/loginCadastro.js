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