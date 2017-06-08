<?php

$mysqli = new mysqli('localhost', 'root', '', 'pidb'); 
 if (mysqli_connect_errno()) {
  printf('Connect failed: %s\n', mysqli_connect_error()); 
 exit(); 
} else { 
/*
$titulo = mysqli_real_escape_string($mysqli, $_POST['tituloT']);
$autor = mysqli_real_escape_string($mysqli, $_POST['autorT']);
$anio = mysqli_real_escape_string($mysqli, $_POST['anioT']);
$edicion = mysqli_real_escape_string($mysqli, $_POST['edicionT']);
$editorial = mysqli_real_escape_string($mysqli, $_POST['editorialT']);
$isbn = mysqli_real_escape_string($mysqli, $_POST['isbnT']);
$clasificacion_materia= mysqli_real_escape_string($mysqli, $_POST['clasificacion_materiaT']);
$url= mysqli_real_escape_string($mysqli, $_POST['urlT']);
*/
$titulo ='a';
$autor ='a' ;
$anio =1;
$edicion ='a' ;
$editorial = 'a';
$isbn = 'a';
$clasificacion_materia='a' ;
$url='a' ;


 $sql = "INSERT INTO libros(titulo,autor,anio,edicion,editorial,isbn,clasificacion_materia,URLImagen) VALUES ('".$titulo."','".$autor."',".$anio.",'".$edicion."','".$editorial."','".$isbn."','".$clasificacion_materia."','".$url."');";


 $res = mysqli_query($mysqli, $sql); 

if ($res === TRUE) {
       redirect("http://localhost/PI/V/_makeSolitudes.php");
} else { 
printf('Could not insert record: %s\n', mysqli_error($mysqli)); 
}

mysqli_close($mysqli);
} 


function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

?>