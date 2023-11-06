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
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mateados</title>
    <meta name="description" content="">
    <link rel="icon" href="images/ima.png" sizes="32x32" type="image/png">

    <!--  Este es comentario-->
    <!-- custom.css -->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
	<!-- font-awesome -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    
    <!-- AOS -->
    <link rel="stylesheet" href="../css/aos.css">

    <!-- ESTILOS CREADOS -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <!-- banner -->
    <div class="jumbotron jumbotron-fluid" id="banner" style="background-image: url(images/banner-bk.jpg);">
        <div class="container text-center text-md-left">
            <header>
                <div class="row justify-content-between">
                    <div class="col-2">
                        <img src="images/ima.png" alt="logo">
                    </div>
                    <div class="col-6 align-self-center text-right">
                        <a href="Registro.php" class="boton-registro lead">Regístrate</a>
                    </div>
                </div>
            </header>
            <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="display-3 color-texto font-weight-bold my-5">
            	¡Bienvenid@ <br>
            	a Mateados!
            </h1>
            <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead color-texto my-4">
                "¡Preparate para un viaje matemático emocionante con Mateados! 🚀 
                <br> ¡Inscríbete ahora y conviértete en maestr@ de las matemáticas! <br>🎉 ¡Inscripciones abiertas! 📚✨"
            </p>
            <a href="Registro.php" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-4 font-weight-bold atlas-cta cta-green">Inscríbete aquí</a>
        </div>
    </div>
    <!-- three-blcok -->
    <div class="container my-5 py-2">
        <h2 class="text-center font-weight-bold my-5">La armadura más poderosa para tus habilidades matemáticas</h2>
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="images/smart-protect-1.jpg" alt="Anti-spam" class="mx-auto">
                <h4>Explora</h4>
                <p>El fascinante mundo de las matemáticas, donde cada concepto se convierte en una aventura educativa única.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="images/smart-protect-2.jpg" alt="Phishing Detect" class="mx-auto">
                <h4>Aprende</h4>
                <p>De manera interactiva con nuestra metodología didáctica innovadora.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="images/smart-protect-3.jpg" alt="Smart Scan" class="mx-auto">
                <h4>Diviértete</h4>
                <p>Mientras desarrollas tus habilidades matemáticas con juegos, actividades y desafíos entretenidos.</p>
            </div>
        </div>
    </div>
    <!-- feature (skew background) -->
    <div class="jumbotron jumbotron-fluid feature" id="feature-first">
        <div class="container my-5">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                    <h2 class="font-weight-bold">Descubre y juega</h2>
                    <p class="my-4">Explora nuestro mundo lleno de juegos matemáticos interactivos y desafiantes. 
                         Embárcate en emocionantes aventuras que te enseñarán sobre números, formas y mucho más.</p>
                    <a href="Registro.php" class="btn my-4 font-weight-bold atlas-cta cta-blue">Aprender más</a>
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center">
                    <img src="images/feature-1.png" alt="Take a look inside" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
    <!-- feature (green background) -->
    <div class="jumbotron jumbotron-fluid feature" id="feature-last">
        <div class="container">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 flex-md-last">
                    <h2 class="font-weight-bold"  style=" color: white;">Características únicas</h2>
                    <p class="my-4">
                        
"Descubre el mundo de ExploraMatemáticas con cuestionarios interactivos emocionantes y explicaciones simples. Gana medallas por tus logros y explora temas matemáticos divertidos. ¡Aventúrate y aprende con nosotros!"
                    </p>
                    <a href="Registro.php" class="btn my-4 font-weight-bold atlas-cta cta-blue">¡Comienza Ahora!</a>
                </div>
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center flex-md-first">
                    <img src="images/feature-2.png" alt="Safe and reliable" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>

    
    <!-- client -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="images/client-1.png" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="images/client-2.png" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="images/client-3.png" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="images/client-4.png" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="images/client-5.png" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="images/client-6.png" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
    

	<!-- copyright -->
	<div class="jumbotron jumbotron-fluid" id="copyright">
        <div class="container">
            <div class="row justify-content-between">
            	<div class="col-md-6 text-white align-self-center text-center text-md-left my-2">
                    Copyright © 2023 Chen, Yi-Ya.
                </div>
                
    
    <!-- AOS -->
    <script src="../js/aos.js"></script>
    <script>
      AOS.init({
      });
    </script>
</body>

</html>