<?php 

    session_start();
    if(!isset($_SESSION['user'])){
        echo '
        <script>
            alert("Porfavor debes iniciar sesion");
            window.location="../Loger/InicioSesion.php";
        </script>
        ';
        session_destroy();
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&family=Raleway&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    
    <header>

        <div class="container__menu">
            <div class="logo">
                <img src="../images/ima.png" alt="">
                <p>MATEADOS</p>
            </div>
            <div class="menu">
                <i class="fas fa-bars" id="btn_menu"></i>
                <div id="back_menu"></div>
                <nav id="nav">
                    <img src="../images/ima.png" alt="">
                    <ul>
                        <li id="btn-abrir-popup">Acerca de</li>
                        <li><a href="https://www.instagram.com/mate_a_dos/" target="_blank" >Redes</a></li>
                        <li><a href="https://paypal.me/xaavi01?country.x=PE&locale.x=es_XC" target="_blank" >Donacion</a></li>
                        <li><a href="Grado.php" id="selected">Grados</a></li>
                        <li><a href="../php/close_session.php" id="selected">Cerrar</a></li>
                    </ul>
                </nav>
                
            </div>
        </div>
    </header>

    <main>
        <div class="container__cover">
            <div class="cover">
                <div class="text">
                    <h1>Bienvenido,<b><?php echo $_SESSION["user"];?></b></h1>

                    <p>Gracias por elegir este sitio web para reforzar tus conocimientos en el área de matemática básica.

                        Dirigase al boton <b>Grados </b>para poder comenzar con su reforzamiento matemático</p>
                </div>

                <div class="svg">
                    <img id="log" src="../images/logo.svg" alt="" style="border-radius: 20px;">
                </div>
            </div>
        </div>
        <div class="overlay" id="overlay">
        <div class="popup" id="popup">
            <p id="btn-cerrar-popup">X</p>
            <p>¿Quienes somos?</p>
            <p>Somos un grupo de estudiandes de la Universidad Privada del Norte de la carrera de Ingenieria de Sistemas y hemos creado una pagina web para ayudarte a reforzar tus conocimientos matematicos :)</p>
        </div>
    </div>
    </main>
    
    <script src="../js/popup.js"></script>
    <script src="../js/scriptBienvenida.js"></script>
</body>
</html>