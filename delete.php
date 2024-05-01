<?php
include("conectar_bd2.php");
$cod=$_GET['id'];
$sql="DELETE FROM cliente WHERE id='$cod'";
$query=mysqli_query($conexion,$sql);
if($query){
    header("Location: datos2.php");
}
?>