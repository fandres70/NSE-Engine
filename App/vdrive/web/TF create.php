<?php
function getTime() 
    { 
    $a = explode (' ',microtime()); 
    return(double) $a[0] + $a[1]; 
    } 
$Start = getTime();

$cont = file_get_contents('TF.csv');

$conti = str_replace("31-May-12","MAY",$cont);



$filename= "TF.csv"; 
$file = fopen($filename, "a+" );









fwrite( $file, $conti."\r\n" ); //Write the data input box to the .txt file.

fclose( $file ); //Close the file from further editing


$End = getTime(); 

echo "&T= ".number_format(($End - $Start),2)." secs";
echo "&result=Updated in....";
?>