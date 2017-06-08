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

 $sql = "SELECT id_personal,contrasena from personal_autorizacion where id_personal=".$user."  and contrasena='".$password."'";


 $res = mysqli_query($mysqli, $sql);

$newArray = mysqli_fetch_array($res, MYSQLI_ASSOC);
$sUser  = $newArray['id_personal']; 
$sPass  = $newArray['contrasena']; 

 $filename = "C:/sessionsA.txt";
 $fp = fopen($filename, 'w') or die('Couldn’t open $filename');
 fputs($fp, ''.$sUser);
 fclose($fp);


 if ( $user == $sUser and $password == $sPass)
 {
  	redirect("http://localhost\PI\V\menuSolititudesAdmin.php");
 }
 else 
{
	//echo "<script type='text/javascript'>alert('Funciona?');</script>";
	redirect("http://localhost/PI/V\loginAdmin.php");
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