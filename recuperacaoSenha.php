<?php
include("php/connection.php");
include("php/protect_recuperacaoSenha.php");

if(isset($_POST['newPassword']) ||
  isset($_POST['newConfirmPassword'])) {

    if(strlen($_POST['newPassword']) == 0) {
        echo "Preencha sua senha nova";
    } else if(strlen($_POST['newConfirmPassword']) == 0) {
        echo "Preencha o campo para confirmar a senha";
    } else {
        $newPassword = $mysqli->real_escape_string($_POST['newPassword']);
        $newConfirmPassword = $mysqli->real_escape_string($_POST['newConfirmPassword']);

        //Arrumar depois;
        $email1 = $_SESSION['email'];

        $query = "UPDATE Cliente SET senha = '$newPassword' WHERE email = '$email1' ";

        if($mysqli->query($query)){
            if($newPassword == $newPassword){
                echo "Senha Alterada com Sucesso!";
                header("Location: php/login.php");
            } else {
                echo "Confirmação de Senha Inválida, certifique se está preenchido corretamente";
            }
        } else {
            die("Erro na execução do Código SQL: " . $mysqli->error);
        }
    }
  }
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="logo/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha - Assistência Técnica</title>
    <link rel="stylesheet" href="css/recuperacaoSenha.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <script src="javascript/profile.js"></script>
</head>
<body>
    <div class="container">
        <img src="img/arrow_back_icon_151627.png" alt="Botão de Voltar" id="backButton" onclick="backToHome()">
        <h1>Alterar sua Senha</h1>
        <form action="" method="POST">
            <input type="password" name="newPassword" placeholder="Nova Senha">
            <input type="password" name="newConfirmPassword" placeholder="Confirmar Senha">
            <button type="submit">Alterar</button>
        </form>
    </div>
</body>
</html>