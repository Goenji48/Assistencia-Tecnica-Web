<?php
include("php/protect_administrador.php");
include("php/connection.php");
include("php/encryptoURL.php");

$query = "SELECT * FROM Cliente";

$query1 = $mysqli->query($query);

$row = $query1->num_rows;

if(isset($_POST['idNumber'])){
    if(strlen($_POST['idNumber']) == 0){
        echo "Insira o ID";
    } else {
        $id = $mysqli->real_escape_string($_POST['idNumber']);
        $query3 = "SELECT * from Cliente where idCliente = '$id' ";

        $query4 = $mysqli->query($query3) or die($mysqli->error);

        $row = $query4->num_rows;

        $all_rows = $query4->num_rows;

        if($row == 1){
            $user = $query4->fetch_assoc();
            $name = $user['nome'];
            $email = $user['email'];
            $userId = $user['idCliente'];
        }

        $query_equipament = "SELECT * FROM Equipamento where idCliente = '$id' ";

        $equipament_result = $mysqli->query($query_equipament) or die($mysqli->error);

        $equipament_rows = $equipament_result->num_rows;

        if($equipament_rows == 1){
            $equipament = $equipament_result->fetch_assoc();
            $equipament_name = $equipament['nome'];
            $equipament_problem = $equipament['descricao_defeito'];
            $equipamentId = $equipament['idEquipamento'];
        }
    }

    if(isset($equipamentId) && isset($userId)){
        if(isset($_POST['value']) && isset($_POST['data'])){
            if(strlen($_POST['value'] == 0) || strlen($_POST['data'] == 0)){
                echo "Preencha o campo ID antes de Realizar o Orçamento";
            } else {
                $price = $mysqli->real_escape_string($_POST['value']);
                $data = $mysqli->real_escape_string($_POST['data']);
                $query_service = "INSERT INTO Servico VALUES(idServico, '$equipamentId', '$userId', '$price', '$data')";
        
                if($mysqli->query($query_service)){
                    echo "Orçamento Realizado com Sucesso";
                } else {
                    die($mysqli->error);
                }
            }
        }
    }

}

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assistencia Técnica - Administração</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="logo/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/administrador.css">
</head>
<body>
    <div class="main-container">
        <div class="container-info">
            <img src="img/admin-icon.png" alt="Ícone de Administrador">
            <h1>Administração</h1>
            <div class="server-state">
                <h2>Clientes Cadastrados: <?php echo $row ?></h2>
                <h2>Ver Tabela do Banco <a href="<?php
                $url = "php/databaseClienteTable.php";
                echo encode($url);
                ?>" target="_blank">Database</a></h2>
            </div>
        </div>
        <div class="container-options">
            <div class="options-1">
            <form action="" method="POST">
                <h1>Preencher Orçamento</h1>
                <h2>ID</h2>
                <input type="number" name="idNumber">
                <button type="submit">Buscar</button>
                <h2>Adicionar Valor</h2>
                <h3>Valor: <input type="number" name="value"></h3>
                <input type="date" name="data">
                <button type="submit">Aplicar</button>
            </form>
            </div>
            <div class="options-2">
                <h2><?php 
                if(!isset($name)){
                    echo "Nome: ";
                } else {
                    echo "Nome: $name ";
                }
                ?></h2>
                <h2><?php 
                if(!isset($email)){
                    echo "Email: ";
                } else {
                    echo "Email: $email ";
                }
                ?>
                </h2>
                <h2>
                <?php 
                if(!isset($equipament_name)){
                    echo "Equipamento: ";
                } else {
                    echo "Equipamento: $equipament_name ";
                }
                ?>
                </h2>
                <h2>
                <?php 
                if(!isset($equipament_problem)){
                    echo "Defeito: ";
                } else {
                    echo "Defeito: $equipament_problem ";
                }
                ?>
                </h2>
            </div>
        </div>
    </div>
</body>
</html>