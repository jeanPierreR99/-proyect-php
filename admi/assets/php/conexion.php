<?php
    
    $user="root";
    $pass="root";
    $server="localhost";
    $db="biblioteca";
    
    $conectar = mysqli_connect($server,$user,$pass,$db);
    $conectar -> set_charset("utf8");
?>