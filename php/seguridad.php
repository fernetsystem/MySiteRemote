<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="procesa.php" method="post">
			<p>Nombre</p>
			<input type="text" name="nombre" requiere>
			<p>Edad</p>
			<input type="number" max="110" min="0">
			<br/>
			<select>
				<option>Las vegas</option>
				<option>Marruecos</option>
				<option>Berlin</option>
				<option>Nueva Yok</option>
			</select>
			<br/>
			<input type="submit">
		</form>
		<br/>
		<br/>
		<br/>
		<form method="post" action="enviado_seguridad.php">
			<input type="text" placeholder="numero" name="num"><br/><br/>
			<input type="text" placeholder="articulo" name="art"><br/><br/>
			<input type="submit">
		</form>
	</body>
</html>