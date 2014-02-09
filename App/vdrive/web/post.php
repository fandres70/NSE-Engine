<?php
$field = $_POST['scrip'];

$link = "http://finance.google.co.uk/finance/info?client=ig&q=NSE:".$field;

$quote = file_get_contents($link);

  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  $json_output = json_decode($data, true);
  
 // print_r($json_output);
  
  //Output Stock price array key.
 
$jack = $json_output['l'];

echo "&scrip1=".$jack."&";



$sc[0] = $_POST['scrip'];

$is = 0; 
  $sclp = $sc[$is];

$fille = $sc[$is].".csv"; 

$row = 0;
$j =0;

$file = fopen($fille, "r");
while (($data = fgetcsv($file, 8000, ",")) !== FALSE) {
    
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

	if ( ($data[0] == $sclp) && ($data[1] == "EQ")) { $avgp = $data[9]/$data[8]; echo $sclp."&avgp=".$avgp; }
   
    $row++; 
	
    }
fclose($file);
$row =0;
$file = fopen("TF.csv", "r");
while (($data = fgetcsv($file, 8000, ",")) !== FALSE) {

	if ( ($data[1] == $sclp)  && ($data[4] == "XX") ) { if ($data[2] == "26-Apr-2012") { $oic = $data[13]/$data[12]; echo $sclp."&oic=".$oic; }}
   
    $row++; 
	
    

}
fclose($file);
$row = 4;
$file = fopen("TD.csv", "r");
while (($data = fgetcsv($file, 8000, ",")) !== FALSE) {

	if ( ($data[2] == $sclp) && ($data[3] == "EQ")) { echo "&delivery=".$data[6]; }
   
    $row++; 
	
    }
fclose($file);
$tdma = 0;
$tdv = 0;
for ( $a = 0; $a <=200;$a++) { $tdma = $tdma + $stc[$a] ;$tdv = $tdv + $sv[$a] ; }
$tdma = $tdma/200;
echo "&TDMA=".$tdma;
$tdv = $tdv/200;
echo "&TDV=".$tdv;

$hdma = 0;
$hdv = 0;
for ( $a = 0; $a <=100;$a++) { $hdma = $hdma + $stc[$a] ;$hdv = $hdv + $sv[$a] ; }
$hdma = $hdma/100;
echo "&HDMA=".$hdma;
$hdv = $hdv/100;
echo "&HDV=".$hdv;

$fdma = 0;
$fdv = 0;
for ( $a = 0; $a <=50;$a++) { $fdma = $fdma + $stc[$a] ;$fdv = $fdv + $sv[$a] ; }
$fdma = $fdma/50;
echo "&FDMA=".$fdma;
$fdv = $fdv/50;
echo "&FDV=".$fdv;


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
	echo "&td=longprice:".$sh[$ir+1]."before ".$tu. "days with a risk of:".$risk ."and a minimal return of:".$return1."at:".$resistance[1]."an Expected return of:".$return2."at:".$resistance[2]."And a possible return of:".$return3."at:".$resistance[3]."And a extensive return of:".$return4."at:".$resistance[4]."And a beautiful return of:".$return5."at:".$resistance[5]; $ir = 20;} 
   if (( $sl[$ir] < $sl[$ir+1] ) && ($sl[$ir+1] > $sl[$ir+2])) { $risk = ($sh[$ir+1] - $sl[$ir+1]) * $qty;$return1 = ($sl[$ir+1] -$support[1]) * $qty;$return2 = ($sl[$ir+1] -$support[2]) * $qty;$return3 = ($sl[$ir+1] -$support[3]) * $qty;$return4 = ($sl[$ir+1] -$support[4]) * $qty;$return5 = ($sl[$ir+1] -$support[5]) * $qty;
echo "&td=Shortprice:".$sl[$ir+1]."before ".$td. "days with a risk of:".$risk."and a minimal return of:".$return1."at:".$support[1]."an Expected return of:".$return2."at:".$support[2]."And a possible return of:".$return3."at:".$support[3]."And an extensive return of:".$return4."at:".$support[4]."And a lovely return of:".$return5."at:".$support[5]; $ir = 20;} $tu++;$td++;}

