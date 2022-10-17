<?php
require_once("PHPMailer.php");
require_once("SMTP.php");
require_once("Exception.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try{
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'tccassistenciatecnica@gmail.com';
    $mail->Password = 'xintzpkaxgabmrro';
    $mail->Port = 587;

    $mail->setFrom('tccassistenciatecnica@gmail.com');
    $email1 = 'tccassistenciatecnica@gmail.com';
    if(isset($email1)){
        $mail->addAddress($email1);
        $mail->isHTML(true);
        $mail->Subject = "Pedido de Solicitação para Acesso ao Administrador";
        $mail->Body = "Você Solicitou acesso à página de adminstrador br> Clique nesse link para acessar <a href='http://tccassistencia.herokuapp.com/administrador.html'>Administrador</a>";
        $mail->AltBody = "Você Solicitou acesso à página de adminstrador br> Clique nesse link para acessar";

    if($mail->send()){
        if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION['email_administrador'] = $email1; 
        echo 'Email enviado com Sucesso, Verifique se recebeu o email para acessar a página de administrador. <br> Caso não apareça, Verifique no Spam...';
    } else {
        echo 'Email nao enviado';
    }
}

} catch (Exception $e){
    echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/protecao.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="logo/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <title>Solicitação de Acesso - Assistência Técnica</title>
</head>
<body>
    <h1>Você Solicitou o Acesso à página de Administrador</h1>
    <p>Verifique o email para poder acessar</p>
</body>
</html>