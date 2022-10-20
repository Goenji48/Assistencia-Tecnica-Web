<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/servico.css">
    <link rel="stylesheet" type="text/css" href="css/button-nav.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <script src="javascript/servico.js" defer></script>
    <title>Assistência Técnica - Servico</title>
</head>

<body background="img/wallpapersden.com_abstract-purple-shape_7680x4320.jpg"">
    <div class="header">
        <div class="linha">

            <!-- logo do site -->
            <header>
                <div class="coluna col12">
                    <h1 class="logo"><img src="video/ezgif.com-gif-maker2.gif" alt="app logo" width="230" id="logo"/>
                    </h1>
                </div>
                <div class="coluna col10">
                        <nav>
							<!-- barra de navegação do site -->
								<a href="home.php" class="btn4 alinhamento">Home</a>
								<a href="agendamento.php" class="btn4 alinhamento">Agendamentos<a>
								<a href="servico.php" class="btn4 alinhamento">Serviço</a>
								<a href="sobre.php" class="btn4 alinhamento">Sobre</a>
								<a href="perfil.php" class="btn4 alinhamento" id="loginNome">Perfil</a>
						</nav>
                </div>
            </header>
        </div>
    </div>
    <div class="card">
        <div class="container" onmouseenter="showDetailsComputer()" onmouseleave="exitDetailsContainer()">
            <h1 >Computadores</h1>
            <img src="img/desktop-256.png" />
            <p>Nós reparamos diferentes componentes de computadores seja placa mãe, placa de video, fonte além da substituição de peças, Para mais detalhes clique aqui.</p></div>
        <div class="container" onmouseenter="showDetailsNotebook()" onmouseleave="exitDetailsContainer()">
            <h1>Notebook</h1>
            <img src="img/laptop.png" alt="">
            <p>Realizamos a substituição de peças, além de uma limpeza preventiva do equipamento, Para mais detalhes clique aqui.</p></div>
        <div class="container" onmouseenter="showDetailsCelulares()" onmouseleave="exitDetailsContainer()">
            <h1>Celulares</h1>
            <img src="img/kindpng_4421026.png" alt="" id="phone-icon"/>
            <p>Realizamos a troca de vários componentes seja a tela, bateria, touch e outros, e em certos casos é possivel realizar o reparo de seus componentes. Para mais detalhes de clique aqui.</p></div>
    </div>
    <div class="card1">
        <div class="container" onmouseenter="showDetailsTelevisores()" onmouseleave="exitDetailsContainer()"><h1>Televisores</h1>
            <img src="img/tv-256.png" alt="">
            <p>Realizamos reparos nas placas lógicas e também em fonte de alimentações, trocamos o painel de led, fazemos a limpeza entre outros... Para saber mais clique aqui.</p></div>
        <div class="container" onmouseenter="showDetailsTablet()" onmouseleave="exitDetailsContainer()"><h1>Tablets</h1>
            <img src="img/tablet-256.png" alt="">
            <p>Realizamos a troca de vários componentes seja a tela, bateria, touch e outros, e em certos casos é possível realizar o reparo de seus componentes. Para mais detalhes clique aqui.
            </p></div>
            <div class="container" onmouseenter="showDetailsEletrodomesticos()" onmouseleave="exitDetailsContainer()"><h1>Eletrodomésticos</h1>
                <img src="img/microwave-icon.png" alt="">
                <p>Realizamos reparos em eletrodomésticos de última geração sejam eles, geladeiras, microondas, fogões, máquinas de lavar entre outros. Para mais detalhes clique aqui</p></div>
    </div>
    <div class="popup-container" id="container">
        <div class="popup-left" id="popup-left-background">
            <div class="popup-right">
                <h1 id="container-title"></h1>
                <p id="container-details"></p>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="linha">
    
            <!-- parte final do site -->
    
            <footer>
        <div class="footer-font">
            <span>&copy; 2022 - Assistência Técnica - Criador Principal: João Luiz - Equipe 3 - TCC - Trabalho Conclusão de Curso - ITB - Brasílio de Flores Azevedo</span>
            <div class="">
            </div>
        </div>
    </footer>
        </div>
    </div>
</body>

</html>