$scp[0]= "ICICIBANK";
$scp[1]= "SBIN";
$scp[2]= "HDFCBANK";
$scp[3]= "KOTAKBANK";
$scp[4]= "AXISBANK";
$scp[5]= "PNB";
$scp[6]= "BANKBARODA";
$scp[7]= "BANKINDIA";
$scp[8]= "YESBANK";
$scp[9]= "VIJAYABANK";
$scp[10]= "DENABANK";
$scp[11]= "ALBK";
$scp[12]= "KTKBANK";
$scp[13]= "DHANBANK";
$scp[14]= "DCB";
$scp[15]= "ANDHRABANK";
$scp[16]= "INDIANB";
$scp[17]= "UCOBANK";
$scp[18]= "UNIONBANK";
$scp[19]= "SRTRANSFIN";
$scp[20]= "LICHSGFIN";
$scp[21]= "IOB";
$scp[22]= "SYNDIBANK";
$scp[23]= "CANBK";
$scp[24]= "FEDERALBNK";
$scp[25]= "HDFC";
$scp[26]= "IDFC";
$scp[27]= "IDBI";
$scp[28]= "IFCI";
$scp[29]= "RELCAPITAL";
$scp[30]= "INDIAINFO";
$scp[31]= "PFC";
$scp[32]= "TATAMOTORS";
$scp[33]= "BAJAJ-AUTO";
$scp[34]= "MARUTI";
$scp[35]= "HEROMOTOCO";
$scp[36]= "ASHOKLEY";
$scp[37]= "ESCORTS";
$scp[38]= "TVSMOTOR";
$scp[39]= "BHARATFORG";
$scp[40]= "APOLLOTYRE";
$scp[41]= "MRF";
$scp[42]= "BOSCHLTD";
$scp[43]= "EXIDEIND";
$scp[44]= "DLF";
$scp[45]= "UNITECH";
$scp[46]= "HDIL";
$scp[47]= "HCC";
$scp[48]= "NCC";
$scp[49]= "IBREALEST";
$scp[50]= "GODREJIND";
$scp[51]= "SOBHA";
$scp[52]= "JPASSOCIAT";
$scp[53]= "APIL";
$scp[54]= "LITL";
$scp[55]= "GMRINFRA";
$scp[56]= "IVRCLINFRA";
$scp[57]= "RELIANCE";
$scp[58]= "ONGC";
$scp[59]= "GSPL";
$scp[60]= "PETRONET";
$scp[61]= "MRPL";
$scp[62]= "ABAN";
$scp[63]= "GAIL";
$scp[64]= "BPCL";
$scp[65]= "HINDPETRO";
$scp[66]= "OIL";
$scp[67]= "HINDOILEXP";
$scp[68]= "ESSAROIL";
$scp[69]= "IOC";
$scp[70]= "COALINDIA";
$scp[71]= "CAIRN";
$scp[72]= "TATASTEEL";
$scp[73]= "SAIL";
$scp[74]= "HINDALCO";
$scp[75]= "STER";
$scp[76]= "JSWSTEEL";
$scp[77]= "JINDALSTEL";
$scp[78]= "JINDALSAW";
$scp[79]= "PUNJLLOYD";
$scp[80]= "BHUSANSTL";
$scp[81]= "SESAGOA";
$scp[82]= "JSWISPAT";
$scp[83]= "WELCORP";
$scp[84]= "JSWISPAT";
$scp[85]= "GMDCLTD";
$scp[86]= "MERCATOR";
$scp[87]= "INFY";
$scp[88]= "TCS";
$scp[89]= "WIPRO";
$scp[90]= "PATNI";
$scp[91]= "HCLTECH";
$scp[92]= "TECHM";
$scp[93]= "POLARIS";
$scp[94]= "MPHASIS";
$scp[95]= "OFSS";
$scp[96]= "FINANTECH";
$scp[97]= "ROLTA";
$scp[98]= "HEXAWARE";
$scp[99]= "EDUCOMP";
$scp[100]= "COREEDUTEC";
$scp[101]= "LT";
$scp[102]= "BHEL";
$scp[103]= "ABB";
$scp[104]= "SIEMENS";
$scp[105]= "CROMPGREAV";
$scp[106]= "VOLTAS";
$scp[107]= "VIDEOIND";
$scp[108]= "BEL";
$scp[109]= "BEML";
$scp[110]= "ACC";
$scp[111]= "AMBUJACEM";
$scp[112]= "GRASIM";
$scp[113]= "INDIACEM";
$scp[114]= "ULTRACEMCO";
$scp[115]= "ASIANPAINT";
$scp[116]= "BHARTIARTL";
$scp[117]= "RCOM";
$scp[118]= "IDEA";
$scp[119]= "ONMOBILE";
$scp[120]= "MTNL";
$scp[121]= "TTML";
$scp[122]= "TATACOMM";
$scp[123]= "ITC";
$scp[124]= "HINDUNILVR";
$scp[125]= "DABUR";
$scp[126]= "COLPAL";
$scp[127]= "MCLEODRUSS";
$scp[128]= "MCDOWELL-N";
$scp[129]= "BATAINDIA";
$scp[130]= "RELINFRA";
$scp[131]= "RPOWER";
$scp[132]= "TATAPOWER";
$scp[133]= "POWERGRID";
$scp[134]= "NTPC";
$scp[135]= "JPPOWER";
$scp[136]= "GVKPIL";
$scp[137]= "BGRENERGY";
$scp[138]= "ADANIENT";
$scp[139]= "ADANIPOWER";
$scp[140]= "BFUTILITIE";
$scp[141]= "HAVELLS";
$scp[142]= "JSWENERGY";
$scp[143]= "NHPC";
$scp[144]= "NMDC";
$scp[145]= "RECLTD";
$scp[146]= "CUMMINSIND";
$scp[147]= "PTC";
$scp[148]= "BALRAMCHIN";
$scp[149]= "BAJAJHIND";
$scp[150]= "RENUKA";
$scp[151]= "CHAMBLFERT";
$scp[152]= "TATACHEM";
$scp[153]= "ORCHIDCHEM";
$scp[154]= "UNIPHOS";
$scp[155]= "GUJFLUORO";
$scp[156]= "SCI";
$scp[157]= "GESHIP";
$scp[158]= "ABGSHIP";
$scp[159]= "JETAIRWAYS";
$scp[160]= "INDHOTEL";
$scp[161]= "SUNTV";
$scp[162]= "DISHTV";
$scp[163]= "ZEEL";
$scp[164]= "SUNPHARMA";
$scp[165]= "CIPLA";
$scp[166]= "RANBAXY";
$scp[167]= "DRREDDY";
$scp[168]= "FORTIS";
$scp[169]= "BIOCON";
$scp[170]= "AUROPHARMA";
$scp[171]= "PIRHEALTH";
$scp[172]= "LUPIN";
$scp[173]= "GLAXO";
$scp[174]= "DIVISLAB";
$scp[175]= "OPTOCIRCUI";
$scp[176]= "JUBLFOOD";

