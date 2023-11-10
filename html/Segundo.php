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
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="../css/Segundo.css">
    <link rel="icon" href="../images/Logo.jpg">
  </head>
  <body>
    <div class="pantalla">
      <div class="div">
        <div class="mateados">MATEADOS</div>
        <div class="acerca">Acerca de</div>
        <div class="donacion">Donacion :)</div>
        <div class="redes">Redes</div>
        <div class="boton-1">
            <div class="inscribirme">
                <a href="#"><p>Inscribirme</p></a>
              </div>
        </div>
        <div class="boton-2">
            <div class="volver">
                <a href="Grados.php"><p>Volver</p></a>
            </div>
        </div>
        <div class="boton-3">
            <div class="cuenta">
                <a href="#"><p>Cuenta</p></a>
            </div>
        </div>
        <div class="texto">
          <div class="txt">2do <br />Grado de Primaria</div>
          <img class="imagen" src="../images/1.png" />
        </div>
        <div class="tema-1">Multiplicación</div>
        <div class="tema-2">Conjuntos</div>
        <div class="tema-3">TEMAS</div>
        <p class="p">Propiedad de adición</p>
      </div>
    </div>
  </body>
</html>
