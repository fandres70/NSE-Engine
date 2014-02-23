/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/
function getTime() 
    { 
    $a = explode (' ',microtime()); 
    return(double) $a[0] + $a[1]; 
    } 
$Start = getTime();
  
$quote = file_get_contents('http://finance.google.com/finance/info?client=ig&q=NSE:ICICIBANK,NSE:SBIN,NSE:HDFCBANK,NSE:KOTAKBANK,NSE:AXISBANK,NSE:PNB,NSE:BANKBARODA,NSE:BANKINDIA,NSE:YESBANK,NSE:VIJAYABANK,NSE:DENABANK,NSE:ALBK,NSE:KTKBANK,NSE:DHANBANK,NSE:DCB,NSE:ANDHRABANK,NSE:INDIANB,NSE:UCOBANK,NSE:UNIONBANK,NSE:SRTRANSFIN,NSE:LICHSGFIN,NSE:IOB,NSE:SYNDIBANK,NSE:CANBK,NSE:FEDERALBNK,NSE:HDFC,NSE:IDFC,NSE:IDBI,NSE:IFCI,NSE:RELCAPITAL,NSE:INDIAINFO,NSE:PFC,NSE:TATAMOTORS,NSE:BAJAJ-AUTO,NSE:MARUTI,NSE:HEROMOTOCO,NSE:ASHOKLEY,NSE:ESCORTS,NSE:TVSMOTOR,NSE:BHARATFORG,NSE:APOLLOTYRE,NSE:MRF,NSE:BOSCHLTD,NSE:EXIDEIND,NSE:DLF,NSE:UNITECH,NSE:HDIL,NSE:HCC,NSE:NCC,NSE:IBREALEST,NSE:GODREJIND,NSE:SOBHA,NSE:JPASSOCIAT,NSE:APIL,NSE:LITL,NSE:GMRINFRA,NSE:IVRCLINFRA,NSE:RELIANCE,NSE:ONGC,NSE:GSPL,NSE:PETRONET,NSE:MRPL,NSE:ABAN,NSE:GAIL,NSE:BPCL,NSE:HINDPETRO,NSE:OIL,NSE:HINDOILEXP,NSE:ESSAROIL,NSE:IOC,NSE:COALINDIA,NSE:CAIRN,NSE:TATASTEEL,NSE:SAIL,NSE:HINDALCO,NSE:STER,NSE:JSWSTEEL,NSE:JINDALSTEL,NSE:JINDALSAW,NSE:PUNJLLOYD,NSE:BHUSANSTL,NSE:SESAGOA,NSE:WELCORP,NSE:GMDCLTD,NSE:INFY,NSE:INFY,NSE:TCS,NSE:WIPRO,NSE:PATNI,NSE:HCLTECH,NSE:TECHM,NSE:POLARIS,NSE:MPHASIS,NSE:OFSS,NSE:ROLTA,NSE:HEXAWARE,NSE:EDUCOMP');
  
  $parts = explode('"', $quote);

$a = 7;
$b = 15;

for ($i = 0; $i <=96; $i++ ) {

$name[$i] = $parts[$a];
$ltp[$i] = str_replace(",","",$parts[$b]);
$a = $a + 44;
$b = $b + 44;
}
$quote = file_get_contents('http://finance.google.com/finance/info?client=ig&q=NSE:LT,NSE:BHEL,NSE:ABB,NSE:SIEMENS,NSE:CROMPGREAV,NSE:VOLTAS,NSE:VIDEOIND,NSE:BEML,NSE:ACC,NSE:GRASIM,NSE:INDIACEM,NSE:ULTRACEMCO,NSE:BHARTIARTL,NSE:RCOM,NSE:IDEA,NSE:ONMOBILE,NSE:MTNL,NSE:TTML,NSE:TATACOMM,NSE:ITC,NSE:HINDUNILVR,NSE:DABUR,NSE:COLPAL,NSE:MCLEODRUSS,NSE:MCDOWELL-N,NSE:BATAINDIA,NSE:RELINFRA,NSE:RPOWER,NSE:TATAPOWER,NSE:POWERGRID,NSE:NTPC,NSE:JPPOWER,NSE:GVKPIL,NSE:BGRENERGY,NSE:ADANIENT,NSE:ADANIPOWER,NSE:BFUTILITIE,NSE:HAVELLS,NSE:JSWENERGY,NSE:NHPC,NSE:NMDC,NSE:RECLTD,NSE:PTC,NSE:BALRAMCHIN,NSE:BAJAJHIND,NSE:RENUKA,NSE:CHAMBLFERT,NSE:TATACHEM,NSE:ORCHIDCHEM,NSE:UNIPHOS,NSE:GUJFLUORO,NSE:SCI,NSE:GESHIP,NSE:ABGSHIP,NSE:JETAIRWAYS,NSE:INDHOTEL,NSE:SUNTV,NSE:DISHTV,NSE:ZEEL,NSE:SUNPHARMA,NSE:CIPLA,NSE:RANBAXY,NSE:DRREDDY,NSE:FORTIS,NSE:BIOCON,NSE:AUROPHARMA,NSE:PIRHEALTH,NSE:LUPIN,NSE:GLAXO,NSE:DIVISLAB,NSE:OPTOCIRCUI,NSE:JUBLFOOD');
  
  $parts = explode('"', $quote);

