<?php
include("conexion.php");

$id=$_GET['id'];

            $eliminar = "DELETE from libroalmacen where id_li='$id' ";
            
            $query = mysqli_query($conectar, $eliminar) or die ("existen prestamos-reservacioens de este libro");
        
if($query){
    header("Location: ../html/inicio.html");

}
else{
    echo "<script>alert('no se pudo eliminar');</script>";
}

?>