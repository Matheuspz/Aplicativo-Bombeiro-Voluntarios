<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <link rel="stylesheet" href="../css/telaInicial.css">
</head>
<body>
    <nav class="hidden_nav">
        <ul>
            <li><a href="index.php">VOLTAR</a></li>
        </ul>
    </nav>
    <header>
        <div class="logo">
            <img src="../img/logo_grande.png" alt="logo noar">
            <h1>Associação Humanitária de Busca Salvamento Aéreo e Resgate</h1>
            <h1 id="cellphone-only">AHBSAR</h1>
        </div>
        <div class="menu">
            <div class="menu_burguer"></div>
        </div>
    </header>
    <main>
        <section>
            <a href="telaOcorrencia.php">
                <button> Nova Ocorrência </button>
            </a>
        </section>
        <hr>
        <section>
            <button> Histórico de Formulários </button>
        </section>
        <hr>
        <section>
            <a href="cadastroDoAdmin.php"><button> Cadastrar </button></a>
        </section>
    </main>
</body>
<script>
    document.querySelector(".menu").onclick = () => {
    let nav = document.querySelector(".hidden_nav");
    nav.classList.toggle("open");
    nav.style.transition = ".5s cubic-bezier(.17,.67,.46,.97)";
    
    let menuBurg = document.querySelector(".menu_burguer");
    menuBurg.classList.toggle("open");
    menuBurg.style.transition = ".5s cubic-bezier(.17,.67,.46,.97)";
    };
</script>
</html>