$a = 7;
$b = 15;

for ($i = 97; $i <=168; $i++ ) {

$name[$i] = $parts[$a];
$ltp[$i] = str_replace(",","",$parts[$b]);
$a = $a + 44;
$b = $b + 44;
}

for ( $r = 0; $r <=168; $r++ ) {
$row = 0;
$file = fopen("TC.csv", "r");

while (($data = fgetcsv($file, 8000, ",")) !== FALSE) {

	if ( ($data[0] == $name[$r]) && ($data[1] == "EQ")) { $avgp = $data[9]/$data[8]; $avgp = number_format($avgp, 2, '.', ''); $high = $data[3];$low = $data[4];}
   
    $row++; 
	
    }
fclose($file);
$pavg[$r] = $avgp;
$phigh[$r] = $high;
$plow[$r] = $low;
}
echo "<table border=\"1\" align=\"left\">";
echo "<tr><th>NAME</th>";
echo "<th>LTP</th>";
echo "<th>CHG</th>";
echo "<th>AVG</th>";
echo "<th>High</th>";
echo "<th>Low</th></tr>";
$rhh = 0;
$rh = 0;
$rll = 0;
$rl = 0;
$ruu = 0;
$ru = 0;
$rd = 0;
$rdd = 0;



for ( $j = 0; $j <=168; $j++ ) {
$posh = ($phigh[$j] - $pavg[$j] )/$pavg[$j];
$posl = ($plow[$j] - $pavg[$j] )/$pavg[$j];
$posc = ($ltp[$j] - $pavg[$j] )/$pavg[$j];
if ( $posc >= 0 ) { $reslt = $posc/$posh; }
if ( $posc < 0 ) { $reslt = $posc/$posl; $reslt = $reslt * -1; }
$reslt = number_format($reslt, 2, '.', '');



echo "<tr><td>";
$lik = "http://www.google.com/finance?q=NSE:".$name[$j];
echo "<a href=".$lik.">".$name[$j]."</a>";
echo "</td><td>";
echo $ltp[$j];
echo "</td><td>";

if ( ( $reslt < 0 ) && ( $reslt >= -1 )) {
echo "<FONT COLOR=FF0000>".$reslt."</FONT>";
echo "</td><td>";
}
if ( ( $reslt >= 0 ) && ( $reslt <= 1 ) ) {
echo "<FONT COLOR=0000FF>".$reslt."</FONT>";
echo "</td><td>";
}
if ($reslt > 1 ) {
echo "<FONT COLOR=00CC00>".$reslt."</FONT>";
echo "</td><td>";
}
if ($reslt < -1 ) {
echo "<FONT COLOR=660000>".$reslt."</FONT>";
echo "</td><td>";
}
echo $pavg[$j];
echo "</td><td>";
echo $phigh[$j];
echo "</td><td>";
echo $plow[$j];
echo "</td><td>";


if ( $reslt >= 1 ) { $rhh++; $ruu = $ruu + $reslt; }
if ( $reslt <= -1 ) { $rll++; $rdd = $rdd + $reslt;}
if (( $reslt > -1 ) && ( $reslt < 0 )) { $rl++; $rd = $rd + $reslt;}
if (( $reslt < 1 ) && ( $reslt >= 0 )) { $rh++; $ru = $ru + $reslt;}


$sc[0] = $name[$i];

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

//echo "&phigh=".$sh[1];
//echo "&plow=".$sl[1];


echo "&pvol=".$sv[1];
echo "</td><td>";
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

	if ( ($data[1] == $scp)  && ($data[4] == "XX") ) { if ($data[2] == "MAY") { $oi1 = $data[12]; $oic1 = ($data[13]/$data[12])*100;}
if ( ($data[1] == $scp)  && ($data[4] == "XX") ) { if ($data[2] == "JUNE") { $oi2 = $data[12]; $oic2 = ($data[13]/$data[12])*100;}


   
    $row++; 
	
    }
fclose($file);
$oic = $oic1 + $oic2; $oic = number_format($oic, 2, '.', ''); if ( $data[13] < 0 ) { $oic = abs($oic); echo $scp."&oic=M".$oic."PCTG"."&"; echo "</td><td>";}; if ( $data[13] >= 0 ) { echo $scp."&oic=P".$oic."PCTG"."&";echo "</td><td>"; }}}
$oi = $oi1 + $oi2;



