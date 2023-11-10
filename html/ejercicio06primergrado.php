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
<link rel="stylesheet" type="text/css" href="../css/estiloejercicio06.css">
</head>
<body>
<div class="container">
    <h1>Unidad N°1 :Juego de bolitas coloridas</h1>
    <p>Contador de bolitas rojas:</p>
    <input type="number" id="redCount" placeholder="Ingresa la cantidad de bolitas rojas">
    <button id="checkButton" onclick="checkCount()">Comprobar</button>
    <div id="ballsContainer"></div>
    <p id="score">0/5</p> <!-- Agregamos el contador de puntaje -->
    <button id="checkButton" onclick="location.href='ejercicio07primergrado.php'">Continuar con el Tema 4 y Ultimo</button>
</div>
<script src="../js/scriptejercicio06.js"></script>
</body>
</html>