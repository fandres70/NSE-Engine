/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

function getTime() 
    { 
    $a = explode (' ',microtime()); 
    return(double) $a[0] + $a[1]; 
    } 
$Start = getTime();

$scz[0] = 'ICICIBANK.NS';
$scz[1] = 'SBIN.NS';
$scz[2] = 'HDFCBANK.NS';
$scz[3] = 'KOTAKBANK.NS';
$scz[4] = 'AXISBANK.NS';
$scz[5] = 'PNB.NS';
$scz[6] = "BOB.BO";
$scz[7] = 'BANKINDIA.NS';
$scz[8] = 'YESBANK.NS';
$scz[9] = 'VIJAYABAN.NS';
$scz[10] = 'DENABANK.NS';
$scz[11] = "ALLBANKSL.BO";
$scz[12] = "KTKBANK.BO";
$scz[13] = 'DHANBANK.BO';
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
$scz[77] = 'JINDALSTE.NS';
$scz[78] = 'JINDALSAW.NS';
$scz[79] = 'PUNJLLOYD.NS';
$scz[80] = 'BHUSANSTL.NS';
$scz[81] = 'SESAGOA.NS';

$scz[83] = 'WELCORP.NS';

$scz[85] = 'GMDCLTD.NS';

$scz[87] = 'INFY.NS';
$scz[88] = 'TCS.NS';
$scz[89] = 'WIPRO.NS';
$scz[90] = 'PATNI.NS';
$scz[91] = 'HCLTECH.NS';
$scz[92] = 'TECHM.BO';
$scz[93] = 'POLARIS.NS';
$scz[94] = 'MPHASIS.NS';
$scz[95] = 'OFSS.NS';

$scz[97] = 'ROLTA.NS';
$scz[98] = 'HEXAWARE.BO';
$scz[99] = 'EDUCOMP.NS';

$scz[101] = 'LT.NS';
$scz[102] = 'BHEL.NS';
$scz[103] = 'ABB.NS';
$scz[104] = 'SIEMENS.BO';
$scz[105] = "CROMPGREA.NS";
$scz[106] = 'VOLTAS.NS';
$scz[107] = 'VIDEOIND.NS';

$scz[109] = 'BEML.NS';
$scz[110] = 'ACC.BO';

$scz[112] = 'GRASIM.NS';
$scz[113] = 'INDIACEM.NS';
$scz[114] = "ULTRACEMC.NS";

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
$scz[177] = "BSE-BANK.BO";
$scz[178] = "BSE-AUTO.BO";
$scz[179] = "BSE-OILGAS.BO";
$scz[180] = "BSE-MIDCAP.BO";
$scz[181] = "BSE-SMLCAP.BO";
$scz[182] = "BSE-METAL.BO";
$scz[183] = "BSE-FMCG.BO";
$scz[184] = "BSE-REALTY.BO";
$scz[185] = "BSE-IT.BO";
$scz[186] = "BSE-TECK.BO";
$scz[187] = "BSE-CG.BO";
$scz[188] = "BSE-POWER.BO";
$scz[189] = "BSE-HEALTH.BO";
$scz[190] = "BSE-CD.BO";
$scz[191] = "BSE-HC.BO";
$scz[192] = "BSE-PSU.BO";
$scz[193] = "BSE-100.BO";
$scz[194] = "BSE-200.BO";
$scz[195] = "BSE-500.BO";
$scz[196] = "^NSMIDCP";
$scz[197] = "^NSEI";



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

$sc[83] = 'WELCORP';

$sc[85] = 'GMDCLTD';

$sc[87] = 'INFY';
$sc[88] = 'TCS';
$sc[89] = 'WIPRO';
$sc[90] = 'PATNI';
$sc[91] = 'HCLTECH';
$sc[92] = 'TECHM';
$sc[93] = 'POLARIS';
$sc[94] = 'MPHASIS';
$sc[95] = 'OFSS';

$sc[97] = 'ROLTA';
$sc[98] = 'HEXAWARE';
$sc[99] = 'EDUCOMP';

$sc[101] = 'LT';
$sc[102] = 'BHEL';
$sc[103] = 'ABB';
$sc[104] = 'SIEMENS';
$sc[105] = 'CROMPGREAV';
$sc[106] = 'VOLTAS';
$sc[107] = 'VIDEOIND';

