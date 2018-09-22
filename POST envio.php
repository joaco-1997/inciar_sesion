<!DOCTYPE html>
<html>
<head><title>ENVIO DE INFORMACION POST</title>

<style>
		form {
			margin: 0 auto;
			text-align: center;
			width: 400px;
		}
		
		span {
			color: #F00;
			font-size: 2em;
		}
	</style>
</head>

<body bgcolor="90FF33">	


	<form method="POST" action="saludo.php">

	usuario <input type="text" name="usuario">
	<br>
	<br>
	contraseña <input type="text" name="contraseña">
	<br>
	<br>	
	<input type="submit" value="Iniciar Sesion">

</form>

</body>
</html>