<?php
require_once("PHPMailer.php");
require_once("SMTP.php");
require_once("Exception.php");

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
}

try{
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'tccassistenciatecnica@gmail.com';
    $mail->Password = 'xintzpkaxgabmrro';
    $mail->Port = 587;

    $mail->setFrom('tccassistenciatecnica@gmail.com');
    $mail->addAddress($email1);

    $mail->isHTML(true);
    $mail->Subject = "Recuperação de Senha - TCC Assistência Técnica Web";
    $mail->Body = "Você Solicitou uma recuperação de senha no nosso site <br> Clique nesse link para trocar a senha <a href='http://tccassistencia.herokuapp.com/recuperacaoSenha.html'>Recuperar Senha</a>";
    $mail->AltBody = "Você Solicitou uma recuperação de senha no nosso site, Clique nesse link para trocar a senha";

    if($mail->send()){
        echo 'Email enviado com Sucesso';
    } else {
        echo 'Email nao enviado';
    }

} catch (Exception $e){
    echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}

