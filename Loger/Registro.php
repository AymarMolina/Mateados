<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registro</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=1920px; initial-scale=1.0; maximum-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/Registro.css">
    <link rel="icon" href="../images/Logo.jpg">
</head>
<body>
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
                    <input type="submit" value="Resgistrarse">         
                </form>
            </div>
        </div>
    </div>
</body>
</html>