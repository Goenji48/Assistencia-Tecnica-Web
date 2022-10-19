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
            $_SESSION['id'] = $user['idCliente'];
        }

        $query_equipament = "SELECT * FROM Equipamento where idCliente = '$id' ";

        $equipament_result = $mysqli->query($query_equipament) or die($mysqli->error);

        $equipament_rows = $equipament_result->num_rows;

        if($equipament_rows == 1){
            $equipament = $equipament_result->fetch_assoc();
            $equipament_name = $equipament['nome'];
            $equipament_problem = $equipament['descricao_defeito'];
            $_SESSION['eid'] = $equipament['idEquipamento'];
        }
    }
}


if(isset($_POST['budget'])){
    if(isset($_SESSION['eid']) || isset($_SESSION['id'])){
        if(isset($_POST['value']) && isset($_POST['data'])){
            if(strlen($_POST['value'] == 0) || strlen($_POST['data'] == 0)){
                echo "Preencha o campo ID antes de Realizar o Orçamento";
            } else {
                $price = $mysqli->real_escape_string($_POST['value']);
                $data = $mysqli->real_escape_string($_POST['data']);
                $id = $_SESSION['id'];
                $eid = $_SESSION['eid'];
                $query_service = "INSERT INTO Servico VALUES(idServico, '$eid', '$id', '$price', '$data')";

                $budget_result = $mysqli->query($query_service) or die($mysqli->error);

                $rows = $budget_result->num_rows;

                if($rows == 1){
                    $bugdet = $budget_result->fetch_assoc();
                    $_SESSION['serviceId'] = $budget['idServico'];
                }
            }
        }
    } else {
        echo "ID Cliente e ID Equipamento não encontrados.";
    }
}

if(isset($_POST['send'])){
    if(isset($_SESSION['eid']) && isset($_SESSION['id']) && isset($_SESSION['serviceId'])) {
        $type = $mysqli->real_escape_string($_POST['send']);
        $id = $_SESSION['id'];
        $eid = $_SESSION['eid'];
        $serviceId = $_SESSION['serviceId'];

        $query_user = "SELECT * from Cliente where idCliente = $id";

        $user_result = $mysqli->query($query_user) or die($mysqli->error);

        $rowsUser = $user_result->num_rows;

        if($rowsUser == 1){
            $user = $user_result->fetch_assoc();
            $cep = $user['cep'];
        }
        
        $query_send = "INSERT INTO Envio VALUES(idEnvio, '$type', '$eid', '$serviceId', '$cep' ";

        if($mysqli->query($query_send)){
            echo "Envio Registrado com Sucesso";
        } else {
            die($mysqli->error);
        }
    } else {
        echo "ID Cliente, ID Equipamento e ID Servico não encontrados.";
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
            </form>
            <form action="" method="POST">
            <h1>Adicionar Valor</h1>
                <h3>Valor</h3>
                <input type="number" name="value">
                <input type="date" name="data">
                <input type="submit" name="budget" class="buttons">
            </form>
            <form action="" method="POST">
                <h1>Inserir Informações de Envio</h1>
                <h3>Tipo do Envio</h3>
                <select name="type" id="">
                    <option value="Retirada">Retirada</option>
                    <option value="SEDEX">SEDEX</option>
                </select>
                <input type="submit" name="send" class="buttons">
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