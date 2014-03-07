/*Owner & Copyrights: Vance King Saxbe. A.*/


/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

$sc[0] = $_POST['scrip'];
//$sc[0] = "GSPL";
$is = 0; 
  $scp = $sc[$is];

$fille = $sc[$is].".csv"; 

$row = 0;
$j =0;

$file = fopen($fille, "r");
while (($data = fgetcsv($file, 8000, ",")) !== FALSE) {
 $sdate[$j] = $data[0];  
 $sh[$j] = $data[2];
 $sl[$j] = $data[3];
 $stc[$j] = $data[4];
 $sv[$j] = $data[5];
$j++;

}
fclose($file);

echo "&phigh=".$sh[1];
echo "&plow=".$sl[1];
echo "&pvol=".$sv[1];
$row = 0;
$file = fopen("TC.csv", "r");
while (($data = fgetcsv($file, 8000, ",")) !== FALSE) {

	if ( ($data[0] == $scp) && ($data[1] == "EQ")) { $avgp = $data[9]/$data[8]; $avgp = number_format($avgp, 2, '.', ''); echo $scp."&avgp=".$avgp."&"; $sh[0] = $data[3]; echo $scp."&thigh=". $data[3]."&";$sl[0] = $data[4]; echo $scp."&tlow=". $data[4]."&";}
   
    $row++; 
	
    }
fclose($file);
$row =0;
$file = fopen("TF.csv", "r");
while (($data = fgetcsv($file, 8000, ",")) !== FALSE) {

	if ( ($data[1] == $scp)  && ($data[4] == "XX") ) { if ($data[2] == "28-Jun-2012") { $oi1 = $data[12]; $oic1 = ($data[13]/$data[12])*100;}
if ( ($data[1] == $scp)  && ($data[4] == "XX") ) { if ($data[2] == "26-Jul-2012") { $oi2 = $data[12]; $oic2 = ($data[13]/$data[12])*100;}


   
    $row++; 
	
    }
fclose($file);
$oic = $oic1 + $oic2; $oic = number_format($oic, 2, '.', ''); if ( $data[13] < 0 ) { $oic = abs($oic); echo $scp."&oic=M".$oic."PCTG"."&"; }; if ( $data[13] >= 0 ) { echo $scp."&oic=P".$oic."PCTG"."&"; }}}
$oi = $oi1 + $oi2;



$row = 4;
$file = fopen("TD.csv", "r");
while (($data = fgetcsv($file, 80000, ",")) !== FALSE) {

	if ( $data[2] == $scp) {$data[6] = number_format($data[6], 2, '.', ''); echo "&delivery=".$data[6]."PCTG"."&"; }
   
 $row++; 
	
  }
fclose($file);
$tdma = 0;
$tdv = 0;
for ( $a = 0; $a <=200;$a++) { $tdma = $tdma + $stc[$a] ;$tdv = $tdv + $sv[$a] ; }
$tdma = $tdma/200;
echo "&200DMA=".$tdma;
$tdv = $tdv/200;
echo "&200DV=".$tdv;

$hdma = 0;
$hdv = 0;
for ( $a = 0; $a <=100;$a++) { $hdma = $hdma + $stc[$a] ;$hdv = $hdv + $sv[$a] ; }
$hdma = $hdma/100;
echo "&100DMA=".$hdma;
$hdv = $hdv/100;
echo "&100DV=".$hdv;

$fdma = 0;
$fdv = 0;
for ( $a = 0; $a <=50;$a++) { $fdma = $fdma + $stc[$a] ;$fdv = $fdv + $sv[$a] ; }
$fdma = $fdma/50;
echo "&50DMA=".$fdma;
$fdv = $fdv/50;
echo "&50DV=".$fdv;


$qty = 200000/$stc[1];

$oi = $oi * $avgp;
echo $scp."&oi=".$oi."&";
$s = 0;
$r = 0;
for ( $ir = 0; $ir < 200; $ir++) 
{ if (( $sh[$ir] > $sh[$ir+1] ) && ($sh[$ir+1] < $sh[$ir+2]) && ($sl[$ir+1] < $sl[1]) ) { $support[$s] = $sl[$ir+1]; echo "&sup".$s."=".$support[$s]; $s++;} 
   if (( $sl[$ir] < $sl[$ir+1] ) && ($sl[$ir+1] > $sl[$ir+2]) && ($sl[$ir+1] > $sh[1])) { $resistance[$r] = $sh[$ir+1]; echo "&res".$r."=".$resistance[$r];$r++; } }



