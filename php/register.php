<?php
include("connection.php");

if(isset($_POST['rg']) || isset($_POST['name'])
|| isset($_POST['username']) || isset($_POST['email'])
|| isset($_POST['password']) || isset($_POST['confirm_password'])
|| isset($_POST['date_birthday']) || isset($_POST['phone'])
|| isset($_POST['cep']) || isset($_POST['houseNumber'])){

    if(strlen($_POST['rg']) == 0){
        echo "Preencha seu rg";
    } else if(strlen($_POST['name']) == 0){
        echo "Preencha seu nome";
    } else if(strlen($_POST['username']) == 0){
        echo "Preencha seu nome de usuário";
    } else if(strlen($_POST['email']) == 0){
        echo "Preencha seu email";
    } else if(strlen($_POST['password']) == 0){
        echo "Preencha sua senha";
    } else if(strlen($_POST['confirm_password']) == 0){
        echo "Confirme sua senha";
    } else if(strlen($_POST['date_birthday']) == 0){
        echo "Preencha sua data de nascimento";
    } else if(strlen($_POST['phone']) == 0){
        echo "Preencha seu telefone";
    } else if(strlen($_POST['cep']) == 0){
        echo "Preencha seu CEP";
    } else if(strlen($_POST['houseNumber']) == 0){
        echo "Preencha o número de casa";
    } else {
        $rg = $mysqli->real_escape_string($_POST['rg']);
        $name = $mysqli->real_escape_string($_POST['name']);
        $username = $mysqli->real_escape_string($_POST['username']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = $mysqli->real_escape_string($_POST['password']);
        $confirm_password = $mysqli->real_escape_string($_POST['confirm_password']);
        $date = $mysqli->real_escape_string($_POST['date_birthday']);
        $phone = $mysqli->real_escape_string($_POST['phone']);
        $cep = $mysqli->real_escape_string($_POST['cep']);
        $houseNumber = $mysqli->real_escape_string($_POST['houseNumber']);

        $query = "INSERT INTO Cliente VALUES(idCliente, '$rg', '$name', '$username', '$email', '$password', '$date', '$phone', '$cep', '$houseNumber', now())";

        //$query1 = $mysqli->query($query) or 

        if($mysqli->query($query)){
            echo "Conta Criada com Sucesso! Efetue o Login... Redirectionando em 3seg...";
            header("Location: ../login.php");
            sleep(3);
        } else {
            die("Erro na execução do Código SQL: " . $mysqli->error);
        }

        

        /*$result = $query1->num_rows;

        if($result == 1){
            $user = $query1->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $user['idCliente'];
            $_SESSION['name'] = $user['usernome'];

            header("Location: home.php");

        } else {
            echo "Erro no Login (Nome ou Senha Inválida!)";
        }*/
    }
}