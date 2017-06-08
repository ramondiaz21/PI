<?php



$mysqli = new mysqli('localhost', 'root', '', 'pidb'); 

 if (mysqli_connect_errno()) {
 	printf('Connect failed: %s\n', mysqli_connect_error());
 exit();

} 
else 
{
	$user = mysqli_real_escape_string($mysqli, $_POST['usert']);
	$password = mysqli_real_escape_string($mysqli, $_POST['passwordt']);

 $sql = "SELECT no_cuenta,contrasena from docentes where no_cuenta=".$user."  and contrasena='".$password."'";


 $res = mysqli_query($mysqli, $sql);

$newArray = mysqli_fetch_array($res, MYSQLI_ASSOC);
$sUser  = $newArray['no_cuenta']; 
$sPass  = $newArray['contrasena']; 

 $filename = "C:/sessions.txt";
 $fp = fopen($filename, 'w') or die('Couldn’t open $filename');
 fputs($fp, ''.$sUser);
 fclose($fp);


 if ( $user == $sUser and $password == $sPass)
 {
  	redirect("http://localhost\PI\V\menuSolititudes.php");
 }
 else 
{
	//echo "<script type='text/javascript'>alert('Funciona?');</script>";
	redirect("http://localhost/PI/V\login.php");
}

	mysqli_close($mysqli);
}


function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}



//	
?>