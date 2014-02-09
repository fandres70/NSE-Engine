<?php
$data = $_POST['tick'];

$filedish = fopen("looplimit.txt", "w");
            $write = fputs($filedish, $data);
		fclose( $filedish );

?>