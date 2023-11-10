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
    <title>Bienvenido</title>
    <link rel="stylesheet" href="../css/BienvenidaUsuario.css">
    <link rel="icon" href="../images/Logo.jpg">
  </head>
  <body>
    <div class="contenido">
      <div class="div">
        <div class="mateados">MATEADOS</div>
        <div class="acerca">Acerca de</div>
        <div class="donacion">Donacion :)</div>
        <div class="redes">Redes</div>
        <div class="botones">
          <div class="grados">
            <a href="Grados.php"><p>Grados</p></a>
          </div>
        </div>
        <div class="cuenta">
          <a href="../php/close_session.php"><p>Cerrar</p></a>
        </div>
        <div class="imagen">
          <img class="img" src="../images/ima.png" />
        </div>
        <div class="bienvenido">Bienvenido</div>
        <p class="gracias-por-elegir">
          <span class="span"
            >Gracias por elegir este sitio web para reforzar tus conocimientos en el área de matemática básica.<br /><br />Dirigase
            al boton
          </span>
          <span class="negrita">Grados</span>
          <span class="span"> para poder comenzar con su reforzamiento matemático.</span>
        </p>
        <div class="user"><?php echo $_SESSION["user"];?></div>
        
      </div>
    </div>
  </body>
</html>
