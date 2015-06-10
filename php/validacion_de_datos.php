<?php
/*_____________ATRIBUTOS____________________*/
$contador = 0;
$usuarioEnviado = $_GET['usuario'];
$passwordEnviado = $_GET['password'];
$resultados = array();
$resultados["hora"] = date("F j, Y, g:i a"); 
$resultados["generador"] = "Enviado desde el dominio" ;

$conexion = mysql_connect('mysql5.000webhost.com','a8852240_tienda','w9w9dorotea');
mysql_select_db("a8852240_tienda",$conexion);
$q = "select * from usuarios where usuario='".$usuarioEnviado."' and password = '".$passwordEnviado."'";
$resultado = mysql_query($q,$conexion);
	
while ($fila = mysql_fetch_array($resultado)) {
		$contador++;
		$obtenerUsuario = $fila['usuario'];
}
if($contador>0){
		$resultados["mensaje"] = "Bienvenido al sistema ".$obtenerUsuario;
		$resultados["validacion"] = "ok";
}else{
		$resultados["mensaje"] = "Usuario y password incorrectos";
		$resultados["validacion"] = "error";
}

$resultadosJson = json_encode($resultados);
echo $_GET['jsoncallback'] . '(' . $resultadosJson . ');';


/*-----------------------------------------CODIGO VIEJO---------------------------*/
/*_______________________________________________________________________________*/
/* Define los valores que seran evaluados, en este ejemplo son valores estaticos,
en una verdadera aplicacion generalmente son dinamicos a partir de una base de datos */

#$usuarioValido = "somos3Tipos";
#$passwordValido = "somos3";

/* Extrae los valores enviados desde la aplicacion movil */
#$usuarioEnviado = $_GET['usuario'];
#$passwordEnviado = $_GET['password'];

/* crea un array con datos arbitrarios que seran enviados de vuelta a la aplicacion */
#$resultados = array();
#$resultados["hora"] = date("F j, Y, g:i a"); 
#$resultados["generador"] = "Enviado desde el dominio" ;


/* verifica que el usuario y password concuerden correctamente */
#if(  $usuarioEnviado == $usuarioValido  && $passwordEnviado == $passwordValido ){
	/*esta informacion se envia solo si la validacion es correcta */
#	$resultados["mensaje"] = "Bienvenido al sistema";
#	$resultados["validacion"] = "ok";

#}else{
	/*esta informacion se envia si la validacion falla */
#	$resultados["mensaje"] = "Usuario y password incorrectos";
#	$resultados["validacion"] = "error";
#}


/*convierte los resultados a formato json*/
#$resultadosJson = json_encode($resultados);

/*muestra el resultado en un formato que no da problemas de seguridad en browsers */
#echo $_GET['jsoncallback'] . '(' . $resultadosJson . ');';

#
?>