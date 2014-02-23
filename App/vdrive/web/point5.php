/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/
function getTime() 
    { 
    $a = explode (' ',microtime()); 
    return(double) $a[0] + $a[1]; 
    } 
$Start = getTime();
 
$sc[0] = 'ICICIBANK';
$sc[1] = 'SBIN';
$sc[2] = 'HDFCBANK';
$sc[3] = 'KOTAKBANK';
$sc[4] = 'AXISBANK';
$sc[5] = 'PNB';
$sc[6] = 'BANKBARODA';
$sc[7] = 'BANKINDIA';
$sc[8] = 'YESBANK';
$sc[9] = 'VIJAYABANK';
$sc[10] = 'DENABANK';
$sc[11] = 'ALBK';
$sc[12] = 'KTKBANK';
$sc[13] = 'DHANBANK';
$sc[14] = 'DCB';
$sc[15] = 'ANDHRABANK';
$sc[16] = 'INDIANB';
$sc[17] = 'UCOBANK';
$sc[18] = 'UNIONBANK';
$sc[19] = 'SRTRANSFIN';
$sc[20] = 'LICHSGFIN';
$sc[21] = 'IOB';
$sc[22] = 'SYNDIBANK';
$sc[23] = 'CANBK';
$sc[24] = 'FEDERALBNK';
$sc[25] = 'HDFC';
$sc[26] = 'IDFC';
$sc[27] = 'IDBI';
$sc[28] = 'IFCI';
$sc[29] = 'RELCAPITAL';
$sc[30] = 'INDIAINFO';
$sc[31] = 'PFC';
$sc[32] = 'TATAMOTORS';
$sc[33] = 'BAJAJ-AUTO';
$sc[34] = 'MARUTI';
$sc[35] = 'HEROMOTOCO';
$sc[36] = 'ASHOKLEY';
$sc[37] = 'ESCORTS';
$sc[38] = 'TVSMOTOR';
$sc[39] = 'BHARATFORG';
$sc[40] = 'APOLLOTYRE';
$sc[41] = 'MRF';
$sc[42] = 'BOSCHLTD';
$sc[43] = 'EXIDEIND';
$sc[44] = 'DLF';
$sc[45] = 'UNITECH';
$sc[46] = 'HDIL';
$sc[47] = 'HCC';
$sc[48] = 'NCC';
$sc[49] = 'IBREALEST';
$sc[50] = 'GODREJIND';
$sc[51] = 'SOBHA';
$sc[52] = 'JPASSOCIAT';
$sc[53] = 'APIL';
$sc[54] = 'LITL';
$sc[55] = 'GMRINFRA';
$sc[56] = 'IVRCLINFRA';
$sc[57] = 'RELIANCE';
$sc[58] = 'ONGC';
$sc[59] = 'GSPL';
$sc[60] = 'PETRONET';
$sc[61] = 'MRPL';
$sc[62] = 'ABAN';
$sc[63] = 'GAIL';
$sc[64] = 'BPCL';
$sc[65] = 'HINDPETRO';
$sc[66] = 'OIL';
$sc[67] = 'HINDOILEXP';
$sc[68] = 'ESSAROIL';
$sc[69] = 'IOC';
$sc[70] = 'COALINDIA';
$sc[71] = 'CAIRN';
$sc[72] = 'TATASTEEL';
$sc[73] = 'SAIL';
$sc[74] = 'HINDALCO';
$sc[75] = 'STER';
$sc[76] = 'JSWSTEEL';
$sc[77] = 'JINDALSTEL';
$sc[78] = 'JINDALSAW';
$sc[79] = 'PUNJLLOYD';
$sc[80] = 'BHUSANSTL';
$sc[81] = 'SESAGOA';

$sc[82] = 'WELCORP';

$sc[83] = 'GMDCLTD';
$sc[84] = 'INFY';
$sc[85] = 'INFY';
$sc[86] = 'TCS';
$sc[87] = 'WIPRO';
$sc[88] = 'PATNI';
$sc[89] = 'HCLTECH';
$sc[90] = 'TECHM';
$sc[91] = 'POLARIS';
$sc[92] = 'MPHASIS';
$sc[93] = 'OFSS';

$sc[94] = 'ROLTA';
$sc[95] = 'HEXAWARE';
$sc[96] = 'EDUCOMP';

$sc[97] = 'LT';
$sc[98] = 'BHEL';
$sc[99] = 'ABB';
$sc[100] = 'SIEMENS';
$sc[101] = 'CROMPGREAV';
$sc[102] = 'VOLTAS';
$sc[103] = 'VIDEOIND';
$sc[104] = 
$sc[105] = 'BEML';
$sc[106] = 'ACC';
$sc[107] = 
$sc[108] = 'GRASIM';
$sc[109] = 'INDIACEM';
$sc[110] = 'ULTRACEMCO';

$sc[111] = 'BHARTIARTL';
$sc[112] = 'RCOM';
$sc[113] = 'IDEA';
$sc[114] = 'ONMOBILE';
$sc[115] = 'MTNL';
$sc[116] = 'TTML';
$sc[117] = 'TATACOMM';
$sc[118] = 'ITC';
$sc[119] = 'HINDUNILVR';
$sc[120] = 'DABUR';
$sc[121] = 'COLPAL';
$sc[122] = 'MCLEODRUSS';
$sc[123] = 'MCDOWELL-N';
$sc[124] = 'BATAINDIA';
$sc[125] = 'RELINFRA';
$sc[126] = 'RPOWER';
$sc[127] = 'TATAPOWER';
$sc[128] = 'POWERGRID';
$sc[129] = 'NTPC';
$sc[130] = 'JPPOWER';
$sc[131] = 'GVKPIL';
$sc[132] = 'BGRENERGY';
$sc[133] = 'ADANIENT';
$sc[134] = 'ADANIPOWER';
$sc[135] = 'BFUTILITIE';
$sc[136] = 'HAVELLS';
$sc[137] = 'JSWENERGY';
$sc[138] = 'NHPC';
$sc[139] = 'NMDC';
$sc[140] = 'RECLTD';

