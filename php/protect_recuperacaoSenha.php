<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['email_administrador']) || !$_SERVER['REQUEST_URI'] == "/php/checkEmailVerification.php?url=aHR0cHM6Ly90Y2Nhc3Npc3RlbmNpYS5oZXJva3VhcHAuY29tL3BocC9jaGVja0VtYWlsVmVyaWZpY2F0aW9uLnBocA=="){
     header("Location: ./protecao_administrador.html");
}

?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/protect_style.css">
    <title>Agendamento</title>
</head>
<body>
    
</body>
</html>-->