$row = 4;
$file = fopen("TD.csv", "r");
while (($data = fgetcsv($file, 80000, ",")) !== FALSE) {

	if ( $data[2] == $scp) {$data[6] = number_format($data[6], 2, '.', ''); echo "&delivery=".$data[6]."PCTG"."&"; echo "</td><td>";}
   
 $row++; 
	
  }
fclose($file);
$tdma = 0;
$tdv = 0;
for ( $a = 0; $a <=200;$a++) { $tdma = $tdma + $stc[$a] ;$tdv = $tdv + $sv[$a] ; }
$tdma = $tdma/200;
echo "&200DMA=".$tdma;
echo "</td><td>";
$tdv = $tdv/200;
echo "&200DV=".$tdv;
echo "</td><td>";

$hdma = 0;
$hdv = 0;
for ( $a = 0; $a <=100;$a++) { $hdma = $hdma + $stc[$a] ;$hdv = $hdv + $sv[$a] ; }
$hdma = $hdma/100;
echo "&100DMA=".$hdma;
echo "</td><td>";
$hdv = $hdv/100;
echo "&100DV=".$hdv;
echo "</td><td>";

$fdma = 0;
$fdv = 0;
for ( $a = 0; $a <=50;$a++) { $fdma = $fdma + $stc[$a] ;$fdv = $fdv + $sv[$a] ; }
$fdma = $fdma/50;
echo "&50DMA=".$fdma;
echo "</td><td>";
$fdv = $fdv/50;
echo "&50DV=".$fdv;
echo "</td><td>";


$qty = 200000/$stc[1];

$oi = $oi * $avgp;
echo $scp."&oi=".$oi."&";
echo "</td><td>";
$s = 0;
$r = 0;
for ( $ir = 0; $ir < 200; $ir++) 
{ if (( $sh[$ir] > $sh[$ir+1] ) && ($sh[$ir+1] < $sh[$ir+2]) && ($sl[$ir+1] < $sl[1]) ) { $support[$s] = $sl[$ir+1]; echo "&sup".$s."=".$support[$s];echo "</td><td>"; $s++;} 
   if (( $sl[$ir] < $sl[$ir+1] ) && ($sl[$ir+1] > $sl[$ir+2]) && ($sl[$ir+1] > $sh[1])) { $resistance[$r] = $sh[$ir+1]; echo "&res".$r."=".$resistance[$r];echo "</td><td>";$r++; } }



