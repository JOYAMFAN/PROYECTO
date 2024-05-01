<?php
include("conectar_bd2.php");
$ID= $_POST['ID'];
$CURP= $_POST['CURP'];
$CORREO= $_POST['CORREO'];
$NO_TELEFONO= $_POST['NO_TELEFONO'];
$FECHA_NACIMIENTO= $_POST['FECHA_NACIMIENTO'];
$DOMICILIO= $_POST['DOMICILIO'];
$SEMESTRE= $_POST['SEMESTRE'];
$CARRERA= $_POST['CARRERA'];


$sql="INSERT INTO datos VALUES('$ID','$CURP','$CORREO','$NO_TELEFONO','$FECHA_NACIMIENTO','$DOMICILIO','$SEMESTRE','$CARRERA')";
$query = mysqli_query($conexion,$sql);

if($query){
    Header("Location:datos.php");
}else {


}
    
?>