<?php

$hostname = "localhost";
$database = "";
$user = "root";
$password = "";

$mysqli = new mysqli($hostname, $user, $password, $database);

if($mysqli-> connect_errno){
    echo "Falha ao Conectar com o banco de dados, segue o erro: (" . $mysqli->connect_errno . ") " . $mysqli->connection_error;
}