<?php include('../M/claseLogin.php');

$mysqli = new mysqli('localhost', 'root', '', 'pidb'); 

 if (mysqli_connect_errno()) {
 	printf('Connect failed: %s\n', mysqli_connect_error());
 exit();

} 
else 
{

	$user = mysqli_real_escape_string($mysqli, $_POST['txtUser']);
	$password = mysqli_real_escape_string($mysqli, $_POST['txtPassword']);
 $sql = 'select * from docentes where no_cuenta=1 & contrasena = "ha5lo"';
 $res = mysqli_query($mysqli, $sql);

 if ($res) 
	//redirect("http://localhost/PI\login.php");

 else 
{
printf('no loged', mysqli_error($mysqli));
}

mysqli_close($mysqli);
}
 		




function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

/*

$cl= new claseLogin();

 if($cl->login($_POST["usert"],$_POST["passwordt"]))
 	{	
 		echo "si";
 		redirect("http://localhost\PI\V\menuSolititudes.php");
 	}
 else
 	{
 		echo "no";
 		redirect("http://localhost/PI/login.php");
 	}
*/

?>