$sc[141] = 'PTC';
$sc[142] = 'BALRAMCHIN';
$sc[143] = 'BAJAJHIND';
$sc[144] = 'RENUKA';
$sc[145] = 'CHAMBLFERT';
$sc[146] = 'TATACHEM';
$sc[147] = 'ORCHIDCHEM';
$sc[148] = 'UNIPHOS';
$sc[149] = 'GUJFLUORO';
$sc[150] = 'SCI';
$sc[151] = 'GESHIP';
$sc[152] = 'ABGSHIP';
$sc[153] = 'JETAIRWAYS';
$sc[154] = 'INDHOTEL';
$sc[155] = 'SUNTV';
$sc[156] = 'DISHTV';
$sc[157] = 'ZEEL';
$sc[158] = 'SUNPHARMA';
$sc[159] = 'CIPLA';
$sc[160] = 'RANBAXY';
$sc[161] = 'DRREDDY';
$sc[162] = 'FORTIS';
$sc[163] = 'BIOCON';
$sc[164] = 'AUROPHARMA';
$sc[165] = 'PIRHEALTH';
$sc[166] = 'LUPIN';
$sc[167] = 'GLAXO';
$sc[168] = 'DIVISLAB';
$sc[169] = 'OPTOCIRCUI';
$sc[170] = 'JUBLFOOD';




for ( $j = 0; $j <= 170; $j++ ) {


  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:'.$sc[$j]);
  
  
  $json = str_replace("\n", "", $quote);
  
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  $list[$j] = $json_output['l'];
  
   }

$is = 0; 

$fille = "pr.csv"; 



$row = 0;
$j =0;

$file = fopen($fille, "r");
while (($data = fgetcsv($file, 8000, ",")) !== FALSE) {

   
 $sh[$j] = $data[0];
 
$j++;

}
fclose($file);

 $fp = fopen('pr.csv', 'w');

 for ($x=0;$x<=170;$x++)
     fputcsv($fp,split(':',$list[$x]));
    fclose($fp); 





$fil = "TC.csv";

for ( $is = 0; $is <= 170; $is++) { 


$row = 0;
$fille = fopen($fil, "r");
while (($data = fgetcsv($fille, 8000, ",")) !== FALSE) {

if ( ($data[0] == $sc[$is]) && ($data[1] == "EQ")) 
{  
$avgp[$is] = $data[9]/$data[8]; 
$high[$is] = $data[3];
$low[$is] = $data[4];
}
   
    $row++; 
}
fclose($fille);
}

$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
$colon = ":";
$x = 0;
for ( $i = 0; $i <= 170; $i++ ) {

//echo $sc[$i]."last:".$list[$i]."and".$sc[$i]."temp:".$sh[$i]."and".$sc[$i]."AVP:".$avgp[$i]."and".$sc[$i]."P-High:".$high[$i]."and".$sc[$i]."P-Low:".$low[$i]."\n";
 

if (($list[$i] > $high[$i] ) && ($sh[$i] <= $high[$i] ))
      {
          
		print "alert".$x."=".$sc[$i]. $colon . "breaking_P_HIGH_at". $list[$i]. "_by_". $time."<BR>";
		print "chart".$x."=".$sc[$i];

$x++;
			
     }   


if (($list[$i] < $high[$i] ) && ($sh[$i] >= $high[$i] ))
      {
     
         
		print "&alert".$x."=".$sc[$i]. $colon . "retracing_P_HIGH_at". $list[$i]."_by_". $time."<BR>";
  print "&chart".$x."=".$sc[$i]; $x++;
     }   

if (($list[$i] < $low[$i] ) && ($sh[$i] >= $low[$i] ))
      {
     
		print "&alert".$x."=".$sc[$i]. $colon . "breaking_P_LOW_at". $list[$i]. "_by_". $time."<BR>";
  print "&chart".$x."=".$sc[$i];  $x++; }   

if (($list[$i] > $low[$i] ) && ($sh[$i] <= $low[$i] ))
      {
    
		print "&alert".$x."=".$sc[$i]. $colon . "retracing_P_LOW_at". $list[$i]. "_by_". $time."<BR>";
   print "&chart".$x."=".$sc[$i]; $x++; }   

if (($list[$i] > $avgp[$i] ) && ($sh[$i] <= $avgp[$i] ))
      {
     
		print "&alert".$x."=".$sc[$i]. $colon . "sliding_above_P_AVG_at". $list[$i]. "_by_". $time."<BR>";
  print "&chart".$x."=".$sc[$i]; $x++;  }   

if (($list[$i] < $avgp[$i] ) && ($sh[$i] >= $avgp[$i] ))
      {
     
		print "&alert".$x."=".$sc[$i]. $colon . "Sliding_below_P_AVG_at". $list[$i]. "_by_". $time."<BR>";
   print "&chart".$x."=".$sc[$i]; $x++; }   

}
for ( $i = 0; $i <= 170; $i++ ) {

$diff = $list[$i] - $sh[$i];
$diff = $diff / $list[$i];
$diff = $diff * 100;
//echo $sc[$i].":".$diff."\n";
}
$End = getTime(); 

echo "&T= ".number_format(($End - $Start),2)." secs";
?>