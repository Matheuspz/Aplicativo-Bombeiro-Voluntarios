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
    <header>
        <img src="../img/logo_grande.png" alt="logo noar">
        <h1>Associação Humanitária de Busca Salvamento Aéreo e Resgate</h1>
        <h1 id="cellphone-only">AHBSAR</h1>
    </header>
    <main>
        <section>
            <a href="telaOcorrencia.php">
                <button> Nova Ocorrência </button>
            </a>
        </section>
        <hr>
        <section>
            <button  onclick="location.href='../php/logout.php'"> Histórico de Ocorrências </button>
        </section>
    </main>
</body>
</html>