<?php
    extract($_REQUEST);
    $file=fopen("msg.txt","a");

    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
	fwrite($file, " " ."\n");
	fclose($file);
    header("location: index.php");
 ?>
