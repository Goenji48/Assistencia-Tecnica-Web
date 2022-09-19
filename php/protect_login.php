<?php

if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['id'])){
     header("Location: ./protecao_login.html");
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