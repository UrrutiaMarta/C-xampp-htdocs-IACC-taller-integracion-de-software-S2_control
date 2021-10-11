<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM datos";
    $query=mysqli_query($con,$sql);


    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA CLIENTES</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="nestilo.css"> 
        <a href="manual/manual_de_usuario.pdf" class="pfd"  download="manual_de_ayuda_usuario.pdf"> Descargar Manual de ayuda</a> 
        <a href='cerrar_sesion.php'>Cerrar sesion</a>
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese sus datos</h1>
                                <form action="insertar.php" method="POST">
                                <input type="text" class="form-control mb-3" name="cod_cliente" placeholder="cod_cliente" value="<?php echo $cod_cliente?>" >
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre completo"value="<?php echo $nombre?>">
                                <input type="text" name="rut" id="_rut" title="por favor escriba su rut así 11.111.111-1"
                                 placeholder="11.111.111-1"  pattern="[0-9]{1,2}.[0-9]{3}.[0-9]{3}-[0-9Kk]{1}"value="<?php echo $rut?>">
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion"value="<?php echo $direccion?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono"value="<?php echo $telefono?>">
                                <input type="text" class="form-control mb-3" name="email" placeholder="email"value="<?php echo $email?>">
                                <input type="text" class="form-control mb-3" name="fecha_reg" placeholder="d/m/Y"value="<?php echo $fecha_reg?>">
                                <input type="submit" class="btn btn-primary">
                                </form>
                                
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo_Cliente</th>
                                        <th>nombre</th>
                                        <th>rut</th>
                                        <th>direccion</th>
                                        <th>telefono</th>
                                        <th>email</th>
                                        <th>Fecha de registro</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['cod_cliente']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['rut']?></th>
                                                <th><?php  echo $row['direccion']?></th>
                                                <th><?php  echo $row['telefono']?></th>  
                                                <th><?php  echo $row['email']?></th>  
                                                <th><?php  echo $row['fecha_reg']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row['cod_cliente'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['cod_cliente'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>