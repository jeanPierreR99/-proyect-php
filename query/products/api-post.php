<?php

// include('connection.php');
if($_SERVER['REQUEST_METHOD']!='POST'){
    http_response_code(404);
    return;
}

// header("content-type: application/json; charset=utf-8");
$body= file_get_contents("php://input");
$dataJson=json_decode($body,true);
// print_r(json_encode($dataJson));
// http_response_code(201);
echo count($dataJson);

for($i=0;$i<count($dataJson);$i++){
    $stmt="INSERT INTO purchase VALUES(0,1,".$dataJson[$i]['id'].",".$dataJson[0]['date'].",)";
}
//id idclient idproduct datepurchase idstatuspurchase
$stmt = "INSERT INTO usuario VALUES ('$iten7','$iten1','$iten2','$iten3','$iten4','$iten5','$iten6')";
$query = mysqli_query($conectar, $stmt) or die ("errror datos");
