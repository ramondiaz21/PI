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
        <title>Prueba de PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min"></script>
</head>


<form action = "../C/toLogin.php" method = "get">
    <input  href="#" class="btn btn-default" type="submit" name="closeSession" value="Cerrar sesión"  style ="float: right">
</form>
<div class="container" style="width:700px;">
<img src="../_images/logoudc.png" alt="Mountain View" style="width:616px;height:135px;">
<h1>Sistema de solicitud de libros</h1>
<h2> Estado de de solicitud/es</h2> 

<body>
<br><br>
<div class="container" style="width:500px;">
<form action="../M/_googleApi.php" method="post" name="formu" id="formu" onsubmit="return initialize()">
<div class="row">
<div class="well bs-component">
<form class="form-horizontal">
<fieldset>
<legend>Agregar campos</legend>
<input class="form-control" placeholder="Titulo" type="text" name="nameBook" id="search" autofocus/><br><br>
<input class="form-control" placeholder="Autor(es)" type="text" name="authors" id="authors" autofocus /><br><br>
<input class="form-control" placeholder="Editorial" type="text" name="publisher" id="publisher" autofocus/><br><br>
<input class="form-control" placeholder="ISBN" type="text" name="ID_ISBN" id="ID_ISBN" autofocus/><br><br>
<input href="#" class="btn btn-primary btn-lg" class="submit" id="submit" name="submit" type="submit" value="Buscar"  />
</fieldset>
</form>
</div>
</div>
</form> ';
 
$mysqli = new mysqli('localhost', 'root', '', 'pidb'); 
if (mysqli_connect_errno()) { 
printf('Connect failed: %s\n', mysqli_connect_error());
exit(); 
} else { 
$sql = 'SELECT * FROM libros WHERE idUser = '.$linea; 
$res = mysqli_query($mysqli, $sql); 

 if ($res) {
     while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) { 
$titulo  = $newArray['titulo']; 
$autor  = $newArray['autor']; 
$editorial = $newArray['editorial']; 
$isbn  = $newArray['ISBN']; 
$fecha = $newArray['fecha']; 
$categoria  = $newArray['categoria']; 
$paginas  = $newArray['paginas'];
$origen  = $newArray['origen']; 
$idioma  = $newArray['idioma'];   
$id_libro = $newArray['idLibros'];
$cantidad = $newArray['cantidad']; 

echo "Titulo: ".$titulo." || Autor: ".$autor." || Categoria: ".$categoria." || ISBN: ".$isbn. "<br>";

} 
} else {
printf('Could not retrieve records: %s\n', mysqli_error($mysqli));
} 
mysqli_free_result($res);
 mysqli_close($mysqli); 
} 




          echo'  <br><br>
            <a href="http://www.facebook.com">Facebook</a> | <a href="http://www.google.com">Google+</a> | <a href="http://www.youtube.com">Youtube</a>            | <a href="http://www.flicker.com">Flicker</a>
            <br><br>
        </div>

        
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