$tu =1;
$td =1;
for ( $ir = 0; $ir <= 20; $ir++) 
{ 
if (( $sh[$ir] > $sh[$ir+1] ) && ($sh[$ir+1] < $sh[$ir+2]) && ( $sl[$ir] < $sl[$ir+1] ) && ( $stc[$ir] > $sh[$ir+1] ))
{ $risk = int(($sh[$ir+1] - $sl[$ir+1]) * $qty); $return1 = int(($resistance[1] - $sh[$ir+1] )* $qty);$return2 = int(($resistance[2] - $sh[$ir+1] )* $qty);$return3 = int(($resistance[3] - $sh[$ir+1] )* $qty); $return4 = int(($resistance[4] - $sh[$ir+1] )* $qty);$return5 = int(($resistance[5] - $sh[$ir+1] )* $qty);
$mtm = 	(($avgp -$sh[$ir+1])*$qty);
echo "&mtm=".$mtm."&td=WhipLongprice:".$sh[$ir+1]."&tt=before ".$tu. "days on".$sdate[$ir]."&tr=with a risk of:".$risk ."and &tra=a minimal return of:".$return1."at:".$resistance[1]."&trb=an Expected return of:".$return2."at:".$resistance[2]."And &trc=a possible return of:".$return3."at:".$resistance[3]."And &trd=a extensive return of:".$return4."at:".$resistance[4]."And &tre=a beautiful return of:".$return5."at:".$resistance[5];echo "</td><td>"; break;}
if (( $sl[$ir] < $sl[$ir+1] ) && ($sl[$ir+1] > $sl[$ir+2]) && ( $sh[$ir] > $sh[$ir+1] ) && ( $stc[$ir] < $sl[$ir+1] )) 
{ $risk = ($sh[$ir+1] - $sl[$ir+1]) * $qty;$return1 = ($sl[$ir+1] -$support[1]) * $qty;$return2 = ($sl[$ir+1] -$support[2]) * $qty;$return3 = ($sl[$ir+1] -$support[3]) * $qty;$return4 = ($sl[$ir+1] -$support[4]) * $qty;$return5 = ($sl[$ir+1] -$support[5]) * $qty;
$mtm = (($sh[$ir+1]-$avgp)*$qty);
echo "&mtm=".$mtm."&td=WhipShortprice:".$sl[$ir+1]."&tt=before ".$td. "days on".$sdate[$ir]."&tr=with a risk of:".$risk."and &tra=a minimal return of:".$return1."at:".$support[1]."&trb=an Expected return of:".$return2."at:".$support[2]."And &trc=a possible return of:".$return3."at:".$support[3]."And &trd=an extensive return of:".$return4."at:".$support[4]."And&tre= a lovely return of:".$return5."at:".$support[5];echo "</td><td>"; break;}
if (( $sh[$ir] > $sh[$ir+1] ) && ($sh[$ir+1] < $sh[$ir+2]))
 { $risk = ($sh[$ir+1] - $sl[$ir+1]) * $qty; $return1 = ($resistance[1] - $sh[$ir+1] )* $qty;$return2 = ($resistance[2] - $sh[$ir+1] )* $qty;$return3 = ($resistance[3] - $sh[$ir+1] )* $qty; $return4 = ($resistance[4] - $sh[$ir+1] )* $qty;$return5 = ($resistance[5] - $sh[$ir+1] )* $qty;
$mtm = (($avgp -$sh[$ir+1])*$qty);	
echo "&mtm=".$mtm."&td=Longprice:".$sh[$ir+1]."&tt=before ".$tu. "days on".$sdate[$ir]."&tr=with a risk of:".$risk ."and &tra=a minimal return of:".$return1."at:".$resistance[1]."&trb=an Expected return of:".$return2."at:".$resistance[2]."And &trc=a possible return of:".$return3."at:".$resistance[3]."And &trd=a extensive return of:".$return4."at:".$resistance[4]."And &tre=a beautiful return of:".$return5."at:".$resistance[5];echo "</td><td>"; break;} 
   if (( $sl[$ir] < $sl[$ir+1] ) && ($sl[$ir+1] > $sl[$ir+2])) { $risk = ($sh[$ir+1] - $sl[$ir+1]) * $qty;$return1 = ($sl[$ir+1] -$support[1]) * $qty;$return2 = ($sl[$ir+1] -$support[2]) * $qty;$return3 = ($sl[$ir+1] -$support[3]) * $qty;$return4 = ($sl[$ir+1] -$support[4]) * $qty;$return5 = ($sl[$ir+1] -$support[5]) * $qty;
$mtm = (($sh[$ir+1]-$avgp)*$qty);
echo "&mtm=".$mtm."&td=Shortprice:".$sl[$ir+1]."&tt=before ".$td. "days on".$sdate[$ir]."&tr=with a risk of:".$risk."and &tra=a minimal return of:".$return1."at:".$support[1]."&trb=an Expected return of:".$return2."at:".$support[2]."And &trc=a possible return of:".$return3."at:".$support[3]."And &trd=an extensive return of:".$return4."at:".$support[4]."And&tre= a lovely return of:".$return5."at:".$support[5];echo "</td><td>"; break;} 
$tu++;$td++;}

















}
echo "</table>";
echo "<table border=\"1\" align=\"centre\">";


$ruu = $ruu/$rhh;
echo "<tr><td>";
echo $rhh."-:-".$ruu;
$ru = $ru/$rh;
echo "</td><td>";
echo $rh."-:-".$ru;
$rdd = $rdd/$rll;
echo "</td><td>";
echo $rll."-:-".$rdd;
$rd = $rd/$rl;
echo "</td><td>";
echo $rl."-:-".$rd;
echo "</td></tr>";


echo "</table>";




$End = getTime(); 

echo "&T= ".number_format(($End - $Start),2)." secs"; 
?>
