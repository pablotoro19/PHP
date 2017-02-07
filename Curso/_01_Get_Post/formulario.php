<!DOCTYPE html>
<html lang=es>
<head>
	<meta charset="utf-8">
	<title>Env&iacute;o de datos por GET y POST</title>
</head>
<body>
	<hgroup>
		<h1>Formulario eviado por el m&eacute;todo GET</h1>
		<form name="envia-get" action="envia-datos.php" method="get" enctype="applicaion/x-www-form-urlencoded">
		<label>Ingresa tu Nombre:</label>
		<input type="text" name="nombre_txt" />
		<br/><br/>
		<label>Ingresa tu Password:</label>
		<input type="password" name="password_txt" />
		<br/><br/>
		<input type="submit" name="enviar_btn" value="Envia-GET" />
		</form>
	</hgroup>
	<hgroup>
		<h1>Formulario eviado por el m&eacute;todo POST</h1>
		<form name="envia-post" action="envia-datos.php" method="post" enctype="applicaion/x-www-form-urlencoded">
		<label>Ingresa tu Nombre:</label>
		<input type="text" name="nombre_txt" />
		<br/><br/>
		<label>Ingresa tu Password:</label>
		<input type="password" name="password_txt" />
		<br/><br/>
		<input type="submit" name="enviar_btn" value="Envia-POST" />
		</form>
	</hgroup>
</body>
</html>