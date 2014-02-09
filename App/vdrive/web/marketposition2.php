<?php
function getTime() 
    { 
    $a = explode (' ',microtime()); 
    return(double) $a[0] + $a[1]; 
    } 
$Start = getTime();
  
$quote = file_get_contents('http://finance.google.com/finance/info?client=ig&q=NSE:ICICIBANK,NSE:SBIN,NSE:HDFCBANK,NSE:KOTAKBANK,NSE:AXISBANK,NSE:PNB,NSE:BANKBARODA,NSE:BANKINDIA,NSE:YESBANK,NSE:VIJAYABANK,NSE:DENABANK,NSE:ALBK,NSE:KTKBANK,NSE:DHANBANK,NSE:DCB,NSE:ANDHRABANK,NSE:INDIANB,NSE:UCOBANK,NSE:UNIONBANK,NSE:SRTRANSFIN,NSE:LICHSGFIN,NSE:IOB,NSE:SYNDIBANK,NSE:CANBK,NSE:FEDERALBNK,NSE:HDFC,NSE:IDFC,NSE:IDBI,NSE:IFCI,NSE:RELCAPITAL,NSE:INDIAINFO,NSE:PFC,NSE:TATAMOTORS,NSE:BAJAJ-AUTO,NSE:MARUTI,NSE:HEROMOTOCO,NSE:ASHOKLEY,NSE:ESCORTS,NSE:TVSMOTOR,NSE:BHARATFORG,NSE:APOLLOTYRE,NSE:MRF,NSE:BOSCHLTD,NSE:EXIDEIND,NSE:DLF,NSE:UNITECH,NSE:HDIL,NSE:HCC,NSE:NCC,NSE:IBREALEST,NSE:GODREJIND,NSE:SOBHA,NSE:JPASSOCIAT,NSE:APIL,NSE:LITL,NSE:GMRINFRA,NSE:IVRCLINFRA,NSE:RELIANCE,NSE:ONGC,NSE:GSPL,NSE:PETRONET,NSE:MRPL,NSE:ABAN,NSE:GAIL,NSE:BPCL,NSE:HINDPETRO,NSE:OIL,NSE:HINDOILEXP,NSE:ESSAROIL,NSE:IOC,NSE:COALINDIA,NSE:CAIRN,NSE:TATASTEEL,NSE:SAIL,NSE:HINDALCO,NSE:STER,NSE:JSWSTEEL,NSE:JINDALSTEL,NSE:JINDALSAW,NSE:PUNJLLOYD,NSE:BHUSANSTL,NSE:SESAGOA,NSE:WELCORP,NSE:GMDCLTD,NSE:INFY,NSE:INFY,NSE:TCS,NSE:WIPRO,NSE:PATNI,NSE:HCLTECH,NSE:TECHM,NSE:POLARIS,NSE:MPHASIS,NSE:OFSS,NSE:ROLTA,NSE:HEXAWARE,NSE:EDUCOMP');
  
  $parts = explode('"', $quote);

$a = 7;
$b = 15;

for ($i = 0; $i <=96; $i++ ) {

$datar['name'][$i] = $parts[$a];
$datar['ltp'][$i] = str_replace(",","",$parts[$b]);
$a = $a + 44;
$b = $b + 44;
}

//for ($i = 0; $i <=96; $i++ ) {
//echo $datar[0][$i]."is".$datar[1][$i];

//}
//echo $datar;


function sortDataSet(&$dataSet) { 
    $args = func_get_args(); 
    $callString = 'array_multisort('; 
    $usedColumns = array(); 
    for($i = 1, $count = count($args); $i < $count; ++$i) { 
        switch(gettype($args[$i])) { 
            case 'string': 
                $callString .= '$dataSet[\''.$args[$i].'\'], '; 
                array_push($usedColumns, $args[$i]); 
                break; 
            case 'integer': 
                $callString .= $args[$i].', '; 
                break; 
            default: 
                throw new Exception('expected string or integer, given '.gettype($args[$i])); 
        } 
    } 
    foreach($dataSet as $column => $array) { 
        if(in_array($column, $usedColumns)) continue; 
        $callString .= '$dataSet[\''.$column.'\'], '; 
    } 
    eval(substr($callString, 0, -2).');'); 
} 

sortDataSet($datar, 'name', SORT_ASC, SORT_STRING, 'ltp', SORT_ASC, SORT_STRING); 
echo '<pre>'; 
print_r($datar); 
echo '</pre>'; 

$End = getTime(); 

echo "&T= ".number_format(($End - $Start),2)." secs"; 
?>
