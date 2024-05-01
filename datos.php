<?php 
    include("conectar_bd2.php");
   

    $sql="SELECT *  FROM datos";
    $query=mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <body style="background-color:CornflowerBlue">
        <title> REGISTRO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-3">
                    <div class="input-wrapper"> 
                        
                        <div class="col-md-5">
                            <h1>Ingrese datos</h1>
                                <form action="datos2.php" method="POST">
                                    <br>
                                <input type="text" class="form-control mb-3" name="CURP" required  placeholder="CURP">
                                <input type="text" class="form-control mb-3" name="CORREO" required placeholder="Correo del estudiante">
                                <input type="text" class="form-control mb-3" name="NO_TELEFONO" placeholder="NO_TELEFONO">
                                <input type="text" class="form-control mb-3" name="FECHA_NACIMIENTO" placeholder="FECHA_NACIMIENTO">
                                <input type="text" class="form-control mb-3" name="DOMICILIO" placeholder="DOMICILIO">
                                <input type="text" class="form-control mb-3" name="SEMESTRE" placeholder="SEMESTRE">
                                <input type="text" class="form-control mb-3" name="CARRERA" required placeholder="CARRERA">


                                <input type="submit" class="btn btn-primary" value="Enviar"><a href="datos2.php?">
                                </form>
                        </div>
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>CURP</th>
                                        <th>CORREO</th>
                                        <th>NO_TELEFONO</th>
                                        <th>FECHA_NACIMIENTO</th>
                                        <th>DOMICILIO</th>
                                        <th>SEMESTRE</th>
                                        <th>CARRERA</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>

                                <tbody>
                                        <?php
             while($row=mysqli_fetch_array($query)){
                                        ?>
                                        

                                            <tr>
                                                <th><?php  echo $row['CURP']?></th>
                                                <th><?php  echo $row['CORREO']?></th>
                                                <th><?php  echo $row['NO_TELEFONO']?></th>
                                                <th><?php  echo $row['FECHA_NACIMIENTO']?></th>
                                                <th><?php  echo $row['DOMICILIO']?></th>
                                                <th><?php  echo $row['SEMESTRE']?></th>
                                                <th><?php  echo $row['CARRERA']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['ID'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['ID'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                            <!--------------------------------video---------------------------->
            <video width="700" controls>
            <source src="assets/CECyTE EMSaD Tlaxcala.mp4" type="video/mp4">
        </video>
        <!-----------------------fin-video------------------------------------>
                        </div>
                        
                    </div> 
            </div>
            <div><th><a href="despedida1.php" class="btn btn-info">Continuar</a></th>
            </div>
    </body>

</html>