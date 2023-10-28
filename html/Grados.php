<?php 

    session_start();
    if(!isset($_SESSION['user'])){
        echo '
        <script>
            alert("Porfavor debes iniciar sesion");
            window.location="../InicioSesion.php";
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
    <link rel="icon" href="../images/Logo.jpg">
    <link rel="stylesheet" href="../css/Grados.css" />
  </head>
  <body>
    <div class="pantalla-grados">
      <div class="div">
        <div class="mateados">MATEADOS</div>
        <div class="acerca">Acerca de</div>
        <div class="donacion">Donacion :)</div>
        <div class="redes">Redes</div>
        <div class="botones">
          <div class="volver">
            <a href="BienvenidaUsuario.php"><p>Volver</p></a>
          </div>
        </div>
        <div class="cuenta">
          <a href="#"><p>Cuenta</p></a>
        </div>
        <div class="imagen-1">
          <div class="elipse"></div>
          <div class="primer">1er Grado de Primaria</div>
          <a href="Primer.php">
            <img class="img-1" src="../images/1.png" />
          </a>
        </div>
        <div class="imagen-2">
          <div class="elipse"></div>
          <div class="segundo">2do Grado de Primaria</div>
          <a href="Segundo.php">
            <img class="img-2" src="../images/2.png" />
          </a>
        </div>

        <div class="imagen-3">
          <div class="elipse"></div>
          <div class="tercer">3er Grado de Primaria</div>
          <a href="Tercer.html">
            <img class="img-3" src="../images/3.png" />
          </a>
        </div>
        <div class="imagen-4">
          <div class="elipse"></div>
          <div class="cuarto">4to Grado de Primaria</div>
          <img class="img-4" src="../images/4.png" />
        </div>
        <div class="imagen-5">
          <div class="elipse"></div>
          <div class="quinto">5to Grado de Primaria</div>
          <img class="img-5" src="../images/5.png" />
        </div>
        <div class="imagen-6">
          <div class="elipse"></div>
          <div class="sexto">6to Grado de Primaria</div>
          <img class="img-6" src="../images/6.png" />
        </div>
      </div>
    </div>
  </body>
</html>