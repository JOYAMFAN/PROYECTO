<?php
include("conectar_bd2.php");
$CURP= $_POST['CURP'];
$CORREO= $_POST['CORREO'];
$NO_TELEFONO= $_POST['NO_TELEFONO'];
$FECHA_NACIMIENTO= $_POST['FECHA_NACIMIENTO'];
$DOMICILIO= $_POST['DOMICILIO'];
$SEMESTRE= $_POST['SEMESTRE'];
$CARRERA= $_POST['CARRERA'];

if(empty($CORREO))
{
    ECHO "Ingresa tu correo";
}
elseif (empty($CURP)) {
    echo "Ingresa tu curp";
}elseif(empty($NO_TELEFONO))
{
  echo "Ingresa tu numero telefonico";
}
elseif(empty($FECHA_NACIMIENTO))
{
    echo "Ingresa tu fecha de nacimiento";
}
elseif(empty($DOMICILIO))
{
    echo"Ingresa tu domicilio";
}
elseif(empty($SEMESTRE))
{
    echo "Ingresa tu semestre";
}
elseif(empty($CARRERA))
{
    echo "Ingresa tu carrera";
}
else{
$sql="INSERT INTO datos VALUES('$ID','$CURP','$CORREO','$NO_TELEFONO','$FECHA_NACIMIENTO','$DOMICILIO','$SEMESTRE','$CARRERA')";
$query = mysqli_query($conexion,$sql);

if($query){
    Header("Location:datos.php");
}else {


}
}
?>