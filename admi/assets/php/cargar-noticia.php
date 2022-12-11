<?php

include("conexion.php");

if(isset($_POST['subir-noticia'])){

            $iten1 = $_POST['titulo'];
            $iten2 = $_POST['contenido'];




            $insertar = "	UPDATE noticia set titulo_noticia='$iten1', contenido_noticia='$iten2'  where id_noticia=1;";

            $query = mysqli_query($conectar, $insertar) or die ("errrorrrrrrrrrrrrrrrrrrr datos");

            header("Location: ../html/inicio.html");
}

?>