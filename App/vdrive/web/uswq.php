/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/
$sn[0] = "weather=nagercoil";
$sn[1] = "&weather=trivandrum";
$sn[2] = "&weather=tirnelveli";
$sn[3] = "&weather=kanyakumari";
$sn[4] = "&weather=tuticorin";
$sn[5] = "&weather=coimbatore";
$sn[6] = "&weather=madurai";
$sn[7] = "&weather=kochi";
$sn[8] = "&weather=calicut";
$sn[9] = "&weather=mumbai";
$sn[10] = "&weather=bangalore";
$sn[11] = "&weather=chennai";
$sn[12] = "&weather=colombo, Sri lanka";
$sn[13] = "&weather=maldives";
$sn[14] = "&weather=port blair";
$sn[15] = "&weather=punalur";
$sn[16] = "&weather=gurgaon";

 include ('xmltoarray.php');
$url = "http://www.google.com/ig/api?";
for($r = 0; $r <= 16; $r++) {

  $url = $url.$sn[$r];
}


//echo $url;
//$url = "http://www.google.com/ig/api?weather=tirunelveli&weather=nagercoil&weather=trivandrum";



$contents = file_get_contents($url);
$result = xml2array($contents);

print_r($result);

  for($r = 0; $r <= 16; $r++) {

  

echo $result ['xml_api_reply']['weather'][0]['forecast_information']['city_attr']['data']."<br/>";
echo $result ['xml_api_reply']['weather'][0]['current_conditions']['condition_attr']['data']."<br/>";
echo $result ['xml_api_reply']['weather'][0]['current_conditions']['temp_f_attr']['data']."<br/>";

$hum = explode(" ",$result ['xml_api_reply']['weather'][0]['current_conditions']['humidity_attr']['data']);
$wind = explode(" ",$result ['xml_api_reply']['weather'][0]['current_conditions']['wind_condition_attr']['data']);

echo $hum[1]."<br/>";
echo $wind[1].":".$wind[3]."<br/>";
}

?>

