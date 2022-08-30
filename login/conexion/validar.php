<?php

$email = $_POST['email'];
$contraseña = $_POST['password'];

session_start();
$_SESSION['email']=$email;
include('db.php');

$consulta = "SELECT*FROM usuarios where email='$email' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("Location: ./../home.php");
}else{
    header("Location: ./../index.php?error=1");
}

mysqli_free_result($resultado);
mysqli_close($conexion);