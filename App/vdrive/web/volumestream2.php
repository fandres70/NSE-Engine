/*Owner & Copyrights: Vance King Saxbe. A.*//*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/
$scp[89] = "4778775";
$scp[90] = "6167636";
$scp[91] = "3808846";
$scp[92] = "1952230";
$scp[93] = "1770083";
$scp[94] = "878958";
$scp[95] = "94715";
$scp[96] = "265067";
$scp[97] = "915234";
$scp[98] = "136388";
$scp[99] = "7769902";
$scp[100] = "189905";
$scp[101] = "1813341";
$scp[102] = "713733";
$scp[103] = "2127131";
$scp[104] = "2095382";
$scp[105] = "19442067";
$scp[106] = "208820";
$scp[107] = "589329";
$scp[108] = "6014186";
$scp[109] = "1886661";
$scp[110] = "732121";
$scp[111] = "4004547";
$scp[112] = "3747357";
$scp[113] = "2281662";
$scp[114] = "8456662";
$scp[115] = "625944";
$scp[116] = "455978";
$scp[117] = "7502937";
$scp[118] = "79105";
$scp[119] = "5107377";
$scp[120] = "15092838";
$scp[121] = "4298245";
$scp[122] = "4298245";
$scp[123] = "1822302";
$scp[124] = "463500";
$scp[125] = "635470";
$scp[126] = "978687";
$scp[127] = "38108884";
$scp[128] = "1278118";
$scp[129] = "772866";
$scp[130] = "111994";
$scp[131] = "473379";
$scp[132] = "30864";
$scp[133] = "5322612";
$scp[134] = "569783";
$scp[135] = "368485";
$scp[136] = "214839";
$scp[137] = "4559088";
$scp[138] = "2399136";
$scp[139] = "1784218";
$scp[140] = "1110326";
$scp[141] = "2492125";
$scp[142] = "1878228";
$scp[143] = "3412555";
$scp[144] = "258231";
$scp[145] = "374391";
$scp[146] = "5722379";
$scp[147] = "570186";
$scp[148] = "11400793";
$scp[149] = "2089540";
$scp[150] = "132163";
$scp[151] = "5953423";
$scp[152] = "1908403";
$scp[153] = "625797";
$scp[154] = "12527423";
$scp[155] = "2045352";
$scp[156] = "241436";
$scp[157] = "1374871";
$scp[158] = "3136091";

  
 include ('xmltoarray.php');
function getTime() 
    { 
    $a = explode (' ',microtime()); 
    return(double) $a[0] + $a[1]; 
    } 

$mk = 0;
  for ( $ft = 0; $ft <= 2; $ft++) {$quote = "";$Start = getTime();

$url = "http://www.google.com/ig/api?stock=DENABANK&stock=DHANBANK&stock=DLF&stock=ESCORTS&stock=ESSAROIL&stock=EXIDEIND&stock=FEDERALBNK&stock=FINANTECH&stock=GAIL&stock=GMDCLTD&stock=GMRINFRA&stock=GODREJIND&stock=GSPL&stock=HCLTECH&stock=HDFC&stock=HDFCBANK&stock=HDIL&stock=HEROMOTOCO&stock=HEXAWARE&stock=HINDALCO&stock=HINDOILEXP&stock=HINDPETRO&stock=IBREALEST&stock=ICICIBANK&stock=IDBI&stock=IDFC&stock=INDIAINFO&stock=INDIANB&stock=IVRCLINFRA&stock=JINDALSAW&stock=JINDALSTEL&stock=JPASSOCIAT&stock=JSWISPAT&stock=JSWISPAT&stock=JSWSTEEL&stock=KOTAKBANK&stock=KTKBANK&stock=LICHSGFIN&stock=LITL&stock=MARUTI&stock=MERCATOR&stock=MPHASIS&stock=MRPL&stock=OFSS&stock=ONGC&stock=PETRONET&stock=PNB&stock=POLARIS&stock=PUNJLLOYD&stock=RELCAPITAL&stock=RELIANCE&stock=ROLTA&stock=SAIL&stock=SBIN&stock=SESAGOA&stock=SOBHA&stock=SRTRANSFIN&stock=STER&stock=SYNDIBANK&stock=TATAMOTORS&stock=TATASTEEL&stock=TECHM&stock=TVSMOTOR&stock=UCOBANK&stock=UNIONBANK&stock=UNITECH&stock=VIJAYABANK&stock=WELCORP&stock=WIPRO&stock=YESBANK";


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
$j = 0;
for ( $i = 89; $i <=158; $i++ ) {
$srt = $i."_attr";
/*
echo "<tr><td>";
echo $result ['xml_api_reply']['finance'][$j]['symbol_attr']['data']."<br/>";
echo "</td><td>";
echo $result ['xml_api_reply']['finance'][$j]['company_attr']['data']."<br/>";
echo "</td><td>";
echo $result ['xml_api_reply']['finance'][$j]['market_cap_attr']['data']."<br/>";
echo "</td><td>";
echo $result ['xml_api_reply']['finance'][$j]['volume_attr']['data']."<br/>";
echo "</td><td>";
echo $result ['xml_api_reply']['finance'][$j]['last_attr']['data']."<br/>";
echo "</td><td>";
$tlag = $result ['xml_api_reply']['finance'][$i]['trade_time_utc_attr']['data'] - $result ['xml_api_reply']['finance'][$j]['current_time_utc_attr']['data'];
echo $tlag."<br/>";
echo "</td></tr>";
*/
$tlag = $result ['xml_api_reply']['finance'][$j]['trade_time_utc_attr']['data'] - $result ['xml_api_reply']['finance'][$j]['current_time_utc_attr']['data'];
if ( $tlag >-20) {



$filename= $result ['xml_api_reply']['finance'][$j]['symbol_attr']['data'].'VOLUME.txt'; 

$temp = file_get_contents($filename);


$file = fopen($filename, "w" );

fwrite( $file, $result ['xml_api_reply']['finance'][$j]['volume_attr']['data'] ); 

fclose( $file ); 
//echo $result ['xml_api_reply']['finance'][$j]['symbol_attr']['data'];

if ( $result ['xml_api_reply']['finance'][$j]['volume_attr']['data'] != $temp ) {



$chg = (($result ['xml_api_reply']['finance'][$j]['volume_attr']['data'] - $temp)/$temp)*100;
$chg = number_format($chg, 2, '.', '');
if ($chg > 0.6 ) {
$my_time = date('h:i:s',time());
$seconds2add = 19800;
$new_time= strtotime($my_time);
$new_time+=$seconds2add;
$time = date('h:i:s',$new_time);
$open = strtotime("09:15:00");

$p = $new_time - $open;
$q = (strtotime("15:30:00") - strtotime("09:15:00"));
$r = $p/$q;

$volchg = (($result ['xml_api_reply']['finance'][$j]['volume_attr']['data']/$r)/$scp[$i])*100;
$volchg = number_format($volchg, 2, '.', '');
$filee = fopen("valert.txt", "a+" );

fwrite( $filee, $result ['xml_api_reply']['finance'][$j]['symbol_attr']['data'].":".$result ['xml_api_reply']['finance'][$j]['volume_attr']['data'].":".$chg.":".$volchg."\r\n" ); 

fclose( $filee ); 
}
}
}

//echo "</table>";
//print_r($result);
$j++;
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