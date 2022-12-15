<?php
 include("conexion.php");

 $id=$_GET['cod'];

 $insertar = "INSERT INTO pedidos_aceptados select id_user, id_products, now() from pedido where id_user=$id;";

 $query = mysqli_query($conection, $insertar) or die("errrorrrrrrrrrrrrrrrrrrr datos");

$consultaDelete = "DELETE from pedido where id_user=$id";
$queryDelete = mysqli_query($conection, $consultaDelete) or die("errrorrrrrrrrrrrrrrrrrrr datos");
?>