<?php
$serverName = 'DIANIS';
$connectionInfo = array("Database"=>"db_ejemplo", "UID"=>"Dianis", "PWD"=>"2710", "CharacterSet"=>"UTF-8");
$conn_sis = sqlsrv_connect($serverName, $connectionInfo);

if($conn_sis){ 
    echo"conexion exitosa";
}else{
    echo "fallo en la conexion";
     die( print_r(sqlsrv_errors(), true));
}

$sql = 'CREATE DATABASE db_prueba';
$stmt = sqlsrv_query ( $conn, $sql );

if ($stmt === true) {
    
 echo "La base de datos db_php fue creada con exito";
    
} else {
    
    die (print_r( sqlsrv_errors(), true));
    
}


?>