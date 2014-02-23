/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/
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

echo '<table cellspacing="0" cellpadding="0" border="0"
 bgcolor="black" id="shell" height="13" width="150">
<tr height="13"><td colspan="20" bgcolor="white">
<table title="Banner" id="banner" border="0">

<tr><td>
<img src="http://www.google.com/finance/getchart?q=NIFTY&x=NSE&p=5d&i=86" alt="NIFTY" />
</td>
<td>
<img src="http://www.google.com/finance/getchart?q=NIFTYJR&x=NSE&p=5d&i=86" alt="NIFTY" />
</td>
<td>
<img src="http://www.google.com/finance/getchart?q=BSE-500&x=INDEXBOM&p=5d&i=86" alt="NIFTY" />
</td>
<td>
<img src="http://www.google.com/finance/getchart?q=BSE-SMLCAP&x=INDEXBOM&p=5d&i=86" alt="NIFTY" />
</tr></td>
<tr><td>
<img src="http://www.google.com/finance/getchart?q=BSE-MIDCAP&x=INDEXBOM&p=5d&i=86" alt="NIFTY" />
</td>
<td>
<img src="http://www.google.com/finance/getchart?q=BSE-200&x=INDEXBOM&p=5d&i=86" alt="NIFTY" />
</td>
<td>
<img src="http://www.google.com/finance/getchart?q=BSE-100&x=INDEXBOM&p=5d&i=86" alt="NIFTY" />
</td>
<td>
<img src="http://www.google.com/finance/getchart?q=BSE-BANK&x=INDEXBOM&p=5d&i=86" alt="NIFTY" />
</tr></td>
<tr><td>
<img src="http://www.google.com/finance/getchart?q=BSE-OILGAS&x=INDEXBOM&p=5d&i=86" alt="NIFTY" />
</td>
<td>
<img src="http://www.google.com/finance/getchart?q=BSE-CG&x=INDEXBOM&p=5d&i=86" alt="NIFTY" />
</td>
<td>
<img src="http://www.google.com/finance/getchart?q=BSE-METAL&x=INDEXBOM&p=5d&i=86" alt="NIFTY" />
</td>
<td>
<img src="http://www.google.com/finance/getchart?q=BSE-REALTY&x=INDEXBOM&p=5d&i=86" alt="NIFTY" />
</tr></td>
<tr><td>
<img src="http://www.google.com/finance/getchart?q=BSE-POWER&x=INDEXBOM&p=5d&i=86" alt="NIFTY" />
</td>
<td>
<img src="http://www.google.com/finance/getchart?q=BSE-IT&x=INDEXBOM&p=5d&i=86" alt="NIFTY" />
</td>
<td>
<img src="http://www.google.com/finance/getchart?q=BSE-FMCG&x=INDEXBOM&p=5d&i=86" alt="NIFTY" />
</td>
<td>
<img src="http://www.google.com/finance/getchart?q=BSE-CD&x=INDEXBOM&p=5d&i=86" alt="NIFTY" />
</tr></td>
<tr>';
for ( $i = 0; $i <= 176; $i++ ){ if ( $i%4==0 ) { echo "</tr><tr>"; };

if ( file_exists($scp[$i]."LAST.txt") ) {
$ui = file_get_contents($scp[$i]."LAST.txt"); }
else { $ui = "No Stream";}
echo '<TD WIDTH="480" HEIGHT="300" BACKGROUND="http://www.google.com/finance/getchart?q='.$scp[$i].'&x=NSE&p=5d&i=86" VALIGN="bottom"><FONT SIZE="+2" COLOR="blue">'.$scp[$i].':'.$ui.'</FONT></TD>';

}

echo '</table>';
?>