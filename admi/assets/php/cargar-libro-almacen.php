<?php
include("conexion.php");

if(isset($_POST['subir-libro-almacen'])){

    $Pnombre = $_FILES['portada-a']['name'];
    $Pruta = $_FILES['portada-a']['tmp_name'];
    $Pdestino ="../../portadas-almacen/". $Pnombre;

    if($Pnombre != ""){

        if(copy($Pruta,$Pdestino)){

            $iten1 = $_POST['id'];
            $iten2 = $_POST['materia'];
            $iten3 = $_POST['autor'];
            
            $insertar = "INSERT INTO  libroalmacen VALUES ('$iten1','$iten2','$iten3','$Pnombre')";

            $query = mysqli_query($conectar, $insertar) or die ("errrorrrrrrrrrrrrrrrrrrr datos");
            
            header("Location: ../html/inicio.html");
        }
        else{
            echo "error";
        }
   }
}
?>