<?php
    if(!isset($_SESSION)){
        session_start();
    }
    $email1 = "joacraft89@gmail.com";
    $_SESSION['email_administrador'] = $email1;

    if($_SERVER['REQUEST_URI'] == "Y2hlY2tFbWFpbEFkbWluLnBocA"){
        header("Location: ./administrador.php");
    }

    printf($_SERVER['REQUEST_URI']);
?>