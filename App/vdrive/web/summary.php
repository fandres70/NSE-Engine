<?php

$temp = $_POST['name'];
  
    $filedash = fopen("summary.txt", "w");
            $wrote = fputs($filedash, $temp. "\r\n");
		fclose( $filedash ); 

?>
