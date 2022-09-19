<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    header("Location: ./protecao.html");
    //die("Você não pode acessar essa página pois não está logado!<p><a href=\"./login.php\">Login</p>");
}
?> 