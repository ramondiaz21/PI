<?php
deleteSession();
redirect("http://localhost/PI\V\loginAdmin.php");


function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

function deleteSession()
{
 $filename = "C:/sessionsA.txt";
 $fp = fopen($filename, 'w') or die('Couldn’t open $filename');
 fputs($fp, ' ');
 fclose($fp);
};


?>