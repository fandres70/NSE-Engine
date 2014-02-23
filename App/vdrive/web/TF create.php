/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/
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