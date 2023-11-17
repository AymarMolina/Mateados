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
                        <li id="btn-abrir-popup"><a>Acerca de</a></li>
                        <li><a href="#" >Redes</a></li>
                        <li><a href="#" >Donacion</a></li>
                        <li><a href="Bienvenida.php" id="selected">Volver</a></li>
                        <li><a href="../php/close_session.php" id="selected">Cerrar</a></li>
                    </ul>
                </nav>
                
            </div>
        </div>
    </header>

    <main>
        <div class="container__cover">
            <div class="num" id="uno">
                <div>
                    <h1>Bienvenido a 1er Grado de Primaria </h1>
                    <p id="ta">Acerca de la unidad N°1</p>
                    <p id="te">Se realizan actividades referidas a la comprensión del número como cardinal al representarlo hasta el 10</p>
                </div>
                <div class="svg" >
                    <a href="../html/PrimerGrado.php"><img id="numero" src="../images/numeros.png" alt="" style="border-radius: 20px;"></a>
                </div>
                <div id="pra">
                    <a href="../html/Unidad1.php" id="bot">Practicar</a>
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