$tu =1;
$td =1;
for ( $ir = 0; $ir <= 20; $ir++) 
{ 
if (( $sh[$ir] > $sh[$ir+1] ) && ($sh[$ir+1] < $sh[$ir+2]) && ( $sl[$ir] < $sl[$ir+1] ) && ( $stc[$ir] > $sh[$ir+1] ))
{ $risk = int(($sh[$ir+1] - $sl[$ir+1]) * $qty); $return1 = int(($resistance[1] - $sh[$ir+1] )* $qty);$return2 = int(($resistance[2] - $sh[$ir+1] )* $qty);$return3 = int(($resistance[3] - $sh[$ir+1] )* $qty); $return4 = int(($resistance[4] - $sh[$ir+1] )* $qty);$return5 = int(($resistance[5] - $sh[$ir+1] )* $qty);
$mtm = 	(($avgp -$sh[$ir+1])*$qty);
echo "&mtm=".$mtm."&td=WhipLongprice:".$sh[$ir+1]."&tt=before ".$tu. "days on".$sdate[$ir]."&tr=with a risk of:".$risk ."and &tra=a minimal return of:".$return1."at:".$resistance[1]."&trb=an Expected return of:".$return2."at:".$resistance[2]."And &trc=a possible return of:".$return3."at:".$resistance[3]."And &trd=a extensive return of:".$return4."at:".$resistance[4]."And &tre=a beautiful return of:".$return5."at:".$resistance[5]; break;}
if (( $sl[$ir] < $sl[$ir+1] ) && ($sl[$ir+1] > $sl[$ir+2]) && ( $sh[$ir] > $sh[$ir+1] ) && ( $stc[$ir] < $sl[$ir+1] )) 
{ $risk = ($sh[$ir+1] - $sl[$ir+1]) * $qty;$return1 = ($sl[$ir+1] -$support[1]) * $qty;$return2 = ($sl[$ir+1] -$support[2]) * $qty;$return3 = ($sl[$ir+1] -$support[3]) * $qty;$return4 = ($sl[$ir+1] -$support[4]) * $qty;$return5 = ($sl[$ir+1] -$support[5]) * $qty;
$mtm = (($sh[$ir+1]-$avgp)*$qty);
echo "&mtm=".$mtm."&td=WhipShortprice:".$sl[$ir+1]."&tt=before ".$td. "days on".$sdate[$ir]."&tr=with a risk of:".$risk."and &tra=a minimal return of:".$return1."at:".$support[1]."&trb=an Expected return of:".$return2."at:".$support[2]."And &trc=a possible return of:".$return3."at:".$support[3]."And &trd=an extensive return of:".$return4."at:".$support[4]."And&tre= a lovely return of:".$return5."at:".$support[5]; break;}
if (( $sh[$ir] > $sh[$ir+1] ) && ($sh[$ir+1] < $sh[$ir+2]))
 { $risk = ($sh[$ir+1] - $sl[$ir+1]) * $qty; $return1 = ($resistance[1] - $sh[$ir+1] )* $qty;$return2 = ($resistance[2] - $sh[$ir+1] )* $qty;$return3 = ($resistance[3] - $sh[$ir+1] )* $qty; $return4 = ($resistance[4] - $sh[$ir+1] )* $qty;$return5 = ($resistance[5] - $sh[$ir+1] )* $qty;
$mtm = (($avgp -$sh[$ir+1])*$qty);	
echo "&mtm=".$mtm."&td=Longprice:".$sh[$ir+1]."&tt=before ".$tu. "days on".$sdate[$ir]."&tr=with a risk of:".$risk ."and &tra=a minimal return of:".$return1."at:".$resistance[1]."&trb=an Expected return of:".$return2."at:".$resistance[2]."And &trc=a possible return of:".$return3."at:".$resistance[3]."And &trd=a extensive return of:".$return4."at:".$resistance[4]."And &tre=a beautiful return of:".$return5."at:".$resistance[5]; break;} 
   if (( $sl[$ir] < $sl[$ir+1] ) && ($sl[$ir+1] > $sl[$ir+2])) { $risk = ($sh[$ir+1] - $sl[$ir+1]) * $qty;$return1 = ($sl[$ir+1] -$support[1]) * $qty;$return2 = ($sl[$ir+1] -$support[2]) * $qty;$return3 = ($sl[$ir+1] -$support[3]) * $qty;$return4 = ($sl[$ir+1] -$support[4]) * $qty;$return5 = ($sl[$ir+1] -$support[5]) * $qty;
$mtm = (($sh[$ir+1]-$avgp)*$qty);
echo "&mtm=".$mtm."&td=Shortprice:".$sl[$ir+1]."&tt=before ".$td. "days on".$sdate[$ir]."&tr=with a risk of:".$risk."and &tra=a minimal return of:".$return1."at:".$support[1]."&trb=an Expected return of:".$return2."at:".$support[2]."And &trc=a possible return of:".$return3."at:".$support[3]."And &trd=an extensive return of:".$return4."at:".$support[4]."And&tre= a lovely return of:".$return5."at:".$support[5]; break;} 
$tu++;$td++;}


?>


/*email to provide support at vancekingsaxbe@powerdominionenterprise.com, businessaffairs@powerdominionenterprise.com, For donations please write to fundraising@powerdominionenterprise.com*/