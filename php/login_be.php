<?php 
    session_start();
    include 'conexion_be.php';

    $user=$_POST['user'];
    $password=$_POST['password'];
    $password=hash('sha512',$password);

    if($user=="admin" && $password==hash('sha512', "12345678")){
        header("location:../dasboard/index.php");
        exit();
    }

    $verify_login=mysqli_query($conexion,"SELECT * FROM users WHERE user='$user' and passw='$password'");

    if(mysqli_num_rows($verify_login)>0){
        $_SESSION['user']=$user;
        header("location:../html/Bienvenida.php");
        exit();
    }else{
        header("location:../Loger/InicioSesion.php?error=1");
        exit();
    }

?>