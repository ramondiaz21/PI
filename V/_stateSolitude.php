<?php
$linea;
$vec = array();
if(is_readable("C:/sessions.txt"))
	{
		$fp = fopen("C:/sessions.txt", "r");
		$linea = fgets($fp);
		fclose($fp);

		if(is_numeric($linea))
{
echo '

<html>
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
	<input  href="#" class="btn btn-default" type="submit" name="closeSession" value="Cerrar sesión"  style ="float: right">
</form>
<div class="container" style="width:700px;">
<img src="../_images/logoudc.png" alt="Mountain View" style="width:616px;height:135px;">
<h1>Sistema de solicitud de libros</h1>
<h2> Estado de de solicitud/es</h2> 


<h4>Solicitudes:';


$mysqli = new mysqli('localhost', 'root', '', 'pidb'); 
if (mysqli_connect_errno()) 
	{ 
		printf('Connect failed: %s\n', mysqli_connect_error());
		exit(); 
	} 
	else 
	{ 
		$sql = 'SELECT * FROM solicitudes'; 
		$res = mysqli_query($mysqli, $sql); 
$cont=0;
		if ($res) 
		{
			$c=0;
			while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) 
			{ 
				$id  = $newArray['id_solicitud']; 
				$comp  = $newArray['comprados']; 
				$id_d  = $newArray['no_cuenta_docente']; 
				$can  = $newArray['cantidad']; 
				$esc = $newArray['estado_compra']; 
				$id_l  = $newArray['id_libro']; 
				$id_p  = $newArray['id_personal'];
				$com  = $newArray['comentarios'];  

				if($esc != 'Finalizada' and $id_d == $linea)
				{
					echo '|| ID: '.$id.' || Comprados: '.$comp.' || Id Docente: '.$id_d.' || Cantidad: '.$can.' || Estado de compra: '.$esc.' || Id Libro: '.$id_l.' || Id Personal: '.$id_p.' || Comentarios: '.$com.'</br>';
					$vec[$c]=$id;
					$c++;

				}



          
			}



		}


		else 
		{
			printf('Could not retrieve records: %s\n', mysqli_error($mysqli));
		} 
mysqli_free_result($res);
 mysqli_close($mysqli); 
} 





echo '</h4>
<form action = "../M/borrarRegistro.php" method = "post">';
for($j = 0 ; $j < 5 ;$j++)
	echo '<br>';

			echo "<select class='form-control' name='cmbT'>";
			echo "<ul class='dropdown-menu'>";
			for($i = 0 ; $i < sizeof($vec) ;$i++)
			{
				echo "<option value='".$vec[$i]."'>".$vec[$i]."</option>";		 
			}
			echo"</ul>";
			echo "</select><br><br>"; 




echo '<input href="#" class="btn btn-primary" type="submit" name="delete" value="Elimianr solicitud seleccionada">';
echo '</form>';

echo '</h1>

<a href="http://www.facebook.com">Facebook</a> | <a href="http://www.google.com">Google+</a> | <a href="http://www.youtube.com">Youtube</a> | <a href="http://www.flicker.com">Flicker</a>

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