/*Owner & Copyrights: Vance King Saxbe. A.*//*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/
function getTime() 
    { 
    $a = explode (' ',microtime()); 
    return(double) $a[0] + $a[1]; 
    } 
$Start = getTime();

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
$fil = "TC.csv";
$cont = file_get_contents('fuck.txt');
$stop = ".";
for ( $i = 0; $i <= 176; $i++ ) {

$myFile = $scp[$i].$stop."php";

unlink($myFile);

$xFile = $scp[$i].$stop."txt";

unlink($xFile);

$row = 0;
$fille = fopen($fil, "r");
while (($data = fgetcsv($fille, 8000, ",")) !== FALSE) {

if ( ($data[0] == $scp[$i]) && ($data[1] == "EQ")) 
{  
$avgp = $data[9]/$data[8]; 
$avgp = number_format($avgp, 2, '.', '');
$high = $data[3];
$low = $data[4];
}
   
    $row++; 
}
fclose($fille);







$conti = str_replace("ICICIBANK",$scp[$i],$cont);
$contii = str_replace("icicibank",$scp[$i],$conti);
$contiii = str_replace("average",$avgp,$contii);
$contiiii = str_replace("previoushigh",$high,$contiii);
$contiiiii = str_replace("previouslow",$low,$contiiii);


$filename= $scp[$i].$stop."php"; //The name of your .txt file
$file = fopen($filename, "a+" );









fwrite( $file, $contiiiii."\r\n" ); //Write the data input box to the .txt file.

fclose( $file ); //Close the file from further editing

}

include("mkill.php");
$End = getTime(); 

echo "&T= ".number_format(($End - $Start),2)." secs";
echo "&result=Updated in....";
?>/*email to provide support at vancekingsaxbe@powerdominionenterprise.com, businessaffairs@powerdominionenterprise.com, For donations please write to fundraising@powerdominionenterprise.com*/