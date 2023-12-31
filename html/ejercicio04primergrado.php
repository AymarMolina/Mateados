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
    <title>Conteo con Bolitas Numeradas</title>
    <link rel="stylesheet" type="text/css" href="../css/estiloejercicio04.css">
</head>
<body>
    <div id="center-container">
        <h1>Unidad N°1 :Juego de bolitas coloridas</h1>
        <p>Marca <span id="numberToSelect">0</span> bolitas.</p>
        <p>Puntaje: <span id="score">0</span></p>
        <div id="container"></div>
        <div id="button-container">
            <button id="goBackButton"onclick="history.back()">Volver</button>
            <button id="checkButton">Comprobar Respuesta</button>
            <button id="nextButton">Continuar con el siguiente ejercicio</button>
            <button id="advanceToNextTopic" style="display: none;">Avanzar al siguiente tema</button>
            <button id="continueToTopic2Button"style="display: none;" disabled>Continuar con el siguiente tema N°2</button>

        </div>
        <p id="result"></p>
        
    </div>
    <script src="../js/scriptejercicio04.js"></script>
</body>

</html>