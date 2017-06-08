<?php 
$mysqli = new mysqli('localhost', 'root', '', 'pidb'); 
////include('C:\wamp\www\PI\C/toLogin.php');
 if (mysqli_connect_errno()) {
  printf('Connect failed: %s\n', mysqli_connect_error()); 
 exit(); 
} else { 

$nombre = mysqli_real_escape_string($mysqli, $_POST['nombreT']);
$idFacultadP = mysqli_real_escape_string($mysqli, $_POST['idFacultadT']);
$telefono = mysqli_real_escape_string($mysqli, $_POST['telefonoT']);
$correo = mysqli_real_escape_string($mysqli, $_POST['correoT']);
$tipoProfesor = mysqli_real_escape_string($mysqli, $_POST['tipoProfesorC']);
$domicilio = mysqli_real_escape_string($mysqli, $_POST['domicilioT']);
$contrasena= mysqli_real_escape_string($mysqli, $_POST['contrasenaT']);



 $sql = "INSERT INTO docentes(Nombre,id_facultad,telefono,correo,tipo_profesor,domicilio,contrasena) VALUES ('".$nombre."','".$idFacultadP."',".$telefono.",'".$correo."','".$tipoProfesor."','".$domicilio."','".$contrasena."');";

 $res = mysqli_query($mysqli, $sql); 

if ($res === TRUE) {
       echo 'A record has been inserted.';
} else { 
printf('Could not insert record: %s\n', mysqli_error($mysqli)); 
}

mysqli_close($mysqli);
} 
?>