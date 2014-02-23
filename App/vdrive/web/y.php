/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

function getTime() 
    { 
    $a = explode (' ',microtime()); 
    return(double) $a[0] + $a[1]; 
    } 
$Start = getTime();

$sc[0] = "ICICIBANK";
$sc[1] = "SBIN";
$sc[2] = "HDFCBANK";
$sc[3] = "KOTAKBANK";
$sc[4] = "AXISBANK";
$sc[5] = "PNB";
$sc[6] = "BANKBARODA";
$sc[7] = "BANKINDIA";
$sc[8] = "YESBANK";
$sc[9] = "VIJAYABANK";
$sc[10] = "DENABANK";
$sc[11] = "ALBK";
$sc[12] = "KTKBANK";
$sc[13] = "DHANBANK";
$sc[14] = "DCB";
$sc[15] = "ANDHRABANK";
$sc[16] = "INDIANB";
$sc[17] = "UCOBANK";
$sc[18] = "UNIONBANK";
$sc[19] = "SRTRANSFIN";
$sc[20] = "LICHSGFIN";
$sc[21] = "IOB";
$sc[22] = "SYNDIBANK";
$sc[23] = "CANBK";
$sc[24] = "FEDERALBNK";
$sc[25] = "HDFC";
$sc[26] = "IDFC";
$sc[27] = "IDBI";
$sc[28] = "IFCI";
$sc[29] = "RELCAPITAL";
$sc[30] = "INDIAINFO";
$sc[31] = "PFC";
$sc[32] = "TATAMOTORS";
$sc[33] = "BAJAJ-AUTO";
$sc[34] = "MARUTI";
$sc[35] = "HEROMOTOCO";
$sc[36] = "ASHOKLEY";
$sc[37] = "ESCORTS";
$sc[38] = "TVSMOTOR";
$sc[39] = "BHARATFORG";
$sc[40] = "APOLLOTYRE";
$sc[41] = "MRF";
$sc[42] = "BOSCHLTD";
$sc[43] = "EXIDEIND";
$sc[44] = "DLF";
$sc[45] = "UNITECH";
$sc[46] = "HDIL";
$sc[47] = "HCC";
$sc[48] = "NCC";
$sc[49] = "IBREALEST";
$sc[50] = "GODREJIND";
$sc[51] = "SOBHA";
$sc[52] = "JPASSOCIAT";
$sc[53] = "APIL";
$sc[54] = "LITL";
$sc[55] = "GMRINFRA";
$sc[56] = "IVRCLINFRA";
$sc[57] = "RELIANCE";
$sc[58] = "ONGC";
$sc[59] = "GSPL";
$sc[60] = "PETRONET";
$sc[61] = "MRPL";
$sc[62] = "ABAN";
$sc[63] = "GAIL";
$sc[64] = "BPCL";
$sc[65] = "HINDPETRO";
$sc[66] = "OIL";
$sc[67] = "HINDOILEXP";
$sc[68] = "ESSAROIL";
$sc[69] = "IOC";
$sc[70] = "COALINDIA";
$sc[71] = "CAIRN";
$sc[72] = "TATASTEEL";
$sc[73] = "SAIL";
$sc[74] = "HINDALCO";
$sc[75] = "STER";
$sc[76] = "JSWSTEEL";
$sc[77] = "JINDALSTEL";
$sc[78] = "JINDALSAW";
$sc[79] = "PUNJLLOYD";
$sc[80] = "BHUSANSTL";
$sc[81] = "SESAGOA";
$sc[82] = "WELCORP";
$sc[83] = "GMDCLTD";
$sc[84] = "INFY";
$sc[85] = "INFY";
$sc[86] = "TCS";
$sc[87] = "WIPRO";
$sc[88] = "PATNI";
$sc[89] = "HCLTECH";
$sc[90] = "TECHM";
$sc[91] = "POLARIS";
$sc[92] = "MPHASIS";
$sc[93] = "OFSS";
$sc[94] = "ROLTA";
$sc[95] = "HEXAWARE";
$sc[96] = "EDUCOMP";
$sc[97] = "LT";
$sc[98] = "BHEL";
$sc[99] = "ABB";
$sc[100] = "SIEMENS";
$sc[101] = "CROMPGREAV";
$sc[102] = "VOLTAS";
$sc[103] = "VIDEOIND";
$sc[104] = "BEML";
$sc[105] = "ACC";
$sc[106] = "GRASIM";
$sc[107] = "INDIACEM";
$sc[108] = "ULTRACEMCO";
$sc[109] = "BHARTIARTL";
$sc[110] = "RCOM";
$sc[111] = "IDEA";
$sc[112] = "ONMOBILE";
$sc[113] = "MTNL";
$sc[114] = "TTML";
$sc[115] = "TATACOMM";
$sc[116] = "ITC";
$sc[117] = "HINDUNILVR";
$sc[118] = "DABUR";
$sc[119] = "COLPAL";
$sc[120] = "MCLEODRUSS";
$sc[121] = "MCDOWELL-N";
$sc[122] = "BATAINDIA";
$sc[123] = "RELINFRA";
$sc[124] = "RPOWER";
$sc[125] = "TATAPOWER";
$sc[126] = "POWERGRID";
$sc[127] = "NTPC";
$sc[128] = "JPPOWER";
$sc[129] = "GVKPIL";
$sc[130] = "BGRENERGY";
$sc[131] = "ADANIENT";
$sc[132] = "ADANIPOWER";
$sc[133] = "BFUTILITIE";
$sc[134] = "HAVELLS";
$sc[135] = "JSWENERGY";
$sc[136] = "NHPC";
$sc[137] = "NMDC";
$sc[138] = "RECLTD";
$sc[139] = "PTC";
$sc[140] = "BALRAMCHIN";
$sc[141] = "BAJAJHIND";
$sc[142] = "RENUKA";
$sc[143] = "CHAMBLFERT";
$sc[144] = "TATACHEM";
$sc[145] = "ORCHIDCHEM";
$sc[146] = "UNIPHOS";
$sc[147] = "GUJFLUORO";
$sc[148] = "SCI";
$sc[149] = "GESHIP";
$sc[150] = "ABGSHIP";
$sc[151] = "JETAIRWAYS";
$sc[152] = "INDHOTEL";
$sc[153] = "SUNTV";
$sc[154] = "DISHTV";
$sc[155] = "ZEEL";
$sc[156] = "SUNPHARMA";
$sc[157] = "CIPLA";
$sc[158] = "RANBAXY";
$sc[159] = "DRREDDY";
$sc[160] = "FORTIS";
$sc[161] = "BIOCON";
$sc[162] = "AUROPHARMA";
$sc[163] = "PIRHEALTH";
$sc[164] = "LUPIN";
$sc[165] = "GLAXO";
$sc[166] = "DIVISLAB";
$sc[167] = "OPTOCIRCUI";
$sc[168] = "JUBLFOOD";

$h = 0;
$t = 0;
$f = 0;
for ($i = 0; $i <=168; $i++ ) {

$name[$i] = $sc[$i];
$uu = $sc[$i]."LAST.txt";
$un = $sc[$i]."TEMP.txt";
$ltp[$i] = file_get_contents($uu);
$prev[$i] = file_get_contents($un);
if( $prev[$i] > 0 ) {$jk = (($ltp[$i] - $prev[$i])/$prev[$i]);
if( $jk >0 ) { $h++;}
if( $jk <0 ) { $t++;}
if( $jk == 0 ) { $f++;}
}
}
echo "&h=".$h;
echo "&t=".$h;
echo "&f=".$f;
/*

echo "<table border=\"1\" align=\"centre\">";



//$h = number_format($h, 2, '.', '');
echo "<tr><td>";
echo $h."|";
//$t = number_format($t, 2, '.', '');
echo $t;
echo "</td></tr>";


echo "</table>";

*/


$End = getTime(); 

//echo "&T= ".number_format(($End - $Start),2)." secs"; 
?>
