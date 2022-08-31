<?php
include("php/protect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo/logo.png" type="image/x-icon">
    <script src="javascript/agendamento.js" defer></script>
    <link rel="stylesheet" href="css/agendamento.css">
    <title>Assistência Técnica - Agendamento</title>
</head>
<body background="img/wallpapersden.com_abstract-purple-shape_7680x4320.jpg">
    <div class="container" id="container">
    <div class="container-formulario criarAgendamento-container">
        <div class="voltar">
            <a href="home.php">Voltar</a>
        </div> 
        <form action="" method="get">
            <h1>Agendar</h1>
            <h2>Equipamento</h2>
            <input type="text" placeholder="Nome" name="nome" maxlenght="50"/>
            <select name="category" id="categoryEquipament" aria-placeholder="Selecione a categoria">
                <option value="computer">Computador</option>
                <option value="console">VideoGame</option>
                <option value="smartphone">Celular</option>
                <option value="tablet">Tablet</option>
                <option value="notebook">Notebook</option>
                <option value="televisor">Televisor</option>
            </select>
            <select name="equipamentType" id="type">
                <!--<option value="graphicsCard">Placa de Vídeo</option>
                <option value="motherBoard">Placa Mãe</option>
                <option value="powerSupply">Fonte</option>
                <option value="case">Gabinete</option>
                <option value="fan">Cooler</option> -->
            </select>
            <p>Relato do Defeito</p>
            <textarea name="description-problem" id="description" cols="30" rows="10" maxlength="200"></textarea>
            <select name="problemType" id="pType">
               <!-- <option value="noVideo">Sem Vídeo</option>
                <option value="noPower">Não Liga</option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option> -->
            </select>
            <h3>Horário e Dia</h3>
            <input type="date" name="dia"/>
            <input type="time" name="hora"/>
    </div>
    <div class="sobreposicao-container">
        <div class="sobreposicao">
            <div class="painel-sobreposicao sobrepor-esquerda">
                <h1>Agendamento Concluído</h1>
                <p>Seu Agendamento foi concluído com sucesso</p>
                <br>
                <p>Aguarde Receber o Retorno</p>
                <button class="botao-fantasma botao-fantasma-animacao" id="voltar">Voltar</button>
            </form>
            </div>
            <div class="painel-sobreposicao sobrepor-direita">
                <h1>Agendar Serviço</h1>
                <p>Preencha os campos necessários para agendar o envio do equipamento</p>
                <button class="botao-fantasma botao-fantasma-animacao" id="agendar">Agendar</button>
            </div>
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