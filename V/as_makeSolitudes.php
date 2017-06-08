<html>
<head>
	<title>Solicitudes</title>
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
	<div class="col-lg-7">
	<h2>Solicitudes</h2>
	<h3>Numero     - Titulo</h3>
	<h4>LISTA DE LA BASE DE DATOS:</h4>
	</div>
<div class="col-lg-5">
<form  method = "post" >
	<label class="col-lg-2 control-label">Número de cuenta:</label> <input class="form-control" type="text" name="txtNoCuenta" ><br>
	<label class="col-lg-2 control-label">Título del libro:</label> <input class="form-control" type="text" name="txtTituloLibro"><br>
	<label class="col-lg-2 control-label">Año:</label> <input class="form-control" type="text" name="txtAno"><br>
	<label class="col-lg-2 control-label">Autor:</label> <input class="form-control" type="text" name="txtAutor"><br>
	<label class="col-lg-2 control-label">Edición:</label> <input class="form-control" type="text" name="txtEdicion"><br>
	<label class="col-lg-2 control-label">Editorial:</label> <input class="form-control" type="text" name="txtEditorial"><br>
	<label class="col-lg-2 control-label">Libro clasificado como:</label> 
	<select class="form-control">
		<ul class="dropdown-menu">
		<option value="Matemáticas">Matemáticas</option>
  		<option value="Física">Física</option>
  		<option value="Español">Español</option>
 		<option value="Medicina">Medicina</option>
 		</ul> 
	</select><br>
	<label class="col-lg-2 control-label">Cantidad:</label> <input class="form-control" type="text" name="txtCantidad"><br>
	<input href="#" class="btn btn-success" type="submit" name="solitude" value = "Buscar">
</form>
</div>
<br><br>
<form>
	<input href="#" class="btn btn-primary btn-lg" type="submit" name="finish" value="Terminar solicutud/es">
</form>
<br><br>
<a href="http://www.facebook.com">Facebook</a> | <a href="http://www.google.com">Google+</a> | <a href="http://www.youtube.com">Youtube</a> | <a href="http://www.flicker.com">Flicker</a>
<br><br>
</div>
</body>
</html>