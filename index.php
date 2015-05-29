<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/prueba.css">
</head>
<body>
	<div class="CSSTableGenerator">
		<table>
			<tr>
				<td>CLAVE</td>
				<td>USUARIO</td>
				<td>PASSWORD</td>
			</tr>
			
	<?php
		$conexion = mysql_connect('mysql5.000webhost.com','a8852240_tienda','w9w9dorotea');
		mysql_select_db("a8852240_tienda",$conexion);


		$q = "select * from usuarios";
	   	$resultado = mysql_query($q,$conexion);
		while ($fila = mysql_fetch_array($resultado)) {
			$obtengoClave=$fila['clave'];
			$obtengoUsuario=$fila['usuario'];
			$obtengoPassword=$fila['password'];

			echo "<tr><td>".$obtengoClave."</td>";
			echo "<td>".$obtengoUsuario."</td>";
			echo "<td>".$obtengoPassword."</td></tr>";
		}
		mysql_close($conexion);
		?>
			
		</table>
	</div>
       <a href="login.html">MAS</a>     
</body>
</html>