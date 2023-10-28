<?php 

    session_start();
    if(!isset($_SESSION['user'])){
        echo '
        <script>
            alert("Porfavor debes iniciar sesion");
            window.location="../InicioSesion.php";
        </script>
        ';
        session_destroy();
        die();
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
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Racing+Sans+One&family=Raleway:wght@700&family=Righteous&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Racing+Sans+One&family=Raleway:wght@100&family=Righteous&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/PaginaPrincipal.css">
        <link rel="icon" href="../images/Logo.jpg">
        <title>Página principal</title>
    </head>
    <body>
        <div class="container-form">
            <div class="container-top">
                <div class="extras">
                    <h2>MATEADOS</h2>
                    <h3>Acerca de</h3>
                    <h3>Redes</h3>
                    <h3>Donación :D</h3>
                </div>
                <div class="botones">
                    <a href="../InicioSesion.php"><button class="top"><p>Iniciar sesion</p></button></a>
                    <a href="../Registro.php"><button class="top"><p>Registrarme</p></button></a>
                </div>
            </div>
            <div class="container-bottom">
                <div class="container-left">
                    <div class="info">
                        <div class="info-child">
                            <h4>Mateados Sitio Web</h4>
                            <p>La mejor página web para el refuerzo en el área de matemática básica</p>
                            <p class=""><a href="BienvenidaUsuario.php"><button class="bot"><p>Empezar</p></button></a></p>
                        </div>
                        <button><p>Propiedades</p></button>
                    </div>
                </div>
                <div class="container-rigth">
                    <div class="circle">
                        <img src="../images/ima.png">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>