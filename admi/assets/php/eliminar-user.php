<?php
include("conexion.php");

$id=$_GET['id'];

            $eliminar = "DELETE from usuario where u_dni='$id' ";

            $query = mysqli_query($conectar, $eliminar) or die ("errrorrrrrrrrrrrrrrrrrrr datos");
        
if($query){
    header("Location: ../html/inicio.html");

}
else{
    echo "<script>alert('no se pudo eliminar');</script>";
}

?>