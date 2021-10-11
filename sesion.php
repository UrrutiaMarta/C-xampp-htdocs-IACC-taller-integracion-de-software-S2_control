<html>
<head>
<link rel="stylesheet" type="text/css" href="nestilo.css"> 
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['u_usuario'])){
        echo "Sesion exitosa";
        
        echo "<a href='cerrar_sesion.php'>Cerrar sesion</a>";
            echo "<h1>  Mi nombre es " .$_SESSION['u_usuario']."</h1>";
        header("Location: clientes.php");
    }else{
    header("Location: loging.php");
    echo "Usuario o contraseña invalida";
    }
    ?>
</body>

</html>