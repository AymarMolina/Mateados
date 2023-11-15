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
    <link rel="stylesheet" type="text/css" href="../css/estiloejercicio07.css">
</head>
<body>
    <meta charset="UTF-8">
    <div class="center-content">
        <div id="container">
            <h1>Unidad N°1:Números Mágicos y sus Palabras Secretas</h1>
            <div id="numeroAleatorio" class="numero-grande"></div>
            <p>Escribe la palabra correspondiente:</p>
            <input type="text" id="palabraUsuario">
            <button id="comprobarBtn">Comprobar</button>
            <p id="mensaje"></p>
            <button id="siguienteBtn">Continuar al siguiente ejercicio</button>
        </div>
    </div>
    <script src="../js/scriptejercicio07.js"></script>
</body>
</html>