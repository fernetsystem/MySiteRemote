<?php 
	$num = $_POST['num'];
	$art = $_POST['art'];
	$conexion = mysql_connect("127.0.0.1","root","w9w9dorotea");
	mysql_select_db("db_trigger_prb",$conexion);
	$myQuery = "insert into inyeccion values(null,".$num.",'".$art."');";
	mysql_query($myQuery)or die("Ocurrio un error");
	mysql_close($conexion)
 ?>