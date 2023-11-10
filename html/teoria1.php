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
    <link href="https://fonts.googleapis.com/css?family=Racing+Sans+One&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link href="../css/teoria.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <div class="v12_129">
        <span class="v12_130">MATEADOS</span>
        <span class="v12_131">Acerca de</span>
        <span class="v12_132">Donacion :</span>
        <span class="v12_133">Redes</span>
        <div class="v12_138">
            <div class="v12_139"></div>
            <a href="../html/Primer.php"><p class="v12_140">Volver</p></a>
        </div>
        <div class="v12_162">
            <div class="v12_163">
            </div>
            <a href="../html/Unidad1.php"><p class="v12_164">Prácticar</p></a>
        </div>
        <div class="v395_164">
            <div class="v395_165"></div>
            <a href="../php/close_session.php"><p class="v395_166">Cerrar</p></a>
        </div>
        <div class="v12_142"></div>
        <span class="v12_157">Acerca de la unidad N°1</span>
        <span class="v12_147">Bienvenido a 1er Grado de Primaria </span>
        <span class="v12_158">Se realizan actividades referidas a la comprensión del número como cardinal al representarlo hasta el 10</span>
        <div class="v241_162">
        </div>
    </div>
</body>
</html>
