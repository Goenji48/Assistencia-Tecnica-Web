<?php
include("php/protect.php");
include("php/connection.php");

if(isset($_POST['nome']) ||
isset($_POST['equipamentType']) || isset($_POST['description-problem']) ||
isset($_POST['problemType']) || isset($_POST['dia']) || isset($_POST['hora'])){
    //isset($_POST['category']) ||
    //$category = $mysqli->real_escape_string($_POST['category']);
    //} else if(strlen($_POST['category']) == 0){
        //echo "Selecione a Categoria";
    //}
    
    if(strlen($_POST['nome']) == 0){
        echo "Preencha o nome do Equipamento";
    
    } else if(strlen($_POST['equipamentType']) == 0){
        echo "Selecione o Tipo do Equipamento";
    }
    else if(strlen($_POST['description-problem']) == 0){
        echo "Escreva a descrição do problema";
    }
    else if(strlen($_POST['problemType']) == 0){
        echo "Selecione o tipo do problema";
    } else if(strlen($_POST['dia']) == 0){
        echo "Selecione o dia";
    }
    else if(strlen($_POST['hora']) == 0){
        echo "Selecione a hora";
    } else {
        $nome = $mysqli->real_escape_string($_POST['nome']);
        $equipamentType = $mysqli->real_escape_string($_POST['equipamentType']);
        $description_problem = $mysqli->real_escape_string($_POST['description-problem']);
        $problemType = $mysqli->real_escape_string($_POST['problemType']);
        $dia = $mysqli->real_escape_string($_POST['dia']);
        $hora = $mysqli->real_escape_string($_POST['hora']);

        $idCliente = $_SESSION['id'];
        $name = $_SESSION['name'];

        $queryInsert = "INSERT INTO Equipamento VALUES(idEquipamento, '$equipamentType', '$description_problem',
        '$nome', '$problemType', '$idCliente')";

        $selectQuery = "SELECT idEquipamento FROM Equipamento where idCliente = '$idCliente' ";
    
        $query1 = $mysqli->query($queryInsert) or die("Erro na execução do Código SQL: " . $mysqli->error);

        $query2 = $mysqli->query($selectQuery) or die("Erro na execução do Código SQL: " . $mysqli->error);

        $equipament = $query2->fetch_assoc();

        $id = $equipament['idEquipamento'];

        $querySchedule = "INSERT INTO Agendamento VALUES(idAgendamento, '$name', '$id', '$dia', '$hora', '$idCliente')";

        $query3 = $mysqli->query($querySchedule) or die("Erro na execução do Código SQL: " . $mysqli->error);

        //$equipamentType = $query1->fetch_assoc();
        /*if($mysql->query($query)){
            echo "Equipamento Registrado Com Sucesso";
        } else {
            die("Erro na execução do Código SQL: " . $mysqli->error);
        } */
    }
} 
?>

<!DOCTYPE html>
<html lang="pt-BR">
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
        <form action="" method="POST">
            <h1>Agendar</h1>
            <h2>Equipamento</h2>
            <input type="text" placeholder="Nome" name="nome" maxlenght="50"/>
            <select name="equipamentType" id="categoryEquipament" aria-placeholder="Selecione a categoria">
                <option value="Computador">Computador</option>
                <option value="Eletrodoméstico">Eletrodomésticos</option>
                <option value="Smartphone">Celular</option>
                <option value="Tablet">Tablet</option>
                <option value="Notebook">Notebook</option>
                <option value="Televisor">Televisor</option>
            </select>
            <!--<select name="equipamentType" id="type">
                <option value="graphicsCard">Placa de Vídeo</option>
                <option value="motherBoard">Placa Mãe</option>
                <option value="powerSupply">Fonte</option>
                <option value="case">Gabinete</option>
                <option value="fan">Cooler</option> 
            </select>-->
            <p>Relato do Defeito</p>
            <textarea name="description-problem" id="description" cols="30" rows="10" maxlength="200"></textarea>
            <select name="problemType" id="pType">
                <option value="Sem Vídeo">Sem Vídeo</option>
                <option value="Não Liga">Não Liga</option>
                <option value="Liga Mas Depois de Alguns Segundos Desliga">Liga Mas Depois de Alguns Segundos Desliga</option>
                <option value="Exibe Mensagem de Erro">Exibe Mensagem de Erro</option>
                <option value="Erro de Software">Erro de Sofware</option>
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
            </div>
            <div class="painel-sobreposicao sobrepor-direita">
                <h1>Agendar Serviço</h1>
                <p>Preencha os campos necessários para agendar o envio do equipamento</p>
                <button class="botao-fantasma botao-fantasma-animacao" id="agendar">Agendar</button>
            </div>
            </form>
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
</body>
</html>