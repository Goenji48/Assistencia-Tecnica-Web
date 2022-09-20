<?php
include("./php/connection.php");
include("./php/protect.php");
include("./php/protect_agendamento.php");

$idCliente = $_SESSION['id'];

$query = "SELECT * FROM Agendamento where idCliente = '$idCliente' ";

$query2 = "SELECT * FROM Equipamento where idCliente = '$idCliente' ";

$query3 = "SELECT * FROM Servico where idCliente = '$idCliente' ";

$result  = $mysqli->query($query) or die("Erro na execução do Código: " + $mysqli->error);

$result2  = $mysqli->query($query2) or die("Erro na execução do Código: " + $mysqli->error);

$result3  = $mysqli->query($query3) or die("Erro na execução do Código: " + $mysqli->error);



while($row = mysqli_fetch_array($result)){
    $nomeCliente = $row['nomeCliente'];
    $dia = $row['dia'];
    $hora = $row['hora'];
}

while($row2 = mysqli_fetch_array($result2)){
    $nomeEquipamento = $row2['nome'];
    $defeito = $row2['tipoDefeito'];
}

while($row3 = mysqli_fetch_array($result3)){
    if(isset($row3['valor'])){
        $valor = $row3['valor'];
    } else {
        $valor = "R$ 0,00";
    }
}


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Agendamentos - Assistência Técnica</title>
    <link rel="shortcut icon" href="logo/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/meusAgendamentos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="header">
        <div class="linha">
            <!-- logo do site -->
            <header>
                <div class="coluna col12">
                    <h1 class="logo"><img src="video/ezgif.com-gif-maker2.gif" alt="app logo" width="230" />
                    </h1>
                </div>
            </header>
        </div>
    </div>
    <table>
        <tr>
            <th>Nome</th>
            <th>Equipamento</th>
            <th>Defeito</th>
            <th>Dia</th>
            <th>Hora</th>
            <th>Orçamento</th>
            <th>Envio</th>
        </tr>
        <tr>
            <td> <?php echo $nomeCliente ?></td>
            <td> <?php echo $nomeEquipamento ?></td>
            <td> <?php echo $defeito ?></td>
            <td> <?php echo $dia ?></td>
            <td> <?php echo $hora ?></td>
            <td> <?php
            
             if(isset($valor)){
                echo $valor;
             } else{
                echo "0";
             } ?></td>
            <td></td>
        </tr>
    </table>
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