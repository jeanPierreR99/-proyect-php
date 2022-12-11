
<?php 
/*

$host = "localhost";
$bd = "dayana-crochet";
$user = "root";
$pass ="";
try{
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$user,$pass);
    if($conexion){
        echo "conectado a base de datos";}
        }catch (Exception $ex){
        echo $ex->getMessage();
    }

*/
    ?>
<?php
    require 'ConexionBD/conexionsql.php';
    $BD=new Database();
    $conexion=$BD->conectar();
    
    $sql = $conexion->prepare("INSERT INTO `productos` (`id_produc`, `nombre_p`, `descripcion_p`, `precio_p`) VALUES (NULL, 'Brigith', 'Producto tejido a crochet', '50.00');");
    $sql->execute();
    //$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    ?>
    