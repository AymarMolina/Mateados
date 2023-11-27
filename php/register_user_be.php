<?php 
    include 'conexion_be.php';

    $user=$_POST['user'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];

    date_default_timezone_set("");
    $date=date("Y-m-d");

    //encriptando password
    $password=hash('sha512',$password);

    $query="INSERT INTO users(user, email, passw, edad, gender,fecha) values('$user','$email','$password','$age','$gender','$date')";
    //VERIFICAR QUE EL CORREO NO SE REPITA EN LA BASE DE DATOS
    $verify_email=mysqli_query($conexion,"SELECT * FROM users WHERE email='$email'");
    if(mysqli_num_rows($verify_email)>0){
        echo '
            <script>
                alert("Este correo ya registrado");
                window.location="../Loger/Registro.php";
            </script>
        ';
        exit();
    }
    $verify_user=mysqli_query($conexion,"SELECT * FROM users WHERE user='$user'");
    if(mysqli_num_rows($verify_user)>0){
        echo '
            <script>
                alert("Este usuario ya esta registrado");
                window.location="../Loger/Registro.php";
            </script>
        ';
        exit();
    }

    //conexion con la base de datos
    $ejec=mysqli_query($conexion,$query);
    if($ejec){
        echo '<script>
            alert("Usuario registrado correctamente");
            window.location="../Loger/InicioSesion.php";
        </script>';
    }else{
        echo '
            <script>
                alert("Intentelo de nuevo");
                window.location="../Loger/InicioSesion.php";
            </script>
        ';
    }
    mysqli_close($conexion);

?>