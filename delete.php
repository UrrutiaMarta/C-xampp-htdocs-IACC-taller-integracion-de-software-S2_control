<?php

include("conexion.php");
$con=conectar();

$cod_cliente=$_GET['id'];

$sql="DELETE FROM datos  WHERE cod_cliente='$cod_cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: clientes.php");
    }
?>