$sc[109] = 'BEML';
$sc[110] = 'ACC';

$sc[112] = 'GRASIM';
$sc[113] = 'INDIACEM';
$sc[114] = 'ULTRACEMCO';

$sc[116] = 'BHARTIARTL';
$sc[117] = 'RCOM';
$sc[118] = 'IDEA';
$sc[119] = 'ONMOBILE';
$sc[120] = 'MTNL';
$sc[121] = 'TTML';
$sc[122] = 'TATACOMM';
$sc[123] = 'ITC';
$sc[124] = 'HINDUNILVR';
$sc[125] = 'DABUR';
$sc[126] = 'COLPAL';
$sc[127] = 'MCLEODRUSS';
$sc[128] = 'MCDOWELL-N';
$sc[129] = 'BATAINDIA';
$sc[130] = 'RELINFRA';
$sc[131] = 'RPOWER';
$sc[132] = 'TATAPOWER';
$sc[133] = 'POWERGRID';
$sc[134] = 'NTPC';
$sc[135] = 'JPPOWER';
$sc[136] = 'GVKPIL';
$sc[137] = 'BGRENERGY';
$sc[138] = 'ADANIENT';
$sc[139] = 'ADANIPOWER';
$sc[140] = 'BFUTILITIE';
$sc[141] = 'HAVELLS';
$sc[142] = 'JSWENERGY';
$sc[143] = 'NHPC';
$sc[144] = 'NMDC';
$sc[145] = 'RECLTD';

$sc[147] = 'PTC';
$sc[148] = 'BALRAMCHIN';
$sc[149] = 'BAJAJHIND';
$sc[150] = 'RENUKA';
$sc[151] = 'CHAMBLFERT';
$sc[152] = 'TATACHEM';
$sc[153] = 'ORCHIDCHEM';
$sc[154] = 'UNIPHOS';
$sc[155] = 'GUJFLUORO';
$sc[156] = 'SCI';
$sc[157] = 'GESHIP';
$sc[158] = 'ABGSHIP';
$sc[159] = 'JETAIRWAYS';
$sc[160] = 'INDHOTEL';
$sc[161] = 'SUNTV';
$sc[162] = 'DISHTV';
$sc[163] = 'ZEEL';
$sc[164] = 'SUNPHARMA';
$sc[165] = 'CIPLA';
$sc[166] = 'RANBAXY';
$sc[167] = 'DRREDDY';
$sc[168] = 'FORTIS';
$sc[169] = 'BIOCON';
$sc[170] = 'AUROPHARMA';
$sc[171] = 'PIRHEALTH';
$sc[172] = 'LUPIN';
$sc[173] = 'GLAXO';
$sc[174] = 'DIVISLAB';
$sc[175] = 'OPTOCIRCUI';
$sc[176] = 'JUBLFOOD';
$sc[177] = "BSEBANK";
$sc[178] = "BSEAUTO";
$sc[179] = "BSEOILGAS";
$sc[180] = "BSEMIDCAP";
$sc[181] = "BSESMLCAP";
$sc[182] = "BSEMETAL";
$sc[183] = "BSEFMCG";
$sc[184] = "BSEREALTY";
$sc[185] = "BSEIT";
$sc[186] = "BSETECK";
$sc[187] = "BSECG";
$sc[188] = "BSEPOWER";
$sc[189] = "BSEHEALTH";
$sc[190] = "BSECD";
$sc[191] = "BSEHC";
$sc[192] = "BSEPSU";
$sc[193] = "BSE100";
$sc[194] = "BSE200";
$sc[195] = "BSE500";
$sc[196] = "JUNIOR";
$sc[197] = "NIFTY";

$day = date("d");

$month = date("m");
$year = date("Y");

for ( $i = 0; $i <= 197; $i++) { 
$url = "http://ichart.finance.yahoo.com/table.csv?s=".$scz[$i]."&d=".$month."&e=".$day."&f=".$year."&g=d&a=".$month."&b=".$day."&c=2000&ignore=.csv";
$file = $sc[$i].".csv"; echo $sc[$i]."Downloading....";
copy ( $url, $file );
}
$End = getTime(); 

echo "&T= ".number_format(($End - $Start),2)." secs";

?>