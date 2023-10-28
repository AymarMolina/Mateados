<?php 
    session_start();
    include 'conexion_be.php';

    $user=$_POST['user'];
    $password=$_POST['password'];
    $password=hash('sha512',$password);

    $verify_login=mysqli_query($conexion,"SELECT * FROM users WHERE user='$user' and passw='$password'");

    if(mysqli_num_rows($verify_login)>0){
        $_SESSION['user']=$user;
        header("location:../html/BienvenidaUsuario.php");
        exit();
    }else{
        header("location:../InicioSesion.php?error=1");
        exit();
    }

?>