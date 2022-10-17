<?php
include("connection.php");
include("protect_administrador.php");

$tableName = "Cliente";
$columns = ['idCliente', 'rg', 'nome', 'usernome', 'email', 'senha', 'data_nasc', 'telefone', 'cep', 'numero_casa', 'criacao_datatime'];

$fetchData = fetch_data($mysqli, $tableName, $columns);

function fetch_data($mysqli, $tableName, $columns){
    if(empty($mysqli)){
        $msg = "Database connection error";
    } else if(empty($columns) || !is_array($columns)){
        $msg ="Colunas da Tabelas Nulas.";
        } else if(empty($tableName)){
            $msg = "Tabela não encontrada no banco de dados";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT ".$columnName." FROM $tableName"." ORDER BY idCliente ASC" ;
        $result = $mysqli->query($query);

        if($result == true){
            if($result->num_rows > 0){
                $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $msg =  $row;
            } else {
                $msg = "Dados não encontrado";
            }
        } else {
            $msg = mysqli_error($mysqli);
        }
    }
    return $msg;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="../logo/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/meusAgendamentos.css">
    <title>Tabela Cliente - Banco de Dados</title>
</head>
<body>
    <table>
        <thead>
            <th>idCliente</th>
            <th>rg</th>
            <th>nome</th>
            <th>usernome</th>
            <th>email</th>
            <th>senha</th>
            <th>data_nasc</th>
            <th>telefone</th>
            <th>cep</th>
            <th>numero_casa</th>
            <th>criacao_datatime</th>
        </thead>
        <tbody>
            <?php

            if(is_array($fetchData)){
                foreach($fetchData as $data){
                    ?>
                      <tr>
                      <td><?php echo $data['idCliente']??''; ?></td>
                      <td><?php echo $data['rg']??''; ?></td>
                      <td><?php echo $data['nome']??''; ?></td>
                      <td><?php echo $data['usernome']??''; ?></td>
                      <td><?php echo $data['email']??''; ?></td>
                      <td><?php echo $data['senha']??''; ?></td>
                      <td><?php echo $data['data_nasc']??''; ?></td>  
                      <td><?php echo $data['telefone']??''; ?></td>  
                      <td><?php echo $data['cep']??''; ?></td>  
                      <td><?php echo $data['numero_casa']??''; ?></td>  
                      <td><?php echo $data['criacao_datatime']??''; ?></td>  
                     </tr>
                     <?php
                      }}else{ ?>
                      <tr>
                        <td colspan="11">
                    <?php echo $fetchData; ?>
                  </td>
                    <tr>
                    <?php
                    }?>
                    </tbody>
                     </table>
        </tbody>
    </table>
</body>
</html>