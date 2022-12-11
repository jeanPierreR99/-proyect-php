<?php

include("conexion.php");

if(isset($_POST['subir-user'])){

            $iten1 = $_POST['nombre'];
            $iten2 = $_POST['apellido'];
            $iten3 = $_POST['codigo'];
            $iten4 = $_POST['dni'];
            $iten5 = $_POST['carrera'];
            $iten6 = $_POST['telefono'];
            $iten7 = $_POST['clase'];



            $insertar = "INSERT INTO usuario VALUES ('$iten7','$iten1','$iten2','$iten3','$iten4','$iten5','$iten6')";

            $query = mysqli_query($conectar, $insertar) or die ("errrorrrrrrrrrrrrrrrrrrr datos");

            header("Location: ../html/inicio.html");
}

?>