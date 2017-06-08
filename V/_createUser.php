<html>
<head>
	<title>Crear Usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.2.1.min"></script>
</head>
<body>
<br>
<form action = "../C/toLogin.php" method = "get">

<div class="container" style="width:700px;">
<img src="../_images/logoudc.png" alt="Mountain View" style="width:616px;height:135px;"><br><br>
<h1>Sistema de solicitud de libros</h1>
<div class="row">
<div class="well bs-component">
<form class="form-horizontal">
<fieldset>
<legend>Crear un usuario</legend>
<div class="form-group" style="width:660px">
<form action = "../M/crearUsuario.php" method = "post" style="float: center;">
	<label class="col-lg-2 control-label">Nombre:</label> <input class="form-control" type="text" name="nombreT" ><br>
	<label class="col-lg-2 control-label">Facultad:</label> <input class="form-control" type="text" name="idFacultadT"><br>
	<label class="col-lg-2 control-label">Teléfono:</label> <input class="form-control" type="text" name="telefonoT"><br>
	<label class="col-lg-2 control-label">Correo:</label> <input class="form-control" type="text" name="correoT"><br>
	<label class="col-lg-2 control-label">Contrasena:</label> <input class="form-control" type="text" name="contrasenaT"><br>
	<label class="col-lg-2 control-label">Domicilio:</label> <input class="form-control" type="text" name="domicilioT"><br>
	<label class="col-lg-2 control-label">Tipo Profesor:</label>
	<select class="form-control" name="tipoProfesorC">
		<ul class="dropdown-menu">
		<option value="PTC">PTC</option>
  		<option value="PPH">PPH</option>
  		</ul>
	</select><br><br>
<input href="#" class="btn btn-primary btn-lg" type="submit" name="createUser" value = "Crear cuenta">
</form>
</div>
</fieldset>
</form>
</div>
</div>
</form>
<a href="http://www.facebook.com">Facebook</a> | <a href="http://www.google.com">Google+</a> | <a href="http://www.youtube.com">Youtube</a> | <a href="http://www.flicker.com">Flicker</a><br><br>
</div>
</body>
</html>