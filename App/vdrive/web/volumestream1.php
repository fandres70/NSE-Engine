/*Owner & Copyrights: Vance King Saxbe. A.*//*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/
$scp[0] = "130244";
$scp[1] = "2939684";
$scp[2] = "3617435";
$scp[3] = "905338";
$scp[4] = "145282";
$scp[5] = "627464";
$scp[6] = "3865842";
$scp[7] = "1335823";
$scp[8] = "283425";
$scp[9] = "130941";
$scp[10] = "547649";
$scp[11] = "1130477";
$scp[12] = "2740611";
$scp[13] = "2765171";
$scp[14] = "260257";
$scp[15] = "4463426";
$scp[16] = "1301985";
$scp[17] = "19498";
$scp[18] = "305436";
$scp[19] = "887032";
$scp[20] = "292778";
$scp[21] = "1280516";
$scp[22] = "2885209";
$scp[23] = "55180";
$scp[24] = "379749";
$scp[25] = "1847044";
$scp[26] = "674375";
$scp[27] = "184483";
$scp[28] = "56456";
$scp[29] = "91220";
$scp[30] = "173745";
$scp[31] = "10909160";
$scp[32] = "183929";
$scp[33] = "1228702";
$scp[34] = "2448589";
$scp[35] = "688365";
$scp[36] = "1448167";
$scp[37] = "2522011";
$scp[38] = "1834653";
$scp[39] = "3162191";
$scp[40] = "512960";
$scp[41] = "493825";
$scp[42] = "2451269";
$scp[43] = "933947";
$scp[44] = "946009";
$scp[45] = "6267204";
$scp[46] = "292263";
$scp[47] = "1439107";
$scp[48] = "11393216";
$scp[49] = "849475";
$scp[50] = "2109903";
$scp[51] = "55480";
$scp[52] = "1592047";
$scp[53] = "589437";
$scp[54] = "9996009";
$scp[55] = "1870449";
$scp[56] = "1566977";
$scp[57] = "11396263";
$scp[58] = "5213480";
$scp[59] = "110759";
$scp[60] = "589329";
$scp[61] = "247109";
$scp[62] = "1081918";
$scp[63] = "927968";
$scp[64] = "315398";
$scp[65] = "2156359";
$scp[66] = "1316929";
$scp[67] = "91997";
$scp[68] = "469335";
$scp[69] = "136327";
$scp[70] = "2865080";
$scp[71] = "667116";
$scp[72] = "1507657";
$scp[73] = "581853";
$scp[74] = "644756";
$scp[75] = "3989725";
$scp[76] = "21587532";
$scp[77] = "3240151";
$scp[78] = "529214";
$scp[79] = "385086";
$scp[80] = "530190";
$scp[81] = "476512";
$scp[82] = "197964";
$scp[83] = "4478";
$scp[84] = "259750";
$scp[85] = "2587661";
$scp[86] = "1139360";
$scp[87] = "992871";
$scp[88] = "3736537";

  

 include ('xmltoarray.php');
function getTime() 
    { 
    $a = explode (' ',microtime()); 
    return(double) $a[0] + $a[1]; 
    } 

$mk = 0;
  for ( $ft = 0; $ft <= 2; $ft++) {$quote = "";$Start = getTime();

$url = "http://www.google.com/ig/api?stock=ABGSHIP&stock=ADANIENT&stock=ADANIPOWER&stock=AMBUJACEM&stock=ASIANPAINT&stock=AUROPHARMA&stock=BAJAJHIND&stock=BALRAMCHIN&stock=BATAINDIA&stock=BEML&stock=BFUTILITIE&stock=BGRENERGY&stock=BHARTIARTL&stock=BHEL&stock=BIOCON&stock=CHAMBLFERT&stock=CIPLA&stock=COLPAL&stock=COREEDUTEC&stock=CROMPGREAV&stock=CUMMINSIND&stock=DABUR&stock=DISHTV&stock=DIVISLAB&stock=DRREDDY&stock=EDUCOMP&stock=FORTIS&stock=GESHIP&stock=GLAXO&stock=GRASIM&stock=GUJFLUORO&stock=GVKPIL&stock=HAVELLS&stock=HINDUNILVR&stock=IDEA&stock=INDHOTEL&stock=INDIACEM&stock=JETAIRWAYS&stock=JPPOWER&stock=JSWENERGY&stock=JUBLFOOD&stock=LUPIN&stock=MCDOWELL-N&stock=MCLEODRUSS&stock=MTNL&stock=NHPC&stock=NMDC&stock=NTPC&stock=ONMOBILE&stock=OPTOCIRCUI&stock=ORCHIDCHEM&stock=PIRHEALTH&stock=POWERGRID&stock=RANBAXY&stock=RCOM&stock=RECLTD&stock=RELINFRA&stock=RENUKA&stock=RPOWER&stock=SIEMENS&stock=STOCK=HEXAWARE&stock=SUNPHARMA&stock=SUNTV&stock=TATACHEM&stock=TATACOMM&stock=TATAPOWER&stock=TTML&stock=ULTRACEMCO&stock=UNIPHOS&stock=VIDEOIND&stock=VOLTAS&stock=ZEEL&stock=ABAN&stock=ANDHRABANK&stock=APIL&stock=APOLLOTYRE&stock=ASHOKLEY&stock=AXISBANK&stock=BAJAJ-AUTO&stock=BANKBARODA&stock=BANKINDIA&stock=BHARATFORG&stock=BHUSANSTL&stock=BOSCHLTD&stock=BPCL&stock=CAIRN&stock=CANBK&stock=COALINDIA&stock=DCB";



$contents = file_get_contents($url);
$result = xml2array($contents);

//print_r($result);

/*
echo "<table border=\"1\" align=\"left\">";
echo "<tr><th>NAME</th>";
echo "<th>MCAP</th>";
echo "<th>VOL</th>";
echo "<th>Timelag</th></tr>";
*/
for ( $i = 0; $i <=69; $i++ ) {
$srt = $i."_attr";
/*
echo "<tr><td>";
echo $result ['xml_api_reply']['finance'][$i]['symbol_attr']['data']."<br/>";
echo "</td><td>";
echo $result ['xml_api_reply']['finance'][$i]['company_attr']['data']."<br/>";
echo "</td><td>";
echo $result ['xml_api_reply']['finance'][$i]['market_cap_attr']['data']."<br/>";
echo "</td><td>";
echo $result ['xml_api_reply']['finance'][$i]['volume_attr']['data']."<br/>";
echo "</td><td>";
echo $result ['xml_api_reply']['finance'][$i]['last_attr']['data']."<br/>";
echo "</td><td>";
$tlag = $result ['xml_api_reply']['finance'][$i]['trade_time_utc_attr']['data'] - $result ['xml_api_reply']['finance'][$i]['current_time_utc_attr']['data'];
echo $tlag."<br/>";
echo "</td></tr>";
*/
$tlag = $result ['xml_api_reply']['finance'][$i]['trade_time_utc_attr']['data'] - $result ['xml_api_reply']['finance'][$i]['current_time_utc_attr']['data'];
if ( $tlag >-20) {



$filename= $result ['xml_api_reply']['finance'][$i]['symbol_attr']['data'].'VOLUME.txt'; 

$temp = file_get_contents($filename);


$file = fopen($filename, "w" );

fwrite( $file, $result ['xml_api_reply']['finance'][$i]['volume_attr']['data'] ); 

fclose( $file ); 
//echo $result ['xml_api_reply']['finance'][$i]['symbol_attr']['data'];

if ( $result ['xml_api_reply']['finance'][$i]['volume_attr']['data'] != $temp ) {
$chg = (($result ['xml_api_reply']['finance'][$i]['volume_attr']['data'] - $temp)/$temp)*100;
$chg = number_format($chg, 2, '.', '');
if($chg > 0.6 ) {
$my_time = date('h:i:s',time());
$seconds2add = 19800;
$new_time= strtotime($my_time);
$new_time+=$seconds2add;
$time = date('h:i:s',$new_time);
$open = strtotime("09:15:00");

$p = $new_time - $open;
$q = (strtotime("15:30:00") - strtotime("09:15:00"));
$r = $p/$q;

$volchg = (($result ['xml_api_reply']['finance'][$i]['volume_attr']['data']/$r)/$scp[$i])*100;
$volchg = number_format($volchg, 2, '.', '');
$filee = fopen("valert.txt", "a+" );

fwrite( $filee, $result ['xml_api_reply']['finance'][$i]['symbol_attr']['data'].":".$result ['xml_api_reply']['finance'][$i]['volume_attr']['data'].":".$chg.":".$volchg."\r\n" ); 

fclose( $filee ); 
}}
}

//echo "</table>";
//print_r($result);

}


$End = getTime();
$much = number_format(($End - $Start),2);
$jiu = file_get_contents("looplimit.txt");
if( $ft == $jiu ) { $ft--; };
$mk ++;
$file = fopen("looplog.txt", "a+" );
fwrite( $file, $mk."th - stream in -".$much." seconds."."\r\n" ); 
fclose( $file );
}
?>

/*email to provide support at vancekingsaxbe@powerdominionenterprise.com, businessaffairs@powerdominionenterprise.com, For donations please write to fundraising@powerdominionenterprise.com*/