<?php

$hostname = 'REMOVIDO POR SEGURANÇA';
$database = 'REMOVIDO POR SEGURANÇA';
$user = 'REMOVIDO POR SEGURANÇA';
$password = 'REMOVIDO POR SEGURANÇA';

$mysqli = new mysqli($hostname, $user, $password, $database); 

if($mysqli-> connect_errno){
    die("Falha ao conectar com o banco de dados");
}