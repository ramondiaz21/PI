<?php
$linea;
if(is_readable("C:/sessions.txt"))
    {
        $fp = fopen("C:/sessions.txt", "r");
        $linea = fgets($fp);
        fclose($fp);

        if(is_numeric($linea))
{
echo'
<html>
<head>
	<title>Historial Solicitudes</title>
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
<h2>Historial de solicitud/es</h2><br>
<div class="row">
<div class="well bs-component">
<form class="form-horizontal">
  <fieldset>
    <legend>Solicitudes:</legend>';



$mysqli = new mysqli('localhost', 'root', '', 'pidb'); 
if (mysqli_connect_errno()) { 
printf('Connect failed: %s\n', mysqli_connect_error());
exit(); 
} else { 
$sql = 'SELECT * FROM solicitudes'; 
$res = mysqli_query($mysqli, $sql); 

if ($res) { 
while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) { 
$id  = $newArray['id_solicitud']; 
$comp  = $newArray['comprados']; 
$id_d  = $newArray['no_cuenta_docente']; 
$can  = $newArray['cantidad']; 
$esc = $newArray['estado_compra']; 
$id_l  = $newArray['id_libro']; 
$id_p  = $newArray['id_personal'];
$com  = $newArray['comentarios'];  

if($id_d == $linea and $esc != "Espera")
echo '|| ID: '.$id.' || Comprados: '.$comp.' || Id Docente: '.$id_d.' || Cantidad: '.$can.' || Estado de compra: '.$esc.' || Id Libro: '.$id_l.' || Id Personal: '.$id_p.' || Comentarios: '.$com.'</br>';
 } 
} else {
printf('Could not retrieve records: %s\n', mysqli_error($mysqli));
} 
mysqli_free_result($res);
 mysqli_close($mysqli); 
} 


'</fieldset>
</form>
</div>
</div>
<br><br>
<a href="http://www.facebook.com">Facebook</a> | <a href="http://www.google.com">Google+</a> | <a href="http://www.youtube.com">Youtube</a> | <a href="http://www.flicker.com">Flicker</a>
<br><br>
</div>
</body>.
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