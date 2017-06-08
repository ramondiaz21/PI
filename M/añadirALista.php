<?php


$linea;
if(is_readable("C:/sessions.txt"))
    {
        $fp = fopen("C:/sessions.txt", "r");
        $linea = fgets($fp);
        fclose($fp);

        if(is_numeric($linea))
{
    $A=0;
    $lista;
    
    $Titulo = $_POST['Titulo'];
    $Autor = $_POST['Autor'];
    $Editorial = $_POST['Editorial'];
    $Fecha = $_POST['Fecha'];
    $Categoria= $_POST['Categoria'];
    if(isset($_POST['ISBN_10'])){
        $ISBN_10 = $_POST['ISBN_10']; $A=0;
    }else {$ISBN_10=""; $A = 0; }
    if(isset($_POST['ISBN_13'])){
        $ISBN_13 = $_POST['ISBN_13']; $A=1;
    }
    $Paginas = $_POST['Paginas'];
    $Origen = $_POST['Origen'];
    $Idioma = $_POST['Idioma'];
    $Cantidad = $_POST['cantidad'];
    
    if($A == 0){
        $lista = array($Titulo, $Autor, $Editorial, $Fecha, $Categoria, $ISBN_10,
            $Paginas, $Origen, $Idioma); 
    }else{
        $lista = array($Titulo, $Autor, $Editorial, $Fecha, $Categoria, $ISBN_13, 
            $Paginas, $Origen, $Idioma);
    }
    if($lista[6] == " " or $lista[6] == NULL or $lista[6] == ""){
        $lista[6] = "N/A";
        }


$mysqli = new mysqli('localhost', 'root', '', 'pidb'); 
 if (mysqli_connect_errno()) {
  printf('Connect failed: %s\n', mysqli_connect_error()); 
 exit(); 
} else {
 $sql = "INSERT INTO libros(titulo,autor,editorial,isbn,fecha,categoria,paginas,origen,idioma,idUser, cantidad) VALUES ('".$lista[0]."','".$lista[1]."','".$lista[2]."','".$lista[5]."'
 ,'".$lista[3]."','".$lista[4]."','".$lista[6]."','".$lista[7]."','".$lista[8]."',".$linea.",".$Cantidad.");";


 $res = mysqli_query($mysqli, $sql); 

if ($res === TRUE) {
    mysqli_close($mysqli);
       redirect("http://localhost\PI\V\_makeSolitudes.php");
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





    /*redirect("http://localhost:8080\PI\V\_makeSolitudes.html");

    function redirect($url, $statusCode = 303)
    {
       header('Location: ' . $url, true, $statusCode);
       die();
    }  */
?>

