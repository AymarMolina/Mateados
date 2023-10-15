<?php 

    session_start();
    if(isset($_SESSION['user'])){      
        header("location: Bienvenida.php");
    }
?>

<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8">
        <meta http-equiv="cache-control" content="no-cache,no-store">
        <meta http-equiv="pragma" content="no-cache">
        <meta http-equiv="expires" content="-1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Righteous&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/InicioSesion.css">
        <link rel="icon" href="images/Logo.jpg">
        <title>Inicio de sesion</title>
    </head>
    <body>
        <div id="container">
            <div id="container-left">
                <div id="illustration">
                </div>
                <div id="phrase">
                    <p id="phrase1">"¡Preparate para un viaje educativo y emocionante con Mateados!¡Donde los numeros son tus mejores aliados!"</p>       
                </div>
            </div>
            <div id="container-right">
                <div id="loginArea">
                    <p class="p1">Bienvenido</p>
                    <p class="p2">a Mateados</p>
                    <form action="php/login_be.php" method="POST"class="form">
                        <?php
                            if (isset($_GET['error'])) {
                                echo '
                                <style>
                                    .error {
                                        font-family: "Righteous", cursive;
                                        font-size: 1.2em;
                                        color:red;
                                        margin:0px 15px 0px 15px;
                                        text-align:center;
                                        background-color:white;
                                    }
                                </style>
                                <p class="error">ACCESO DENEGADO</p>';
                            }
                        ?> 
                        <label class="user">
                            <i class='bx bx-user'></i>
                            <input type="text" placeholder="Ingresar su usuario" name="user" minlength="5">
                            
                        </label>
                        <label class="password">
                            <i class='bx bx-lock-open'></i>
                            <input type="password" placeholder="Ingrese su contraseña" name="password" minlength="8">
                        </label>
                        <h5>¿Has olvidado tu contraseña?</h5>
                        <input type="submit" value="Iniciar sesion">
                        <h6>¿Todavia no formas parte de nuestra comunidad?</h6>
                        
                    </form>
                                     
                    <a href="Registro.php" class="registro">Registrate ahora</a>
                </div>
            </div>
        </div>    
    </body>
</html>