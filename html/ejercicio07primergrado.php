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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <meta charset="UTF-8">
    <div class="center-content">
        <div id="container" style="width:1000px;">
            <h1>Unidad N°1:Números Mágicos y sus Palabras Secretas</h1>
            <div id="numeroAleatorio" class="numero-grande"></div>
            <p>Escribe la palabra correspondiente:</p>
            <input type="text" id="palabraUsuario" style="text-align: center; width:750px;"><br>
            <button id="comprobarBtn">Comprobar</button>
            <p id="mensaje"></p>
            <button id="siguienteBtn">Continuar al siguiente ejercicio</button>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="../js/scriptejercicio07.js"></script>
</body>
</html>