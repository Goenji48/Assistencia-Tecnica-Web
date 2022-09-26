<?php
require_once("php/PHPMailer.php");
require_once("php/SMTP.php");
require_once("php/Exception.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

if(isset($_POST['email-input'])){
    if(strlen($_POST['email-input']) == 0){
        echo "Preencha o Campo de Email";
    } else {
        $email1 = $_POST['email-input'];
        //header("Location: php/sendEmail.php");
    }

    try{
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'tccassistenciatecnica@gmail.com';
        $mail->Password = 'xintzpkaxgabmrro';
        $mail->Port = 587;
    
        $mail->setFrom('tccassistenciatecnica@gmail.com');
        if(isset($email1)){
            $mail->addAddress($email1);
            $mail->isHTML(true);
            $mail->Subject = "Recuperação de Senha - TCC Assistência Técnica Web";
            $mail->Body = "Você Solicitou uma recuperação de senha no nosso site <br> Clique nesse link para trocar a senha <a href='http://tccassistencia.herokuapp.com/recuperacaoSenha.php'>Recuperar Senha</a>";
            $mail->AltBody = "Você Solicitou uma recuperação de senha no nosso site, Clique nesse link para trocar a senha";
    
        if($mail->send()){
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['email'] = $email1; 
            echo 'Email enviado com Sucesso, Verifique se recebeu o email para efetuar a troca de senha. <br> Caso não apareça, Verifique no Spam...';
        } else {
            echo 'Email nao enviado';
        }
    }
    
    } catch (Exception $e){
        echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
    }
        
}

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha - Assistência Técnica</title>
    <link rel="stylesheet" href="css/recuperacaoSenha.css">
    <link rel="shortcut icon" href="logo/logo.png" type="image/x-icon">
    <script src="javascript/profile.js"></script>
</head>
<body>
    <div class="container">
        <div class="back-container">
        <img src="img/arrow_back_icon_151627.png" alt="Botão de Voltar" id="backButton" onclick="backToLogin()">
        </div>
        <h1>Recuperação de Senha</h1>
        <h2>Digite seu Email</h2>
        <form action="" method="POST" target="">
            <input type="email" name="email-input" placeholder="Email">
            <button type="submit" onclick="verify()">Enviar</button>
        </form>
    </div>
</body>
</html>