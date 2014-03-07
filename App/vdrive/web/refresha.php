/*Owner & Copyrights: Vance King Saxbe. A.*//*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/
function getTime() 
    { 
    $a = explode (' ',microtime()); 
    return(double) $a[0] + $a[1]; 
    } 

$mk = 0;
  for ( $ft = 0; $ft <= 2; $ft++) {$quote = "";$Start = getTime();
$quote = file_get_contents('http://finance.google.com/finance/info?client=ig&q=NSE:ICICIBANK,NSE:SBIN,NSE:HDFCBANK,NSE:KOTAKBANK,NSE:AXISBANK,NSE:PNB,NSE:BANKBARODA,NSE:BANKINDIA,NSE:YESBANK,NSE:VIJAYABANK,NSE:DENABANK,NSE:ALBK,NSE:KTKBANK,NSE:DHANBANK,NSE:DCB,NSE:ANDHRABANK,NSE:INDIANB,NSE:UCOBANK,NSE:UNIONBANK,NSE:SRTRANSFIN,NSE:LICHSGFIN,NSE:IOB,NSE:SYNDIBANK,NSE:CANBK,NSE:FEDERALBNK,NSE:HDFC,NSE:IDFC,NSE:IDBI,NSE:IFCI,NSE:RELCAPITAL,NSE:INDIAINFO,NSE:PFC,NSE:TATAMOTORS,NSE:BAJAJ-AUTO,NSE:MARUTI,NSE:HEROMOTOCO,NSE:ASHOKLEY,NSE:ESCORTS,NSE:TVSMOTOR,NSE:BHARATFORG,NSE:APOLLOTYRE,NSE:MRF,NSE:BOSCHLTD,NSE:EXIDEIND,NSE:DLF,NSE:UNITECH,NSE:HDIL,NSE:HCC,NSE:NCC,NSE:IBREALEST,NSE:GODREJIND,NSE:SOBHA,NSE:JPASSOCIAT,NSE:APIL,NSE:LITL,NSE:GMRINFRA,NSE:IVRCLINFRA,NSE:RELIANCE,NSE:ONGC,NSE:GSPL,NSE:PETRONET,NSE:MRPL,NSE:ABAN,NSE:GAIL,NSE:BPCL,NSE:HINDPETRO,NSE:OIL,NSE:HINDOILEXP,NSE:ESSAROIL,NSE:IOC,NSE:COALINDIA,NSE:CAIRN,NSE:TATASTEEL,NSE:SAIL,NSE:HINDALCO,NSE:STER,NSE:JSWSTEEL,NSE:JINDALSTEL,NSE:JINDALSAW,NSE:PUNJLLOYD,NSE:BHUSANSTL,NSE:SESAGOA,NSE:WELCORP,NSE:GMDCLTD,NSE:INFY,NSE:INFY,NSE:TCS,NSE:WIPRO,NSE:PATNI,NSE:HCLTECH,NSE:TECHM,NSE:POLARIS,NSE:MPHASIS,NSE:OFSS,NSE:ROLTA,NSE:HEXAWARE,NSE:EDUCOMP');
  $quote = $quote.file_get_contents('http://finance.google.com/finance/info?client=ig&q=NSE:LT,NSE:BHEL,NSE:ABB,NSE:SIEMENS,NSE:CROMPGREAV,NSE:VOLTAS,NSE:VIDEOIND,NSE:BEML,NSE:ACC,NSE:GRASIM,NSE:INDIACEM,NSE:ULTRACEMCO,NSE:BHARTIARTL,NSE:RCOM,NSE:IDEA,NSE:ONMOBILE,NSE:MTNL,NSE:TTML,NSE:TATACOMM,NSE:ITC,NSE:HINDUNILVR,NSE:DABUR,NSE:COLPAL,NSE:MCLEODRUSS,NSE:MCDOWELL-N,NSE:BATAINDIA,NSE:RELINFRA,NSE:RPOWER,NSE:TATAPOWER,NSE:POWERGRID,NSE:NTPC,NSE:JPPOWER,NSE:GVKPIL,NSE:BGRENERGY,NSE:ADANIENT,NSE:ADANIPOWER,NSE:BFUTILITIE,NSE:HAVELLS,NSE:JSWENERGY,NSE:NHPC,NSE:NMDC,NSE:RECLTD,NSE:PTC,NSE:BALRAMCHIN,NSE:BAJAJHIND,NSE:RENUKA,NSE:CHAMBLFERT,NSE:TATACHEM,NSE:ORCHIDCHEM,NSE:UNIPHOS,NSE:GUJFLUORO,NSE:SCI,NSE:GESHIP,NSE:ABGSHIP,NSE:JETAIRWAYS,NSE:INDHOTEL,NSE:SUNTV,NSE:DISHTV,NSE:ZEEL,NSE:SUNPHARMA,NSE:CIPLA,NSE:RANBAXY,NSE:DRREDDY,NSE:FORTIS,NSE:BIOCON,NSE:AUROPHARMA,NSE:PIRHEALTH,NSE:LUPIN,NSE:GLAXO,NSE:DIVISLAB,NSE:OPTOCIRCUI,NSE:JUBLFOOD,INDEXBOM:BSE-BANK,INDEXBOM:BSE-OILGAS,INDEXBOM:BSE-IT,INDEXBOM:BSE-CG,INDEXBOM:BSE-FMCG,INDEXBOM:BSE-METAL,INDEXBOM:BSE-AUTO,INDEXBOM:BSE-REALTY,INDEXBOM:BSE-POWER,INDEXBOM:BSE-HC,INDEXBOM:BSE-TECK,NSE:NIFTY,INDEXBOM:SENSEX,NSE:BANKNIFTY,NSE:CNXMIDCAP,NSE:NIFTYJR,NSE:CNXIT,NSE:CNX500,NSE:CNX100,INDEXBOM:BSE-100,INDEXBOM:BSE-200,INDEXBOM:BSE-500,INDEXBOM:BSE-MIDCAP,INDEXBOM:BSE-SMLCAP,INDEXBOM:BSE-CD,INDEXBOM:BSE-PSU');
  
  $parts = explode('"', $quote);

$a = 7;
$b = 15;

for ($i = 0; $i <=194; $i++ ) {

$name = $parts[$a];
$ltp = str_replace(",","",$parts[$b]);
$a = $a + 44;
$b = $b + 44;
$datafile = $name."LAST.txt";
$file = fopen($datafile, "w" );
fwrite( $file, $ltp ); 
fclose( $file );

}
/* 
 $parts2 = explode('"', $quote2);

$a = 7;
$b = 15;

for ($i = 97; $i <=194; $i++ ) {

$name = $parts[$a];
$ltp = str_replace(",","",$parts[$b]);
$a = $a + 44;
$b = $b + 44;
$datafile = $name."LAST.txt";
$file = fopen($datafile, "w" );
fwrite( $file, $ltp ); 
fclose( $file );

}
*/
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