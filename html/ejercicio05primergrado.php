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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Sumar</title>
    <link rel="stylesheet" href="../css/estiloejercicio05.css">
</head>
<body>
    <div class="container">
        <h1>Unidad N°1 :Juego de Sumar</h1>
        <p id="progress">0/5</p>
        <p>Selecciona los números que suman el siguiente resultado:</p>
        <p id="target">Resultado objetivo: <span id="target-result"></span></p>
        <div class="numbers">
            <!-- Números aleatorios que suman el resultado objetivo -->
            <button class="number" data-value="4">4</button>
            <button class="number" data-value="7">7</button>
            <button class="number" data-value="2">2</button>
            <button class="number" data-value="8">8</button>
            <!-- Números aleatorios que no suman el resultado objetivo -->
            <button class="number" data-value="1">1</button>
            <button class="number" data-value="5">5</button>
            <button class="number" data-value="9">9</button>
        </div>
        <p>Resultado: <span id="result">0</span></p>
        <p id="message"></p>
        <button id="back-button" onclick="goBack()">Volver</button>
        <button id="continue-button" onclick="location.href='ejercicio06primergrado.php'">Continuar con el Tema 3</button>
    </div>
    <script src="../js/scriptejercicio05.js"></script>
</body>
</html>
