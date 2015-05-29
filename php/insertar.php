<?php 
	echo '<link rel="stylesheet" type="text/css" href="../css/prueba.css">';
	$conexion = mysql_connect('mysql5.000webhost.com','a8852240_tienda','w9w9dorotea');
		mysql_select_db("a8852240_tienda",$conexion);
	$q = "insert into usuarios values (NULL,'".$_GET['usuario']."','".$_GET['password']."')";
	mysql_query($q,$conexion)or die("error al insertar");
	
	$q = "select * from usuarios";
   	$resultado = mysql_query($q,$conexion);
	while ($fila = mysql_fetch_array($resultado)) {
		$obtengoClave=$fila['clave'];
		$obtengoUsuario=$fila['usuario'];
		$obtengoPassword=$fila['password'];

		echo $obtengoClave."<br/>";
		echo $obtengoUsuario."<br/>";
		echo $obtengoPassword."<br/><br/>";
	}
	#agregar un archivo con todo el feedback y regresar a al LOGIN*/
	mysql_close($conexion);
 ?>