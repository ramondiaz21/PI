<?php

redirect("http://localhost\PI\V\interfazPasswordForgoten.php");

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

?>