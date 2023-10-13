<?php 

    session_start();
    if(!isset($_SESSION['user'])){
        echo '
        <script>
            alert("Porfavor debes iniciar sesion");
            window.location="InicioSesion.php";
        </script>
        ';
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos</title>
</head>
<body>
    <h1>Bienvenido a mi mundo!</h1>
    <a href="php/close_session.php">Cerrar sesion</a>
</body>
</html>