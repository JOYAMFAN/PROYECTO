<?php

$severname = "localhost";
$database = "escuela";
$username = "root";
$password = "";

$conexion = mysqli_connect($severname,$username,$password,$database);

if (!$conexion) {
    die("conexion fallida: <br>" . mysqli_connect_error());
}
echo 'conexion exitosa <br>';
?>