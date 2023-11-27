<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registro</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/Registro.css">
    <link rel="icon" href="../images/Logo.jpg">
</head>
<body>
    <div class="container__cover">
         <div class="cover" id="uno">
    <div class="container-form">
        <div id="container-right">
            <div id="loginArea">
                <p class="p1">Registro</p>
                <form action="../php/register_user_be.php" method="POST"class="form">
                    <label class="user">
                        <i class='bx bx-user'></i>
                        <input type="text" placeholder="Ingresar su usuario" name="user" minlength="5" required> 
                    </label>
                    <label class="email">
                        <i class='bx bx-envelope'></i>
                        <input type="email" placeholder="Ingrese su correo" name="email" required>
                    </label>
                    <label class="password">
                        <i class='bx bx-lock-open'></i>
                        <input type="password" placeholder="Ingrese su contraseña" name="password" minlength="8" required>
                    </label>
                    <label class="age">
                        <i class='bx bx-lock-open'></i>
                        <input type="text" placeholder="Ingrese su edad" name="age" required>
                    </label>
                    <select class="form-select" style="background-color: #2b2e38; color:white; margin:25px; width:380px;" aria-label="Default select example" name="gender">
                        <option selected>Elige tu genero</option>
                        <option value="1">Masculino</option>
                        <option value="2">Femenino</option>
                    </select>
                    <input type="submit" value="Resgistrarse">         
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
