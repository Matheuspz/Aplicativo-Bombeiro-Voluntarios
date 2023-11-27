document.querySelector(".menu").onclick = () => {
    let nav = document.querySelector(".hidden_nav");
    nav.classList.toggle("open");
    nav.style.transition = ".5s cubic-bezier(.17,.67,.46,.97)";
    
    let menuBurg = document.querySelector(".menu_burguer");
    menuBurg.classList.toggle("open");
    menuBurg.style.transition = ".5s cubic-bezier(.17,.67,.46,.97)";
    };