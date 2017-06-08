<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.2.1.min"></script>
</head>
<body>
<br>
<div class="container" style="width:700px;">
<img src="../_images/logoudc.png" alt="Mountain View" style="width:616px;height:135px;"><br><br>
<form action ="../M/logearAdmin.php" method = "post">
<h1>Sistema de solicitud de libros</h1><br>
<div class="row">
<div class="well bs-component">
<form class="form-horizontal">
<fieldset>
<legend>Login</legend>

<div class="form-group" style="width:660px;height:60px;">
<label class="col-lg-2 control-label">Numero de cuenta:</label>
<div class="col-lg-10">
<input type = "text" class="form-control" name = "usert" value = "angel">
</div>
</div>
<div class="form-group" style="width:660px;height:60px;">
<label class="col-lg-2 control-labe1">Contraseña:</label>
<div class="col-lg-10">  
<input type = "password" class="form-control"  name = "passwordt" value = "123">
<input type = "password" class="form-control"  name = "pin" value = "123">
</div>
</div>
<div class="col-lg-10 col-lg-offset-2">
<input href="#" class="btn btn-primary btn-lg" type = "submit" value = "Entrar"><br><br>	


<form action ="../C/toLogin.php" method = "post">
<input href="#" class="btn btn-warning" type = "submit" value="Docente">
</div>
</fieldset>
</form>


</div>
</div>
</form>


<form action="../C/ToPasswordForgoten.php" method = "get">
<input href="#" class="btn btn-danger" type = "submit" value="¿Contraseña olvidada?">
</form>

<form action ="../C/toCreateUser.php" method = "post">
<input href="#" class="btn btn-warning" type = "submit" value="Crear una cuenta">
</form>


<form action ="../C/toLoginAdmin.php" method = "post">
<input href="#" class="btn btn-warning" type = "submit" value="Administrador">
</form>


<a href="http://www.facebook.com">Facebook</a> | <a href="http://www.google.com">Google+</a> | <a href="http://www.youtube.com">Youtube</a> | <a href="http://www.flicker.com">Flicker</a>
</div>

</body>
</html>
s