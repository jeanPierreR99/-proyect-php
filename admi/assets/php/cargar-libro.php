<?php

include("conexion.php");

if(isset($_POST['subir-libro'])){

$nombre = $_FILES['documento']['name'];
$tipo = $_FILES['documento']['type'];
$tamanio = $_FILES['documento']['size'];
$ruta = $_FILES['documento']['tmp_name'];
$destino ="../../archivos/". $nombre;

//imagen
$Pnombre = $_FILES['portada']['name'];
$Ptipo = $_FILES['portada']['type'];
$Ptamanio = $_FILES['portada']['size'];
$Pruta = $_FILES['portada']['tmp_name'];
$Pdestino ="../../portadas/". $Pnombre;

    if($nombre != ""){

        if(copy($ruta, $destino) & copy($Pruta,$Pdestino)){

            $iten1 = $_POST['id_libro'];
            $iten2 = $_POST['materia'];
            $iten3 = $_POST['autor'];
            $iten4 = $_POST['fecha'];
            

            $insertar = "INSERT INTO libro VALUES ('$iten1','$iten2','$iten3','$iten4','$Pnombre','$nombre')";

            $query = mysqli_query($conectar, $insertar) or die ("errrorrrrrrrrrrrrrrrrrrr datos");

            header("Location: ../html/inicio.html");
        
        }
        else{
            echo "error";
        }
    }
}

?>