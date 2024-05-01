<?php
include("conectar_bd2.php");


$ID=$_GET['id'];

$sql="SELECT * FROM cliente WHERE id='$ID'";
$query=mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
 <head>
   <tittle> </tittle>
   <meta charset="UFT-8">
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <link href="css/style.css"rel="stylesheet">
   <title>actualizar</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
   <div class="container mt-5">

                                <form action="update.php" method="POST">
                                <input type="hidden"name="ID" value="<?php echo $row ['ID'] ?>">
                                <input type="text" class="form-control mb-3" name="NOMBRE_CLIENTE" placeholder="NOMBRE_CLIENTE" value="<?php echo $row['NOMBRE_CLIENTE'] ?>" >
                                <input type="text" class="form-control mb-3" name="NO_TELEFONO" placeholder="NO_TELEFONO"value="<?php echo $row['NO_TELEFONO'] ?>" >
                                <input type="text" class="form-control mb-3" name="DOMICILIO" placeholder="DOMICILIO"
                                value="<?php echo $row['DOMICILIO'] ?>" >
                                <input type="text" class="form-control mb-3" name="CODIGO_POSTAL" placeholder="CODIGO_POSTAL"
                                value="<?php echo $row['CODIGO_POSTAL'] ?>" >
                                <input type="submit" class="btn btn-primary" value="actualizar">
                                </form>
                        </div>
                        
                    </body>
                    </html>