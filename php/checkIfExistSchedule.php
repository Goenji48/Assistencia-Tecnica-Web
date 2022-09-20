<?php
include("connection.php");

$id = $_SESSION['id'];

$query2 = "SELECT * FROM Equipamento WHERE idCliente = '$id' ";

$result2 = $mysqli->query($query2) or die("Erro na execução do Código SQL: " . $mysqli->error);

while($row = mysqli_fetch_array($result2)){
    $nomeEquipamento = $row['nome'];
    $_SESSION['idEquip'] = $nomeEquipamento;
}
?>