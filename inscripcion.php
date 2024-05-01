<?php 
    include("conectar_bd2.php");

    
    $sql="SELECT *  FROM inscripcion";
    $query=mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <body style="background-color:MediumSeaGreen">
        <title> REGISTRO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>

    <script>
 $(document).ready(function(){
 $('#continuar').click(function)(){
 }}
 if($('#NOMBRE_COMPLETO').val()=="")||$("#NOMBRE_COMPLETO").val()=="Nombres del estudiante"){
    alert("por favor, completa el nombre");
    return false;
 }
 else if $(document).ready(function(){
 $('#continuar').click(function)(){
 }}
 if($('#EDAD').val()=="")||$("#EDAD").val()=="EDAD"){
    alert("por favor, completa la Edad");
    return false;
 }
 else if $(document).ready(function(){
 $('#continuar').click(function)(){
 }}
 if($('#SEXO').val()=="")||$("#SEXO").val()=="SEXO"){
    alert("por favor, completa el Sexo");
    return false;
 }

 </script>


    <body>
          <center>
            <div class="container mt-3">
            <center>
                    <div class="row"> 
                        <center>
                        <div class="col-md-5">
                        <center>
                            <h1>Ingrese datos</h1>
                                <form action="datos.php" method="POST">
                                <input type="text" class="form-control mb-3" name="NOMBRE_COMPLETO" required placeholder="Nombres del estudiante">
                                <input type="text" class="form-control mb-3" name="EDAD" required placeholder="EDAD">
                                Sexo: 
        <select name="SEXO"  required placeholder="">
            <option value="">Seleccione</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
        </select><br>
                                <BR></BR><input  type="submit" name="continuar" class="btn btn-primary" value="Continuar" a href="datos.php">
                                </form>
                        </div>
                        </center>
                        </div>
                        </center>
                    </div> 
                    </center> 
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
        <div class="post-image">
        <div>
        <img src="./assets/cecyte.jpg" class="img" alt="blog1">
        </div>
        <div class="post-info flex-row">
        <div>
        </div>
    </body>
</html> 