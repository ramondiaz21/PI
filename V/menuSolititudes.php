<?php
if(is_readable("C:/sessions.txt"))
	{
		$fp = fopen("C:/sessions.txt", "r");
		$linea = fgets($fp);
		fclose($fp);

		if(is_numeric($linea))
{
echo '<html>
<head>
	<title>Estado Solicitudes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.2.1.min"></script>
</head>
<body>
<br>
<form action = "../C/toLogin.php" method = "get">
	<input href="#" class="btn btn-default" type="submit" name="closeSession" value="Cerrar sesión"  style ="float: right">
</form>
<div class="container" style="width:700px;">
<img src="../_images/logoudc.png" alt="Mountain View" style="width:616px;height:135px;">
<h1>Sistema de solicitud de libros</h1>
<h3> Bienvenido docente al menu de solicitud/es de libros de la Universidad de Colima</h3>

<h4>Elija una opción:</h4>
<form action="../C/toMakeSolitude.php">
<input href="#" class="btn btn-primary" type="submit" name="makeSolitude" value = "Realizar una solicitud">
</form>
<form action="../C/toStateSolitude.php">
<input href="#" class="btn btn-success" type="submit" name="stateSolitude" value = "Revisar estado de solicitudes">
</form>
<form action="../C/toHSolitude.php">
<input href="#" class="btn btn-info" type="submit" name="hSolitude" value = "Historial de solicitudes">
</form>
<a href="http://www.facebook.com">Facebook</a> | <a href="http://www.google.com">Google+</a> | <a href="http://www.youtube.com">Youtube</a> | <a href="http://www.flicker.com">Flicker</a>
</div>
</body>
</html>';
	}
	else
	{
		redirect("http://localhost/PI\V\login.php");
	}

}

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}
?>