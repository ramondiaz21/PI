

<?php
$cmbId = $_POST['cmbT'];

$linea;
if(is_readable("C:/sessions.txt"))
    {
        $fp = fopen("C:/sessions.txt", "r");
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

   					$sql3 = "DELETE FROM solicitudes WHERE id_solicitud = ".$cmbId;
   					$res3 = mysqli_query($mysqli, $sql3);
   				}


				if ($res3 === TRUE )
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
        redirect("http://localhost/PI\V\login.php");
    }



function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

?>