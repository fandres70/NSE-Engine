<?php
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

$datar[0][$i] = $parts[$a];
$datar[1][$i] = str_replace(",","",$parts[$b]);
$a = $a + 44;
$b = $b + 44;
}
$quote = file_get_contents('http://finance.google.com/finance/info?client=ig&q=NSE:LT,NSE:BHEL,NSE:ABB,NSE:SIEMENS,NSE:CROMPGREAV,NSE:VOLTAS,NSE:VIDEOIND,NSE:BEML,NSE:ACC,NSE:GRASIM,NSE:INDIACEM,NSE:ULTRACEMCO,NSE:BHARTIARTL,NSE:RCOM,NSE:IDEA,NSE:ONMOBILE,NSE:MTNL,NSE:TTML,NSE:TATACOMM,NSE:ITC,NSE:HINDUNILVR,NSE:DABUR,NSE:COLPAL,NSE:MCLEODRUSS,NSE:MCDOWELL-N,NSE:BATAINDIA,NSE:RELINFRA,NSE:RPOWER,NSE:TATAPOWER,NSE:POWERGRID,NSE:NTPC,NSE:JPPOWER,NSE:GVKPIL,NSE:BGRENERGY,NSE:ADANIENT,NSE:ADANIPOWER,NSE:BFUTILITIE,NSE:HAVELLS,NSE:JSWENERGY,NSE:NHPC,NSE:NMDC,NSE:RECLTD,NSE:PTC,NSE:BALRAMCHIN,NSE:BAJAJHIND,NSE:RENUKA,NSE:CHAMBLFERT,NSE:TATACHEM,NSE:ORCHIDCHEM,NSE:UNIPHOS,NSE:GUJFLUORO,NSE:SCI,NSE:GESHIP,NSE:ABGSHIP,NSE:JETAIRWAYS,NSE:INDHOTEL,NSE:SUNTV,NSE:DISHTV,NSE:ZEEL,NSE:SUNPHARMA,NSE:CIPLA,NSE:RANBAXY,NSE:DRREDDY,NSE:FORTIS,NSE:BIOCON,NSE:AUROPHARMA,NSE:PIRHEALTH,NSE:LUPIN,NSE:GLAXO,NSE:DIVISLAB,NSE:OPTOCIRCUI,NSE:JUBLFOOD');
  
  $parts = explode('"', $quote);

$a = 7;
$b = 15;

for ($i = 97; $i <=168; $i++ ) {

$datar[0][$i] = $parts[$a];
$datar[1][$i] = str_replace(",","",$parts[$b]);
$a = $a + 44;
$b = $b + 44;
}

for ( $r = 0; $r <=168; $r++ ) {
$row = 0;
$file = fopen("TC.csv", "r");

while (($data = fgetcsv($file, 8000, ",")) !== FALSE) {

	if ( ($data[0] == $datar[0][$r]) && ($data[1] == "EQ")) { $avgp = $data[9]/$data[8]; $avgp = number_format($avgp, 2, '.', ''); $high = $data[3];$low = $data[4];}
   
    $row++; 
	
    }
fclose($file);
$pavg[$r] = $avgp;
$phigh[$r] = $high;
$plow[$r] = $low;
}

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
$posl = ($phigh[$j] - $pavg[$j] )/$pavg[$j];
$posc = ($datar[1][$j] - $pavg[$j] )/$pavg[$j];
if ( $posc >= 0 ) { $reslt = $posc/$posh; }
if ( $posc < 0 ) { $reslt = $posc/$posl; $reslt = $reslt * -1; }
$reslt = number_format($reslt, 2, '.', '');
$datar[2][$j] = $reslt;
$datar[3][$j] = number_format($pavg[$j], 2, '.', '');
$datar[4][$j] = $phigh[$j];
$datar[5][$j] = $phigh[$j];

if ( $reslt >= 1 ) { $rhh++; $ruu = $ruu + $reslt; }
if ( $reslt <= -1 ) { $rll++; $rdd = $rdd + $reslt;}
if (( $reslt > -1 ) && ( $reslt < 0 )) { $rl++; $rd = $rd + $reslt;}
if (( $reslt < 1 ) && ( $reslt >= 0 )) { $rh++; $ru = $ru + $reslt;}


}
/*

function sortDataSet(&$dataSet) { 
    $args = func_get_args(); 
    $callString = 'array_multisort('; 
    $usedColumns = array(); 
    for($i = 1, $count = count($args); $i < $count; ++$i) { 
        switch(gettype($args[$i])) { 
            case 'string': 
                $callString .= '$dataSet[\''.$args[$i].'\'], '; 
                array_push($usedColumns, $args[$i]); 
                break; 
            case 'integer': 
                $callString .= $args[$i].', '; 
                break; 
            default: 
                throw new Exception('expected string or integer, given '.gettype($args[$i])); 
        } 
    } 
    foreach($dataSet as $column => $array) { 
        if(in_array($column, $usedColumns)) continue; 
        $callString .= '$dataSet[\''.$column.'\'], '; 
    } 
    eval(substr($callString, 0, -2).');'); 
} 

sortDataSet($datar, '2', SORT_DESC, SORT_VALUE, '1', SORT_ASC, SORT_STRING, '0', SORT_ASC, SORT_STRING, '3', SORT_ASC, SORT_STRING, '4', SORT_ASC, SORT_STRING, '5', SORT_ASC, SORT_STRING); 

*/





echo "<table border=\"1\" align=\"left\">";
echo "<tr><th>NAME</th>";
echo "<th>LTP</th>";
echo "<th>CHG</th>";
echo "<th>AVG</th>";
echo "<th>High</th>";
echo "<th>Low</th></tr>";



for ( $jx = 0; $jx <=168; $jx++ ) {



echo "<tr><td>";
$lik = "http://www.google.com/finance?q=NSE:".$data[0][$j];
echo "<a href=".$lik.">".$datar[0][$jx]."</a>";
echo "</td><td>";
echo $datar[1][$jx];
echo "</td><td>";

if ( ( $datar[2][$jx] < 0 ) && ( $datar[2][$jx] >= -1 )) {
echo "<FONT COLOR=FF0000>".$datar[2][$jx]."</FONT>";
echo "</td><td>";
}
if ( ( $datar[2][$jx] >= 0 ) && ( $datar[2][$jx] <= 1 ) ) {
echo "<FONT COLOR=0000FF>".$datar[2][$jx]."</FONT>";
echo "</td><td>";
}
if ($datar[2][$jx] > 1 ) {
echo "<FONT COLOR=00CC00>".$datar[2][$jx]."</FONT>";
echo "</td><td>";
}
if ($datar[2][$jx] < -1 ) {
echo "<FONT COLOR=660000>".$datar[2][$jx]."</FONT>";
echo "</td><td>";
}
echo $datar[3][$jx];
echo "</td><td>";
echo $datar[4][$jx];
echo "</td><td>";
echo $datar[5][$jx];
echo "</td></tr>";

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
