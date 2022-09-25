<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha - Assistência Técnica</title>
    <link rel="stylesheet" href="css/recuperacaoSenha.css">
    <link rel="shortcut icon" href="logo/logo.png" type="image/x-icon">
    <script src="javascript/verifyEmail.js" defer></script>
</head>
<body>
    <div class="container">
        <img src="img/arrow_back_icon_151627.png" alt="Botão de Voltar" id="backButton" onclick="backToHome()">
        <h1>Recuperação de Senha</h1>
        <h2>Digite seu Email</h2>
        <form action="php/sendEmail.php" method="POST">
            <input type="email" name="email-input" placeholder="Email">
            <button type="submit" onclick="verify()">Enviar</button>
        </form>
    </div>
    <div class="alert">
        <h1>Email Enviado!</h1>
        <p>Verifique se recebeu o email para realizar a troca de senha</p>
    </div>
</body>
</html>