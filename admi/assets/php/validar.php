<?php
$u_user=$_POST['user'];
$u_pass=$_POST['pass'];
$u_cl = $_POST['clase'];

session_start();
$_SESSION['user']=$u_user;

include("conexion.php");


$consulta = "SELECT *from usuario where u_nombre='$u_user' and u_dni='$u_pass' and u_clase ='$u_cl'";

$query = mysqli_query($conectar, $consulta) or die ("errrorrrrrrrrrrrrrrrrrrr datos");

$filas=mysqli_num_rows($query);

if($filas){
    if($u_cl=="ADMINISTRADOR"){
    header("location: ../html/inicio.html");
    }
    if($u_cl=="ESTUDIANTE"){
        header("location: ../../estudiante/html/index.php");
    }
    if($u_cl=="DOCENTE"){
        header("location: ../../docente/html/index.php");
    }
}
else{
    echo"<script>alert('datos incorrectos');</script>";
    include("../html/index.php");
    
}

mysqli_free_result($query);
mysqli_close($conectar);
?>