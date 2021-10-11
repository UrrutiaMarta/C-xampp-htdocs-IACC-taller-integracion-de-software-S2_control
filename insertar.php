
<?php
include("conexion.php");
$con=conectar();

if (isset($_POST['cod_cliente'])) {//isset determina si una variable está definida y no es null. la usaremos para validar $_POST
    $cod_cliente = $_POST['cod_cliente'];
    $nombre = $_POST['nombre'];
    $rut = $_POST['rut'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $fecha_reg = $_POST['fecha_reg'];

    //VALIDAR los datos ingresados
    
    $campos = array();//utilizaremos este arreglo para insertar todos los mensajes que queremos mostrar
  
    if ($cod_cliente == ""){//si el campo cliente esta vacío
        array_push($campos,"el campo cod_cliente esta vacío");//array push muestra el mensaje
    }
    if ($nombre == ""){
    array_push($campos,"por favor indique su nombre");                                
    }
    if ($rut == ""){
    array_push($campos,"por favor indique su rut");
    }
    if ($direccion == ""){
    array_push($campos,"por favor indique su direccion");
    }
    if ($telefono == ""){
    array_push($campos,"por favor indique su telefono");
    }else{//si no esta vacío pero...
        if(!is_numeric($telefono)){//el dato no es numero
            array_push($campos,"el telefono debe ser numerico");//muestra el siguiente mensaje
        }
    }
    if ($email == ""|| strpos($email, "@")=== false){//si el email es igual a vacio o no contiene un @...
    array_push($campos,"ingresa un correo electronico válido.");//muestra el siguiente mensaje
    }
    if ($fecha_reg == ""){
    array_push($campos,"por favor ingrese la fecha");
    }
  
    if (count($campos)>0) {//si se cuentan los campos <0
        echo"<div class='error'>";//hay error
        for ($i=0; $i < count($campos) ; $i++) { 
            echo"<li>".$campos[$i]."</li>";//mostrar mensajes con li=lista
    }
}else{
        echo"<div class='correcto'>
             Datos correctos";
    }
    echo "</div>";
} 
$sql="INSERT INTO datos VALUES('$cod_cliente','$nombre','$rut','$direccion','$telefono','$email','$fecha_reg')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: clientes.php");
    
}else {
}
?>

