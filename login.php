<?php
include("php/connection.php");

if(isset($_POST['email_user']) || isset($_POST['password_user'])){
    if(strlen($_POST['email_user']) == 0){
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['password_user']) == 0){
        echo "Preencha sua senha";
    } else {
        $email = $mysqli->real_escape_string($_POST['email_user']);
        $password = $mysqli->real_escape_string($_POST['password_user']);

        $query = "SELECT * FROM Cliente WHERE email = '$email' AND senha = '$password' ";
        //$query = "CALL login('$email', '$password')";
        $query1 = $mysqli->query($query) or die("Erro na execução do Código SQL: " . $mysqli->error);

        $result = $query1->num_rows;

        if($result == 1){
            $user = $query1->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $user['idCliente'];
            $_SESSION['username'] = $user['usernome'];
            $_SESSION['name'] = $user['nome'];

            header("Location: home.php");

        } else {
            echo "Erro no Login (Nome ou Senha Inválida!)";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo/logo.png" type="image/x-icon">
    <script src="javascript/login.js" defer></script>
    <link rel="stylesheet" href="css/login-style.css">
    <title>Assistência Técnica - Login</title>
</head>
<body background="img/wallpapersden.com_abstract-purple-shape_7680x4320.jpg">
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="php/register.php" method="POST">
                <h1>Criar Conta</h1>
                <div class="social-content">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-instagram-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-youtube-f"></i></a>
                </div>
               <!--<span>Ou use seu Email para registrar</span> -->
                <input type="text" placeholder="RG" name="rg"  maxlength="100"/> 
                <input type="text" placeholder="name" onblur="getName()" name="name"  maxlength="100"/>
                <input type="text" placeholder="username" name="username" onblur="getUsername()" maxlength="100"/>
                <input type="email" placeholder="email" name="email" id="email" maxlength="100"/>
                <input type="password" placeholder="password" name="password" maxlength="50"/>
                <input type="password" placeholder="confirm password" name="confirm_password" maxlenght="50"/>
                <input type="text" placeholder="ano/mes/dia exemplo: 19670701" name="date_birthday"/>
                <input type="tel" placeholder="phone" name="phone" maxlength="11"/>
                <input type="number" placeholder="CEP" name="cep">
                <input type="number" placeholder="houseNumber" name="houseNumber" maxlength="3">
                <button type="submit">Criar</button>
            </form>
        </div>
    <div class="form-container sign-in-container">
       <div class="voltar">
            <a href="index.php">Voltar</a>
        </div> 
        <form action="" method="POST">
            <h1>Login</h1>
            <div class="social-content">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-instagram-f"></i></a>
                <a href="#" class="social"><i class="fab fa-youtube-f"></i></a>
            </div>
           <!-- <span>Ou Use Sua Conta</span> -->
            <input type="email" placeholder="Email" name="email_user" maxlength="100"/>
            <input type="password" placeholder="Password" name="password_user" maxlength="50"/>
            <a href="#" id="esqueceusenha">Esqueceu Sua Senha?</a>
            <button id="logar" type="submit">Logar</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Bem Vindo de Volta!</h1>
                <p>Já Possui Uma Conta?</p>
                <button class="ghost ghost-animation" id="login">Login</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Bem Vindo, Cliente!</h1>                
                <p>Venha Fazer Parte do Nosso Site</p>
                <button class="ghost ghost-animation" id="criarConta">Criar Conta</button>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="linha">
        <!-- parte final do site -->
        <footer>
    <div class="footer-font">
        <span>&copy; 2022 - Assistência Técnica - Criador Principal: João Luiz - Equipe 3 - TCC - Trabalho Conclusão de Curso - ITB - Brasílio de Flores Azevedo</span>
    </div>
</footer>
    </div>
</div>
</body>
</html>