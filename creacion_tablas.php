<?php

$serverName = "DIANIS";
$connectionInfo = array( "UID"=>"Dianis","PWD"=>"2710");
$conn = sqlsrv_connect ( $serverName, $connectionInfo);
if( $conn === false){
    die (print_r( sqlsrv_errors(), true));
}

$sql = 'CREATE DATABASE db_autos3;

USE db_autos3; 

create table tbl_familia(
cn_id_familia nvarchar (10),
cn_nombre_familiar nvarchar(30) not null,
cn_telefono nvarchar (30) not null, 
constraint Pk_cn_id_familia primary key (cn_id_familia))

create table tbl_empleados(
cn_id_empleado nvarchar (10),
cn_nombre_empleado nvarchar (30) not null,
cn_direccion nvarchar (30) not null, 
cn_telefono nvarchar (10) not null,
cn_fotografia nvarchar (30) not null,
cn_id_familia nvarchar (10),
constraint PK_id_empleado primary key (cn_id_empleado),
constraint Fk_cn_id_familia foreign key (cn_id_familia) references tbl_familia (cn_id_familia))

create table tbl_clientes(
cn_id_cliente nvarchar (10),
cn_nombre_cliente nvarchar(30) not null,
cn_telefono_cliente nvarchar (30) not null,
cn_email_cliente nvarchar (50) not null, 
cn_tipo_cliente nvarchar (50) not null,
constraint PK_id_cliente primary key (cn_id_cliente))

create table tbl_proveedor(
cn_id_proveedor nvarchar (10),
cn_nombre_proveedor nvarchar(30) not null,
cn_direccion nvarchar (30) not null,
cn_telefono nvarchar (50) not null, 
cn_cuenta_bancaria nvarchar (30) not null 
constraint PK_id_proveedor primary key (cn_id_proveedor))

create table tbl_productos(
cn_id_producto nvarchar (10),
cn_nombre_producto nvarchar(30) not null,
cn_marca nvarchar (30) not null,
cn_año int not null,
cn_modelo nvarchar (30),
cn_fotografia_producto varchar (10) not null,
cn_descripcion nvarchar (50) not null,
cn_precio_compra int  not null,
cn_precio_venta int not null,
cn_id_proveedor nvarchar (10),
constraint PK_id_producto primary key (cn_id_producto),
constraint Fk_cn_id_proveedor foreign key (cn_id_proveedor) references tbl_proveedor (cn_id_proveedor))

create table tbl_ventas(
cn_id_venta nvarchar (10),
cn_id_empleado nvarchar (10),
cn_id_cliente nvarchar (10),
fecha date not null ,
monto int not null,
constraint PK_id_venta primary key (cn_id_venta),
constraint Fk_cn_id_empleado foreign key (cn_id_empleado) references tbl_empleados (cn_id_empleado),
constraint Fk_cn_id_cliente foreign key (cn_id_cliente) references tbl_clientes (cn_id_cliente))
    
create table tbl_detalle_ventas(
cn_id_detalle_venta nvarchar (10),
cn_id_venta nvarchar (10),
cn_id_producto nvarchar (10),
cantidad int not null ,
constraint PK_id_detalle_venta primary key (cn_id_detalle_venta),
constraint Fk_cn_id_venta foreign key (cn_id_venta) references tbl_ventas (cn_id_venta),
constraint Fk_cn_id_producto foreign key (cn_id_producto) references tbl_productos (cn_id_producto))';

$stmt = sqlsrv_query ( $conn, $tab );

if ($stmt == true) {
    
 echo "La base de datos db_autos fue creada con exito";
    
} else {
    
    die (print_r( sqlsrv_errors(), true));
    
}