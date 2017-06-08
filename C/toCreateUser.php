<?php

redirect("http://localhost\PI\V\_createUser.php");

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

?>