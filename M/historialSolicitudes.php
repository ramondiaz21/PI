<?php 
$mysqli = new mysqli('localhost', 'root', '', 'pidb'); 
if (mysqli_connect_errno()) { 
printf('Connect failed: %s\n', mysqli_connect_error());
exit(); 
} else { 
$sql = 'SELECT * FROM solicitudes'; 
$res = mysqli_query($mysqli, $sql); 

 if ($res) { 
while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) { 
$id  = $newArray['id_solicitudes']; 
$comp  = $newArray['comprados']; 
$id_d  = $newArray['id_docente']; 
$can  = $newArray['cantidad']; 
$esc = $newArray['estado_compra']; 
$id_l  = $newArray['id_libro']; 
$id_p  = $newArray['id_personal'];
$com  = $newArray['comentarios'];  

echo '|| ID: '.$newArray['id_solicitudes'].' || Comprados: '.$comp.' || Id Docente: '.$newArray['id_docente'].' || Cantidad: '.$can.' || Estado de compra: '.$esc.' || Id Libro: '.$id_l.' || Id Personal: '.$id_p.' || Comentarios: '.$com.'</br>';
 } 
} else {
printf('Could not retrieve records: %s\n', mysqli_error($mysqli));
} 
mysqli_free_result($res);
 mysqli_close($mysqli); 
} 

?>