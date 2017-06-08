

<?php
$cmbId = $_POST['cmbTm'];

$comprados = $_POST['compradosT'];
$comentarios = $_POST['comentariosT'];
$cmbState = $_POST['cmbState'];

$linea;
if(is_readable("C:/sessionsA.txt"))
    {
        $fp = fopen("C:/sessionsA.txt", "r");
        $linea = fgets($fp);
        fclose($fp);

        if(is_numeric($linea))
			{
				$mysqli = new mysqli('localhost', 'root', '', 'pidb'); 
 				if (mysqli_connect_errno()) 
 				{
  					printf('Connect failed: %s\n', mysqli_connect_error()); 
 					exit(); 
				} 
				else 
				{ 


            $sql3 = "UPDATE solicitudes SET comprados='$comprados', estado_compra='$cmbState',id_personal='$linea', comentarios='$comentarios' WHERE id_solicitud=".$cmbId;
           //$sql3 =" UPDATE solicitudes SET estado_compra = 'Cancelado' WHERE id_solicitud = 39;";
   					//$sql3 = "UPDATE solicitudes  SET comprados= ".$comprados.", estado_compra= '".$cmbState."', comentarios='".$comentarios."' WHERE id_solicitud = ".$cmbId.";";
   				$res3 = mysqli_query($mysqli, $sql3);
   				}


				if ($res3 === TRUE)
		 			{
       					redirect("http://localhost/PI/V/_stateSolitudeAdmin.php");
					} 
				else 
					{ 
						printf('Could not insert record: %s\n', mysqli_error($mysqli)); 
					}

					mysqli_close($mysqli);
			} 


    }
    else
    {
        redirect("http://localhost/PI\V\loginAdmin.php");
    }



function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

?>