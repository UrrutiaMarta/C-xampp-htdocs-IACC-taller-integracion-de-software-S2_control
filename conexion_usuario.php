<?php
session_start();

$usuario = $_POST ['usuario'];
$contraseña = $_POST ['contraseña'];
 include ("conexion_login.php");

 $proceso = mysqli_query($conexion, "SELECT * FROM usuarios WHERE 
 usuario = '$usuario' AND
 contraseña = '$contraseña' ");

 if ($resultado = mysqli_fetch_array ($proceso)){
     $_SESSION['u_usuario']=$usuario;
     header("Location: sesion.php");
 }
else
{
    header("Location: loging.php" );
}
?>