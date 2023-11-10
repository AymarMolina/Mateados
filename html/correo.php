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
    <link rel="stylesheet" type="text/css" href="../css/estilocorreo.css">
    <meta charset="UTF-8">
</head>
<body>
    <div class="email-interface">
        <h1>Mi Correo Electrónico</h1>
        <div class="inbox">
            <h4 class="noleido">Correo No Leido:</h4>
            <div class="email">
                <input type="checkbox" id="messageCheckbox">
                <label for="messageCheckbox">FELICIDADES POR COMPLETAR EL 1ER GRADO DE PRIMARIA</label>
            </div>
            <h4 class="leido">Correo Leido:</h4>
        </div>
    </div>
</body>
</html>
