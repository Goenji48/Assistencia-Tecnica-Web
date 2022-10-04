<?php
include("php/protect.php");
$loginName = '';

if(isset($_SESSION)){
	$loginName = $_SESSION['name'];
}
?>

<!DOCTYPE HTML>
	<html lang="pt-br">
	<head>
		<!-- linka o arquivo css no site -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="shortcut icon" href="logo/logo.png" type="image/x-icon">
		<!-- titulo do site -->
		<!-- linka o arquivo javascript no site-->
		<!--<script src="javascript/login.js" defer></script>
		<script src="javascript/conexao.js" defer></script>-->
		<title>Assistência Técnica - Home</title>
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/button-nav.css">
		<meta charset="utf-8">
	</head>
	<body background="img/wallpapersden.com_abstract-purple-shape_7680x4320.jpg">
		<div class="header">
			<div class="linha">

				<!-- logo do site -->

				<header>
					<div class="coluna col8">
						<h1 class="logo"><img src="video/ezgif.com-gif-maker2.gif" alt="this slowpoke moves"  width="230"/></h1>
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
		<div class="linha">
			<section>
				<div class="coluna col3 sidebar content-background content-border cor-paragrafo"
				style="text-align: center;">
					<i><h3>Consertamos:</h3></i>
					<!--<ul class="sem-padding sem-marcador sem-espacamento"> -->
						<p>Computadores</p>
						<p>Eletrodomésticos</p>
						<p>Celulares</p>
						<p>Televisores</p>
						<p>Videogames</p>
						<p>Tablets</p>
						<p>Notebooks</p>
					</ul>
					<i><h4>Outros:</h4></i>
					<!-- <ul class="sem-marcador sem-padding"> -->
						<p>Montagens de Computadores</p>
						<p>Preventiva dos Equipamentos</p>
						<p>Formatação</p>
					</ul>
					<a href="servico.html" class="btnBlue button-border button">Ver Todos &raquo;</a>
				</div>
			</section>
				<div class="coluna col9 float content-background content-border">
					<h2>AS: <em>O que a empresa pode oferecer?</em></h2>
					<p>Vídeo Introdução da empresa:</p>
					<!--<img src="img/repair-services.jpg" alt="" class="width-image" />-->

					<!-- link do video -->

				<div class="video-home">
					<iframe width="600" height="400" src="https://www.youtube.com/embed/VkXH-www2M8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
					<p>Nós somos uma equipe especializada em reparo dos mais diversos eletrônicos com problemas.
						 Para mais informações do que a empresa pode oferecer va até a página de serviço clicando em "ME LEVE ATÉ LÁ"</p>
					<a href="servico.html" class="btnBlue button-border button">Me Leve Até La &raquo;</a>

				</div>
		</div>
		<div class="conteudo-extra">
			<div class="linha">
				<div class="coluna col7 float content-background content-border">
					<section>
						<h2>Como o site pode ajudar a empresa</h2>
						<p>O site pode ajudar uma empresa, oferecendo agendamento de forma rápida e prática, para o reparo dos esquipamentos.</p>
						<p>É Muito facil, apenas nos forneça os equipamentos que necessitam de reparo e faremos a manutenção de forma segura e prática.</p>
						<img src="img/repair-services.jpg" class="width-image">
						
					</section>
				</div>
				<div class="coluna col5 float content-background content-border">

					<!-- notícias de novidades do site -->

					<h3>O que há de novo?</h3>
					<ul class="sem-marcador sem-padding noticias">
					<li style="margin-bottom: 20px;">
							<img src="img/laptop-repair.jpg" class="width-image">
							<h4>Consertamos notebooks</h4>
							<p>Está disponível no nosso site reparos para notebooks de todas as marcas.</p>
							<a href="servico.html" class="btnBlue button-border button">Leia mais &raquo;</a>
						</li>
							<li style="margin-bottom: 20px;">	
							<img src="img/computer-repair-services.jpg" class="width-image">
							<h4>Nosso orçamento é sem custo!</h4>
							<p>Envie sua máquina e faremos um apuramento 100% gratuito e rápido.</p>
							<a href="servico.html" class="btnBlue button-border button">Leia mais &raquo;</a>
						</li>
							<li style="margin-bottom: 20px;">
							<img src="img/assistencia-tecnica-celular-1-825x510.jpg" class="width-image">
							<h4>A partir de agora nós consertamos Smartphones e Tablets!</h4>
							<p>Realizamos reparos de Smartphones e Tablets sem nenhum custo adicional, independente do modelo ou de sua geração.</p>
							<a href="servico.html" class="btnBlue button-border button">Leia mais &raquo;</a>
							</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer">
		<div class="linha">
				<!-- parte final do site -->
				<footer>
			<div class="footer-font">
				<span>&copy; 2022 - Assistência Técnica - Criador Principal: João Luiz - Equipe 3 - TCC - Trabalho Conclusão de Curso - ITB - Brasílio de Flores Azevedo</span>
			</div>
		</footer>
			</div>
		</div>
     </html>
	</body>
