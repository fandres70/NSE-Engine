<?php

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


for ( $is = 0; $is <= 170; $is++) {  $scp = $sc[$is];

$fille = $sc[$is].".csv"; 



$row = 0;
$j =0;

$file = fopen($fille, "r");
while (($data = fgetcsv($file, 8000, ",")) !== FALSE) {


    $num = count($data);
    $row++; 
	
    for ($c=0; $c < $num; $c++) {}
    
 $sh[$j] = $data[2];
 $sl[$j] = $data[3];
 $stc[$j] = $data[4];
 $sv[$j] = $data[5];
$j++;

}
fclose($file);
$row = 0;
$file = fopen("TC.csv", "r");
while (($data = fgetcsv($file, 8000, ",")) !== FALSE) {

	if ( ($data[0] == $scp) && ($data[1] == "EQ")) { $avgp = $data[9]/$data[8]; echo $scp."&avgp=".$avgp; }
   
    $row++; 
	
    

}
fclose($file);
$row =0;
$file = fopen("TF.csv", "r");
while (($data = fgetcsv($file, 8000, ",")) !== FALSE) {

	if ( ($data[1] == $scp)  && ($data[4] == "MAY") ) { if ($data[2] == "4/26/2012") { $oic = $data[13]/$data[12]; echo $scp."&oic=".$oic; }}
   
    $row++; 
	
    

}
fclose($file);
$row =0;
$file = fopen("TD.csv", "r");
while (($data = fgetcsv($file, 8000, ",")) !== FALSE) {

	if ( ($data[2] == $scp) && ($data[3] == "EQ")) { $avgp = $data[6]; echo $scp."&delivery=".$avgp; }
   
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
$s = 0;
$r = 0;
for ( $ir = 1; $ir < 200; $ir++) 
{ if (( $sh[$ir] > $sh[$ir+1] ) && ($sh[$ir+1] < $sh[$ir+2]) && ($sl[$ir+1] < $sl[1]) ) { $support[$s] = $sl[$ir+1]; $s++;} 
   if (( $sl[$ir] < $sl[$ir+1] ) && ($sl[$ir+1] > $sl[$ir+2]) && ($sl[$ir+1] > $sh[1])) { $resistance[$r] = $sh[$ir+1]; $r++; } }



$tu =1;
$td =1;
for ( $ir = 1; $ir < 20; $ir++) 
{ if (( $sh[$ir] > $sh[$ir+1] ) && ($sh[$ir+1] < $sh[$ir+2]))
 { $risk = ($sh[$ir+1] - $sl[$ir+1]) * $qty; $return1 = ($resistance[1] - $sh[$ir+1] )* $qty;$return2 = ($resistance[2] - $sh[$ir+1] )* $qty;$return3 = ($resistance[3] - $sh[$ir+1] )* $qty; $return4 = ($resistance[4] - $sh[$ir+1] )* $qty;$return5 = ($resistance[5] - $sh[$ir+1] )* $qty;
	echo "&longprice=".$sh[$ir+1]."before ".$tu. "days with a risk of:".$risk ."and a minimal return of:".$return1."at:".$resistance[1]."an Expected return of:".$return2."at:".$resistance[2]."And a possible return of:".$return3."at:".$resistance[3]."And a extensive return of:".$return4."at:".$resistance[4]."And a beautiful return of:".$return5."at:".$resistance[5]; $ir = 20;} 
   if (( $sl[$ir] < $sl[$ir+1] ) && ($sl[$ir+1] > $sl[$ir+2])) { $risk = ($sh[$ir+1] - $sl[$ir+1]) * $qty;$return1 = ($sl[$ir+1] -$support[1]) * $qty;$return2 = ($sl[$ir+1] -$support[2]) * $qty;$return3 = ($sl[$ir+1] -$support[3]) * $qty;$return4 = ($sl[$ir+1] -$support[4]) * $qty;$return5 = ($sl[$ir+1] -$support[5]) * $qty;
echo "&Shortprice=".$sl[$ir+1]."before ".$td. "days with a risk of:".$risk."and a minimal return of:".$return1."at:".$support[1]."an Expected return of:".$return2."at:".$support[2]."And a possible return of:".$return3."at:".$support[3]."And an extensive return of:".$return4."at:".$support[4]."And a lovely return of:".$return5."at:".$support[5]; $ir = 20;} $tu++;$td++;}








}
$End = getTime(); 

echo "&T= ".number_format(($End - $Start),2)." secs";

?>

