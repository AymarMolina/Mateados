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
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidad N°1 - Ejercicio de Matemáticas</title>
    <link rel="stylesheet" href="../css/Ejercicios1.css">
</head>

<body>
    <div class="container">
        <h1>Unidad N° 1</h1>
        <h2>Ejercicio de Matemáticas</h2>
        <p>Arrastra la imagen 7 veces al área designada.</p>
        <div id="area" class="drop-area" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <img id="imagen" class="draggable" src="../images/elephant.jpg" alt="Imagen para Arrastrar" draggable="true" ondragstart="drag(event)">
        <div id="mensaje"></div>
        <button id="retrocederBtn" class="btn" onclick="history.back()">Retroceder Página</button>
        <button id="continuarBtn" class="btn" onclick="location.href='unidad1_3.php'">Continuar con el Siguiente Ejercicio</button>
    </div>

    <script src="../js/unidad1-2.js"></script>
</body>

</html>