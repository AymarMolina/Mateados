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
    <title>Grados</title>
    <link rel="icon" href="../images/ima.png">
    <link rel="stylesheet" href="../css/Grados.css" />
    
  </head>
  <body>
    <div class="pantalla-grados">
      <div class="div">
        <div class="mateados"><b><i>MATEADOS</i></b></div>
        <div class="acerca">Acerca de</div>
        <div class="donacion">Donacion</a></div>
        <div class="redes">Redes</div>
        <div class="botones">
          <div class="volver">
            <a href="../html/BienvenidaUsuario.php"><p>Volver</p></a>
          </div>
        </div>
        <div class="cuenta">
          <a href="cerrar_sesion.php"><p>Cerrar</p></a>
        </div>
        <div class="imagen-1">
          <div class="elipse"></div>
          <div class="primer">1er Grado de Primaria</div>
          <a href="../html/Primer.php">
            <img class="img-1" src="../images/1.png" />
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
