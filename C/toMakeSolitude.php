<?php

redirect("http://localhost\PI\V\_makeSolitudes.php");

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

?>