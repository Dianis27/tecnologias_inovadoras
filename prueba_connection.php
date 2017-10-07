<?php
class Create_database
{
 protected $pdo;
 
 public function__construct()
 {
$serverName = "DIANIS";
$connectionInfo = array( "UTD"=>"Dianis","PWD"=>"2710");
$conn = sqlsrv_connect ( $serverName, $connectionInfo);
if( $conn === false){
    die (print_r( sqlsrv_errors(), true));
}
 }

    public function my_db()
 {
 
//creamos la base de datos si no existe
 $crear_db = $this=>pdo=>prepare('CREATE DATABASE IF NOT EXISTS ejemplo_php');   
 $crear_db->execute();
 
 //decimos que queremos usar la tabla que acabamos de crear
 if($crear_db):
 $use_db = $this->pdo->prepare('USE ejemplo_php');   
 $use_db->execute();
 endif;

if($use_db):
 //creamos la tabla usuarios
 $crear_tb_users = $this->pdo->prepare('
 CREATE TABLE IF NOT EXISTS tbl_users (
 id int(11) NOT NULL AUTO_INCREMENT,
 name varchar(100) COLLATE utf8_spanish_ci NOT NULL,
 lastname varchar(150) NOT NULL,
 username varchar(100) NOT NULL,
 password varchar(100) NOT NULL,
 email varchar(100) NOT NULL,
 registro date NOT NULL,
 PRIMARY KEY (id)
     )'); 
 $crear_tb_users->execute();
 endif;
    }
 
//ejecutamos la función my_db para crear nuestra bd y las tablas
$db = new Create_database();
$db->my_db();
?>