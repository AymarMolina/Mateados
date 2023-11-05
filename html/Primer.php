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
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="../css/Primer.css">
    <link rel="icon" href="../images/ima.png">
  </head>
  <body>
    <div class="pantalla">
      <div class="div">
        <div class="mateados"><b><i>MATEADOS</i></b></div>
        <div class="acerca">Acerca de</div>
        <div class="donacion">Donacion</a></div>
        <div class="redes">Redes</div>
        <div class="boton-1">
            <div class="inscribirme">
                <a href="../html/teoria1.html"><p>Inscribirme</p></a>
              </div>
        </div>
        <div class="boton-2">
            <div class="volver">
                <a href="../html/Grados.php"><p>Volver</p></a>
            </div>
        </div>
        <div class="boton-3">
            <div class="cuenta">
                <a href="../php/close_session.php"><p>Cerrar</p></a>
            </div>
        </div>
        <div class="texto">
          <div class="txt">1er <br />Grado de Primaria</div>
          <img class="imagen" src="../images/1.png" />
        </div>
        <div class="tema-1">1. Representando números hasta el 10</div>
        <div class="tema-2">2. Juego de sumar</div>
        <div class="tema-3">3. Juego de bolitas coloridas</div>
        <div class="tema-4">4. Números Mágicos y sus Palabras Secretas</div>
        <p class="palabra">UNIDADES
      </div>
    </div>
  </body>
</html>
