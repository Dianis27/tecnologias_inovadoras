<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>Sistema para venta de autopartes </title>
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="fonts.css">
	<style type="text/css">
	body {
	background-color: #E6E6E6;
}
    </style>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<header>
		<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-menu"></span>Refaccionaria</a>
		</div>

		<nav>
			<ul>
				<li><a href="#"><span class="#">Refaccionaria Automotriz</span></a></li>
				<li><a href="index.php"><span class="icon-home2"></span>Inicio</a></li>
				<li><a href="productos.php"><span class="icon-books"></span>Productos</a></li>
				<li><a href="empleados.php"><span class="icon-pencil"></span>Empleados</a></li>
                <li><a href="clientes.php"><span class="icon-address-book"></span>Clientes</a></li>
                <li><a href="proveedores.php"><span class="icon-user"></span>Proveedores</a></li>
				<li><a href="ventas.php"><span class="icon-folder-open"></span>Ventas</a></li>
                
				

			</ul>
		</nav>
	</header>

	<section>

<head>
     <meta charset="uft-8">
     <link rel="stylesheet" href="bootstrap/css/bootstrap-css">
     <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
     <link rel="stylesheet" type="text/css" href="estilos/estilos.css"><center><h1> Informacion y Registro de Clientes.
    <p><font size="3" color="red">Llena los campos con la informacion correspondiente </font></p>
    
    <body>
	<form action="" method="post">
	
	
            <input type="text" name="no" placeholder="Codigo  del Cliente" id="no" oninput="validacion('co')" required pattern="([A-Z ]{4,20})" maxlength="20"/><br>
					
			<input type="text" name="no" placeholder="Nombre Completo" id="no" oninput="validacion('no')" required pattern="([A-Z ]{4,20})" maxlength="20"/><br>
		
			<input type="text" name="ed" placeholder="Telefono" id="ed" oninput="validacion('ed')" required pattern="([0-9 ]{8,10})" maxlength="10"/><br>

			<input type="text" name="se" placeholder="Correo Electronico" id="se" oninput="validacion('se')" required pattern="([A-Z ]{10,30})" maxlength="30"/><br>
					
					
        <input type="text" name="ca" placeholder="Tipo de Cliente" id="ca" oninput="validacion('ca')" required pattern="([A-Z] {5,20})" maxlength="20"/>
        </input>
				
			<center><input type="submit" value="Guardar"/></center> 
	        
        <br> <link rel="stylesheet" type="text/css" href="estilos/estilos.css"><center><h4> Busqueda de Cientes.
        <p><font size="3" color="red">Ingresa el Codigo, Nombre y el Tipo de cliente para obtener informacion  sobre él.</font></p>
    
        <input type="text" name="co" placeholder="Codigo del Cliente" id="co" oninput="validacion('co')" required pattern="([A-Z ]{4,20})" maxlength="20"/>
		
        <input type="text" name="no" placeholder="Nombre Completo" id="ed" oninput="validacion('no')" required pattern="([0-9 ]{8,10})" maxlength="10"/>

		<input type="text" name="ca" placeholder="Tipo de Cliente" id="se" oninput="validacion('ca')" required pattern="([A-Z ]{10,30})" maxlength="30"/>
        
        <center><input type="submit" value="Buscar"/></center>
        
	
	</form>

</body>
</html>