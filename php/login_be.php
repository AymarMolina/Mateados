<?php 
    session_start();
    include 'conexion_be.php';

    $user=$_POST['user'];
    $password=$_POST['password'];
    $password=hash('sha512',$password);

    $verify_login=mysqli_query($conexion,"SELECT * FROM users WHERE user='$user' and passw='$password'");

    if(mysqli_num_rows($verify_login)>0){
        $_SESSION['user']=$user;
        header("location:../Bienvenida.php");
        exit();
    }else{
        echo'
            <script>
                alert("Usuario no existe, verifique los datos");
                
            window.location="../InicioSesion.php";
            </script>
        ';
        exit();
    }
?>