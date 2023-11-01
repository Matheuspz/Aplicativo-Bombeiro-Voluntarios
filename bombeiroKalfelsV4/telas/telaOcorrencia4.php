<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Ocorrência</title>
    <link rel="stylesheet" href="../css/telaOcorrencia4.css">
</head>
<body>
    <header>
        <img src="../img/logo_grande.png" alt="logoNOAR">
        <h1>Associação Humanitária de Busca Salvamento Aéreo e Resgate</h1>
        <h1 class="cellphone">AHBSAR</h1>
        <div class="menu">
            <div class="menu_burguer"></div>
            <nav class="hidden_nav">
                <ul>
                    <li><a href="telaOcorrencia3.php">Voltar</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <form action="">
        <main>
            <section class="upperSection">
                <aside class="leftAside">
                    <h1>Forma de Condução</h1>
                    <div class="formaDeConducaoGrid">
                        <div class="formaDeConducaoCell">
                            <input type="radio" name="formaDeConducao" id="">
                            <label for="">Deitada</label>
                        </div>
                        <div class="formaDeConducaoCell">
                            <input type="radio" name="formaDeConducao" id="">
                            <label for="">Semi-Sentada</label>
                        </div>
                        <div class="formaDeConducaoCell">
                            <input type="radio" name="formaDeConducao" id="">
                            <label for="">Sentada</label>
                        </div>
                    </div>
                </aside>
                <aside class="rightAside">
                    <h1>A Vítima era</h1>
                    <div class="vitimaGrid">
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="">
                            <label for="">Ciclista</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="">
                            <label for="">Condutor carro</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="">
                            <label for="">Condutor moto</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="">
                            <label for="">Clinico</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="">
                            <label for="">Sentada</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="">
                            <label for="">Trauma</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="">
                            <label for="">Pas. bco. frente</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="">
                            <label for="">Pas. bco. trás</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="">
                            <label for="">Pas. moto</label>
                        </div>
                        <div class="vitimaCell">
                            <input type="radio" name="vitima" id="">
                            <label for="">Pedestre</label>
                        </div>
                    </div>
                </aside>
            </section>
            <section class="lowerSection">
                <h1>Objetos Recolhidos</h1>
                <textarea class="custom-textarea" placeholder="Digite seu texto aqui"></textarea>
            </section>
            <a href="#"><input type="submit" class="btn" value="Salvar e Avançar"></a>
        </main>
    </form>
</body>
<script src="../js/telaOcorrencia.js"></script>
</html>