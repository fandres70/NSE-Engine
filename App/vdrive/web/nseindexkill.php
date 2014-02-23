/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/
function getTime() 
    { 
    $a = explode (' ',microtime()); 
    return(double) $a[0] + $a[1]; 
    } 
$Start = getTime();

$sc[0] = "GREENX ";
$sc[1] = "BSE30  ";
$sc[2] = "MIDCAP ";
$sc[3] = "SMLCAP ";
$sc[4] = "BSE100 ";
$sc[5] = "BSE200 ";
$sc[6] = "BSE500 ";
$sc[7] = "SHA50  ";
$sc[8] = "BSEIPO ";
$sc[9] = "DOL30  ";
$sc[10] = "DOL100 ";
$sc[11] = "DOL200 ";
$sc[12] = "AUTO   ";
$sc[13] = "BANKEX ";
$sc[14] = "BSECD  ";
$sc[15] = "BSECG  ";
$sc[16] = "BSEFMCG";
$sc[17] = "BSEHC  ";
$sc[18] = "BSEIT  ";
$sc[19] = "METAL  ";
$sc[20] = "OILGAS ";
$sc[21] = "POWER  ";
$sc[22] = "BSEPSU ";
$sc[23] = "REALTY ";
$sc[24] = "TECK   ";

$fil = "TSX.csv";
$cont = file_get_contents('suck.txt');
$stop = ".";
for ( $i = 0; $i <= 176; $i++ ) {

$myFile = $scp[$i].$stop."php";

unlink($myFile);

$xFile = $scp[$i].$stop."txt";

unlink($xFile);

$row = 0;
$fille = fopen($fil, "r");
while (($data = fgetcsv($fille, 8000, ",")) !== FALSE) {

if ( ($data[0] == $scp[$i]) && ($data[1] == "EQ")) 
{  
$avgp = $data[9]/$data[8]; 
$high = $data[3];
$low = $data[4];
}
   
    $row++; 
}
fclose($fille);



$conti = str_replace("ICICIBANK",$scp[$i],$cont);
$contii = str_replace("icicibank",$scp[$i],$conti);
$contiii = str_replace("average",$avgp,$contii);
$contiiii = str_replace("previoushigh",$high,$contiii);
$contiiiii = str_replace("previouslow",$low,$contiiii);



$filename= $scp[$i].$stop."php"; //The name of your .txt file
$file = fopen($filename, "a+" );









fwrite( $file, $contiiiii."\r\n" ); //Write the data input box to the .txt file.

fclose( $file ); //Close the file from further editing

}
$End = getTime(); 

echo "&T= ".number_format(($End - $Start),2)." secs";
echo "&result=Updated in....";
?>