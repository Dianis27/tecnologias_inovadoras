<?php

$serverName = "DIANIS";
$connectionInfo = array( "UID"=>"Dianis","PWD"=>"2710");
$conn = sqlsrv_connect ( $serverName, $connectionInfo);
if( $conn === false){
    die (print_r( sqlsrv_errors(), true));
}

$sql = 'CREATE DATABASE db_conexion';
$stmt = sqlsrv_query ( $conn, $sql );

if ($stmt == true) {
    
 echo "La base de datos db_conexion fue creada con exito";
    
} else {
    
    die (print_r( sqlsrv_errors(), true));
    
}

sqlsrv_free_stmt ($stmt);
sqlsrv_close ($conn);

?>