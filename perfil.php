<?php
include("php/protect.php");
include("php/connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assistência Técnica - Perfil</title>
    <link rel="shortcut icon" href="logo/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/perfil.css">
    <script src="javascript/profile.js" defer></script>
</head>
<body>
        <div class="container">
            <div class="container-item">
                <img src="img/arrow_back_icon_151627.png" alt="" id="arrow-back" onclick="backToHome()">
                <img src="img/user.png" alt="User Icon">
                <h1>
                    <?php
                    $name = $_SESSION['username'];
                    echo $name;
                    ?>
                </h1>
                <h2>
                <?php
                    $username = $_SESSION['name'];
                    echo $username;
                    ?>
                </h2>
                <a href="php/logout.php">Sair</a>
                <div class="container-buttons">
                    <div class="button-1">
                        <img src="img/schedule_icon.png" alt="Ver Agendamentos" onclick="openSchedulePage()" />
                        <h1>Ver Agendamentos</h1>
                    </div>
                        <div class="button-2">
                            <img src="img/profile_edit_icon.png" alt="Editar Perfil" onclick="openProfileEdit()" />
                            <h1>Editar Perfil</h1>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
</body>
</html>