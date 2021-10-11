<?php

include("conexion.php");
$con=conectar();

$cod_cliente=$_POST['cod_cliente'];
$nombre=$_POST['nombre'];
$rut=$_POST['rut'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$fecha_reg = date("d/m/y");

$sql="UPDATE datos SET  nombre='$nombre',rut='$rut',direccion='$direccion',telefono='$telefono',email='$email',fecha_reg='$fecha_reg' 
WHERE cod_cliente='$cod_cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: clientes.php");
    }
?>
