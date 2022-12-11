<?php

include("conexion.php");

if(isset($_POST['subir-prestamo'])){

            $iten1 = $_POST['id_li'];
            $iten2 = $_POST['co_e'];
            $iten3 = $_POST['fecha_e'];
            $iten4 = $_POST['fecha_i'];

            $insertar = "INSERT INTO prestamo VALUES ('','$iten1','$iten2','$iten3','$iten4')";

            $query = mysqli_query($conectar, $insertar) or die ("errrorrrrrrrrrrrrrrrrrrr datos");
            
            header("Location: ../html/inicio.html");
}

?>