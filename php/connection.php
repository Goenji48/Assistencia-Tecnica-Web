<?php

$hostname = 'mysql.freehostia.com';
$database = 'joosou40_assistenciatecnica';
$user = 'joosou40_assistenciatecnica';
$password = 'tccassistencia2022';

$mysqli = new mysqli($hostname, $user, $password, $database); 

if($mysqli-> connect_errno){
    die("Falha ao conectar com o banco de dados");
}