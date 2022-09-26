<?php
include("php/protect.php");
include("php/connection.php");

if(isset($_POST['name-input']) || isset($_POST['username-input']) ||
isset($_POST['password-input'])) {
    if(strlen($_POST['name-input']) == 0) {
        echo "Preencha o campo Nome";
    } else if (strlen($_POST['username-input']) == 0 ){
        echo "Preencha o campo nome de usuário";
    } else if(strlen($_POST['password-input']) == 0){
        echo "Preencha o campo de senha";
    } else {
        $sessionId = $_SESSION['id'];
        $name = $mysqli->real_escape_string($_POST['name-input']);
        $username = $mysqli->real_escape_string($_POST['username-input']);
        $password = $mysqli->real_escape_string($_POST['password-input']);

        $query = "UPDATE Cliente SET nome = '$name', usernome = '$username', senha = '$password' WHERE idCliente = '$sessionId' ";

        if($mysqli->query($query)){
            echo "Conta Atualizada com Sucesso";
        } else {
            echo "Algo deu Errado " + $mysqli->error;
        }
    }
}


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/editarPerfil.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="javascript/profile.js" defer></script>
    <link rel="shortcut icon" href="logo/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <title>Editar Perfil - Assistência Técnica</title>
</head>
<body>
    <div class="main-container">
        <div class="container">
            <img src="img/arrow_back_icon_151627.png" alt="Botao de Voltar" id="backButton" onclick="backToProfile()">
            <img src="img/user.png" alt="Foto de Perfil" id="user-icon">
            <h1><?php $username = $_SESSION['username']; echo $username; ?></h1>
            <h2><?php $name = $_SESSION['name']; echo $name; ?></h2>
        </div>
        <div class="container2">
            <form action="" method="post">
                <input type="text" placeholder="Alterar Nome" name="name-input"/>
                <input type="text" placeholder="Alterar Nome de Usuário" name="username-input"/>
                <input type="password" placeholder="Alterar Senha" name="password-input"/>
                <button type="submit">Salvar Mudanças</button>
            </form>
        </div>
    </div>
</body>
</html>