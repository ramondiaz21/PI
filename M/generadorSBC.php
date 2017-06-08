<?php 

$linea;
if(is_readable("C:/sessions.txt"))
    {
        $fp = fopen("C:/sessions.txt", "r");
        $linea = fgets($fp);
        fclose($fp);

        if(is_numeric($linea))
{


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

 


    {
        $filename = $linea.'-SBC.txt';
        $fp = fopen($filename, 'a') or die('Couldn’t open $filename');
        fputs($fp, '020}'.$isbn."\n");
        fputs($fp,chr(13).chr(10));
        fputs($fp, '100}'.$autor."\n");
        fputs($fp,chr(13).chr(10));
        fputs($fp, '245}'.$titulo."\n");
        fputs($fp,chr(13).chr(10));
        fputs($fp, '250}'.$editorial."\n");
        fputs($fp,chr(13).chr(10));
        fputs($fp, '260}'.$fecha."\n"); 
        fputs($fp,chr(13).chr(10));
        fputs($fp, '856}'.$paginas."\n"); 
        fputs($fp,chr(13).chr(10));
        fputs($fp, '{}'."\n");
        fputs($fp,chr(13).chr(10));
        fclose($fp);
    }  

    $sql3 = "INSERT INTO solicitudes(no_cuenta_docente,cantidad,id_libro) VALUES (".$linea.",".$cantidad.",".$id_libro.");";
    $res3 = mysqli_query($mysqli, $sql3);

    $sql3 = "DELETE FROM Libros WHERE idUser = ".$linea;
    $res3 = mysqli_query($mysqli, $sql3);
	
//echo '|| ID: '.$newArray['id_solicitudes'].' || Comprados: '.$comp.' || Id Docente: '.$newArray['id_docente'].' || Cantidad: '.$can.' || Estado de compra: '.$esc.' || Id Libro: '.$id_l.' || Id Personal: '.$id_p.' || Comentarios: '.$com.'</br>';
 }
    
} else {
printf('Could not retrieve records: %s\n', mysqli_error($mysqli));
} 
mysqli_free_result($res);
 mysqli_close($mysqli); 
} 
    }
    else
    {
        redirect("http://localhost/PI\V\login.php");
    }

}

redirect("http://localhost\PI\V\menuSolititudes.php");

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

    /*$mysqli2 = new mysqli('localhost', 'root', '1234', 'pidb'); 
    if (mysqli_connect_errno()) 
    { 
    printf('Connect failed: %s\n', mysqli_connect_error());
    exit(); 

    } else { 
        echo "borrado";
        $sql2 = "DELETE FROM Libros";
        $res2 = mysqli_query($mysqli2, $sql2);

        mysqli_close($mysqli2); 
        } */
 
?>
