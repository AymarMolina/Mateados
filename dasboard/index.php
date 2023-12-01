<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
    
        <div class="row">
            <div>
                <span id="idMasculino" style="visibility: hidden;">35</span>
                <span id="idFemenino" style="visibility: hidden;">35</span>
            </div>
            <div class="col-md-4">
                <div class="card text-bg-success text-center m-1">
                    <div class="card-header">Usuarios</div>
                    <div class="card-body">
                        <h5 class="card-title"><span id="idRegistros">35</span></h5>
                        <p class="card-text">Cantidad de usuarios registrados</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-bg-warning text-white text-center m-1" >
                    <div class="card-header">Edades</div>
                    <div class="card-body">
                        <h5 class="card-title"><span id="idEdades">35</span></h5>
                        <p class="card-text">Edad promedio de alumnos</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-bg-info text-white text-center m-1">
                    <div class="card-header">Colegios</div>
                    <div class="card-body">
                        <h5 class="card-title"><span id="idColegios">35</span></h5>
                        <p class="card-text">Colegios utilizando la pagina</p>
                    </div>
                </div>
        </div>
        </div>
        <div class="row my-3">
            <div class="col-md-12 text-center">
                <h2>Reporte de ingresos a la pagina</h2>
                <canvas id="idGrafica" class="grafica"></canvas>
            </div>
        </div>
        <div class="row my-3"style="display:flex;justify-content:center">
            <div class="col-md-6 text-center">
                <h2>Reporte genero</h2>
                <canvas id="idGraficaGenero" class="grafica"></canvas>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-12 text-center">
                <h2>Reporte cantidad-colegio de estudiantes</h2>
                <canvas id="idGraficaColegio" class="grafica"></canvas>
            </div>
        </div>



        
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="js/index.js"></script>
</body>
</html>