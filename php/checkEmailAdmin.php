<?php
include("encryptoURL.php");
    if(!isset($_SESSION)){
        session_start();
    }
    $email1 = "REMOVIDO POR SEGURANÇA";
    $_SESSION['email_administrador'] = $email1;

    if($_SERVER['REQUEST_URI'] == "/php/checkEmailAdmin.php?url=aHR0cHM6Ly90Y2Nhc3Npc3RlbmNpYS5oZXJva3VhcHAuY29tL3BocC9jaGVja0VtYWlsQWRtaW4ucGhw"){
        $url = "../administrador.php";
        $string = encode($url);
        header("Location: $string");
    }

    printf($_SERVER['REQUEST_URI']);
?>