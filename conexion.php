<?php
error_reporting(0);
function conectar(){
    $host="localhost";
    $user="root";
    $pass="123";

    $bd="clientes";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
    $con = mysqli_connect("localhost","root","123","clientes");
    if ($con) {
    echo "se ha conectado a la base de datos correctamente";
    }else{
    echo"no esta conectado a la base de datos";

}
?>
