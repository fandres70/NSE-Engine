/*Owner & Copyrights: Vance King Saxbe. A.*//*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/
function getTime() 
    { 
    $a = explode (' ',microtime()); 
    return(double) $a[0] + $a[1]; 
    } 
$Start = getTime();

$scp[0] = "MIDCAP";
$scp[1] = "SMLCAP";
$scp[2] = "BSE-100";
$scp[3] = "BSE-200";
$scp[4] = "BSE-500";
$scp[5] = "AUTO";
$scp[6] = "BANKEX";
$scp[7] = "REALTY";
$scp[8] = "CG";
$scp[9] = "FMCG";
$scp[10] = "METAL";
$scp[11] = "POWER";
$scp[12] = "TECk";
$scp[13] = "IT";
$scp[14] = "HC";
$scp[15] = "CD";
$scp[16] = "PSU";
$scp[17] = "OIL&GAS";

$sc[0] = "BSEMIDCAP";
$sc[1] = "BSESMLCAP";
$sc[2] = "BSE100";
$sc[3] = "BSE200";
$sc[4] = "BSE500";
$sc[5] = "BSEAUTO";
$sc[6] = "BSEBANKEX";
$sc[7] = "BSEREALTY";
$sc[8] = "BSECG";
$sc[9] = "BSEFMCG";
$sc[10] = "BSEMETAL";
$sc[11] = "BSEPOWER";
$sc[12] = "BSETECk";
$sc[13] = "BSEIT";
$sc[14] = "BSEHC";
$sc[15] = "BSECD";
$sc[16] = "BSEPSU";
$sc[17] = "BSEOILGAS";


$fil = "IDX.csv";
$cont = file_get_contents('suck.txt');
$stop = ".";
for ( $i = 0; $i <= 17; $i++ ) {

$myFile = $sc[$i].$stop."php";

unlink($myFile);

$xFile = $sc[$i].$stop."txt";

unlink($xFile);

$row = 0;
$fille = fopen($fil, "r");
while (($data = fgetcsv($fille, 8000, ",")) !== FALSE) {

if ( ($data[0] == $scp[$i]) ) 
{  
$avgp = $data[4]; 
$high = $data[2];
$low = $data[3];
}
   
    $row++; 
}
fclose($fille);



$conti = str_replace("ICICIBANK",$sc[$i],$cont);
$contii = str_replace("icicibank",$sc[$i],$conti);
$contiii = str_replace("average",$avgp,$contii);
$contiiii = str_replace("previoushigh",$high,$contiii);
$contiiiii = str_replace("previouslow",$low,$contiiii);



$filename= $sc[$i].$stop."php"; //The name of your .txt file
$file = fopen($filename, "a+" );









fwrite( $file, $contiiiii."\r\n" ); //Write the data input box to the .txt file.

fclose( $file ); //Close the file from further editing

}
$End = getTime(); 

echo "&T= ".number_format(($End - $Start),2)." secs";
echo "&result=Updated in....";
?>/*email to provide support at vancekingsaxbe@powerdominionenterprise.com, businessaffairs@powerdominionenterprise.com, For donations please write to fundraising@powerdominionenterprise.com*/