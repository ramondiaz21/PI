<?php
deleteSession();
redirect("http://localhost/PI\V\login.php");


function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

function deleteSession()
{
 $filename = "C:/sessions.txt";
 $fp = fopen($filename, 'w') or die('Couldn’t open $filename');
 fputs($fp, ' ');
 fclose($fp);
};


?>