$scz[0] = 'ICICIBANK.NS';
$scz[1] = 'SBIN.NS';
$scz[2] = 'HDFCBANK.NS';
$scz[3] = 'KOTAKBANK.NS';
$scz[4] = 'AXISBANK.NS';
$scz[5] = 'PNB.NS';
$scz[6] = "BOB.BO";
$scz[7] = 'BANKINDIA.NS';
$scz[8] = 'YESBANK.NS';
$scz[9] = 'VIJAYABANK.NS';
$scz[10] = 'DENABANK.NS';
$scz[11] = "ALLBANKSL.BO";
$scz[12] = "KTKBANK.BO";
$scz[13] = 'DHANBANK.NS';
$scz[14] = 'DCB.NS';
$scz[15] = "ANDHRABAN.NS";
$scz[16] = 'INDIANB.NS';
$scz[17] = "UCO.BO";
$scz[18] = 'UNIONBANK.NS';
$scz[19] = "SRTRANSFI.NS";
$scz[20] = "LICHSGFIN.BO";
$scz[21] = 'IOB.NS';
$scz[22] = 'SYNDIBANK.NS';
$scz[23] = 'CANBK.NS';
$scz[24] = "FEDERALBN.NS";
$scz[25] = "HDFC.BO";
$scz[26] = 'IDFC.NS';
$scz[27] = 'IDBI.NS';
$scz[28] = 'IFCI.NS';
$scz[29] = "RELCAPITA.NS";
$scz[30] = 'INDIAINFO.NS';
$scz[31] = 'PFC.NS';
$scz[32] = "TATAMOTOR.NS";
$scz[33] = "BAJAJAUT.BO";
$scz[34] = 'MARUTI.NS';
$scz[35] = "HEROHONDA.NS";
$scz[36] = 'ASHOKLEY.BO';
$scz[37] = 'ESCORTS.NS';
$scz[38] = 'TVSMOTOR.BO';
$scz[39] = 'BHARATFORG.BO';
$scz[40] = "APOLLOTYR.NS";
$scz[41] = 'MRF.NS';
$scz[42] = 'BOSCHLTD.NS';
$scz[43] = "EXIDEIND.BO";
$scz[44] = 'DLF.NS';
$scz[45] = 'UNITECH.NS';
$scz[46] = 'HDIL.NS';
$scz[47] = 'HCC.NS';
$scz[48] = 'NCC.NS';
$scz[49] = 'IBREALEST.NS';
$scz[50] = 'GODREJIND.BO';
$scz[51] = 'SOBHA.NS';
$scz[52] = "JPASSOCIA.NS";
$scz[53] = 'APIL.NS';
$scz[54] = 'LITL.NS';
$scz[55] = 'GMRINFRA.NS';
$scz[56] = "IVRCLINFR.NS";
$scz[57] = 'RELIANCE.NS';
$scz[58] = 'ONGC.NS';
$scz[59] = 'GSPL.NS';
$scz[60] = 'PETRONET.BO';
$scz[61] = 'MRPL.NS';
$scz[62] = 'ABAN.NS';
$scz[63] = 'GAIL.NS';
$scz[64] = 'BPCL.NS';
$scz[65] = 'HINDPETRO.NS';
$scz[66] = 'OIL.NS';
$scz[67] = "HINDOILEX.NS";
$scz[68] = 'ESSAROIL.NS';
$scz[69] = 'IOC.NS';
$scz[70] = 'COALINDIA.NS';
$scz[71] = 'CAIRN.NS';
$scz[72] = 'TATASTEEL.NS';
$scz[73] = 'SAIL.NS';
$scz[74] = 'HINDALCO.NS';
$scz[75] = 'STER.NS';
$scz[76] = 'JSWSTEEL.NS';
$scz[77] = 'JINDALSTEL.NS';
$scz[78] = 'JINDALSAW.NS';
$scz[79] = 'PUNJLLOYD.NS';
$scz[80] = 'BHUSANSTL.NS';
$scz[81] = 'SESAGOA.NS';
$scz[82] = 'JSWISPAT.NS';
$scz[83] = 'WELCORP.NS';
$scz[84] = 'JSWISPAT.NS';
$scz[85] = 'GMDCLTD.NS';
$scz[86] = 'MERCATOR.NS';
$scz[87] = 'INFY.NS';
$scz[88] = 'TCS.NS';
$scz[89] = 'WIPRO.NS';
$scz[90] = 'PATNI.NS';
$scz[91] = 'HCLTECH.NS';
$scz[92] = 'TECHM.BO';
$scz[93] = 'POLARIS.NS';
$scz[94] = 'MPHASIS.NS';
$scz[95] = 'OFSS.NS';
$scz[96] = 'FINANTECH.NS';
$scz[97] = 'ROLTA.NS';
$scz[98] = 'HEXAWARE.BO';
$scz[99] = 'EDUCOMP.NS';
$scz[100] = 'COREEDUTEC.NS';
$scz[101] = 'LT.NS';
$scz[102] = 'BHEL.NS';
$scz[103] = 'ABB.NS';
$scz[104] = 'SIEMENS.BO';
$scz[105] = "CROMPGREA.NS";
$scz[106] = 'VOLTAS.NS';
$scz[107] = 'VIDEOIND.NS';
$scz[108] = 'BEL.NS';
$scz[109] = 'BEML.NS';
$scz[110] = 'ACC.BO';
$scz[111] = 'AMBUJACEM.NS';
$scz[112] = 'GRASIM.NS';
$scz[113] = 'INDIACEM.NS';
$scz[114] = "ULTRACEMC.NS";
$scz[115] = 'ASIANPAINT.NS';
$scz[116] = "BHARTIART.NS";
$scz[117] = 'RCOM.BO';
$scz[118] = 'IDEA.BO';
$scz[119] = 'ONMOBILE.NS';
$scz[120] = 'MTNL.NS';
$scz[121] = 'TTML.NS';
$scz[122] = 'TATACOMM.NS';
$scz[123] = 'ITC.NS';
$scz[124] = "HINDUNILV.NS";
$scz[125] = 'DABUR.NS';
$scz[126] = 'COLPAL.NS';
$scz[127] = "MCLEODRUS.NS";
$scz[128] = "MCDOWELL-.NS";
$scz[129] = 'BATAINDIA.NS';
$scz[130] = 'RELINFRA.NS';
$scz[131] = 'RPOWER.NS';
$scz[132] = 'TATAPOWER.NS';
$scz[133] = 'POWERGRID.NS';
$scz[134] = 'NTPC.NS';
$scz[135] = 'JPPOWER.NS';
$scz[136] = 'GVKPIL.NS';
$scz[137] = 'BGRENERGY.NS';
$scz[138] = "ADANIENTE.BO";
$scz[139] = "ADANIPOWE.NS";
$scz[140] = "BFUTILITI.NS";
$scz[141] = 'HAVELLS.NS';
$scz[142] = 'JSWENERGY.NS';
$scz[143] = 'NHPC.NS';
$scz[144] = 'NMDC.NS';
$scz[145] = 'RECLTD.NS';
$scz[146] = 'CUMMINSIND.NS';
$scz[147] = 'PTC.BO';
$scz[148] = 'BALRAMCHIN.BO';
$scz[149] = 'BAJAJHIND.NS';
$scz[150] = 'RENUKA.NS';
$scz[151] = "CHAMBAL.BO";
$scz[152] = 'TATACHEM.NS';
$scz[153] = 'ORCHIDCHEM.BO';
$scz[154] = 'UNIPHOS.BO';
$scz[155] = 'GUJFLUORO.NS';
$scz[156] = 'SCI.NS';
$scz[157] = 'GESHIP.NS';
$scz[158] = 'ABGSHIP.NS';
$scz[159] = "JETAIRWAY.NS";
$scz[160] = "INDHOTELS.BO";
$scz[161] = 'SUNTV.NS';
$scz[162] = 'DISHTV.NS';
$scz[163] = 'ZEEL.NS';
$scz[164] = 'SUNPHARMA.NS';
$scz[165] = 'CIPLA.BO';
$scz[166] = 'RANBAXY.NS';
$scz[167] = 'DRREDDY.NS';
$scz[168] = 'FORTIS.NS';
$scz[169] = 'BIOCON.NS';
$scz[170] = "AUROPHARM.NS";
$scz[171] = 'PIRHEALTH.NS';
$scz[172] = 'LUPIN.NS';
$scz[173] = 'GLAXO.NS';
$scz[174] = 'DIVISLAB.NS';
$scz[175] = "OPTOCIRCU.NS";
$scz[176] = 'JUBLFOOD.NS';

for ($i = 0; $i <= 176; $i++) 
{ if ( $scp[$i] == $field ) { $stik = $scz[$i]; } }

include ('xmltoarray.php');


$url = "http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.quotes%20where%20symbol%20in%20(%22".$stik."%22)&env=store://datatables.org/alltableswithkeys";


$contents = file_get_contents($url);
$result = xml2array($contents);






echo "&thigh=".$result ['query']['results']['quote']['DaysHigh'];
echo "&tlow=".$result ['query']['results']['quote']['DaysLow'];





?>


