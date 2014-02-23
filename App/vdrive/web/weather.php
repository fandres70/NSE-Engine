/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/
$sn[0] = "weather=Abhayapuri,Assam";
$sn[1] = "&weather=Achabbal,Jammu and Kashmir";
$sn[2] = "&weather=Achalpur,Maharashtra";
$sn[3] = "&weather=Achhnera,Uttar Pradesh";
$sn[4] = "&weather=Adari,Uttar Pradesh";
$sn[5] = "&weather=Adalaj,Gujrat";
$sn[6] = "&weather=Adilabad,Andhra Pradesh";
$sn[7] = "&weather=Adityana,Gujrat";
$sn[8] = "&weather=pereyaapatna,Karnataka";
$sn[9] = "&weather=Adoni,Andhra Pradesh";
$sn[10] = "&weather=Adoor,Kerala";
$sn[11] = "&weather=Adyar,Karnataka";
$sn[12] = "&weather=Adra,West Bengal";
$sn[13] = "&weather=Afzalpura,Karnataka";
$sn[14] = "&weather=Agartala,Tripura";
$sn[15] = "&weather=Agra,Uttar Pradesh";
$sn[16] = "&weather=Ahiwara,Chhattisgarh";
$sn[17] = "&weather=Ahmedabad,Gujarat";
$sn[18] = "&weather=Ahmedgarh,Punjab";
$sn[19] = "&weather=Ahmednagar,Maharashtra";
$sn[20] = "&weather=Ahmedpur,Maharashtra";
$sn[21] = "&weather=Aizawl,Mizoram";
$sn[22] = "&weather=Ajmer,Rajasthan";
$sn[23] = "&weather=Ajra,Maharashtra";
$sn[24] = "&weather=Akaltara,Chhattisgarh";
$sn[25] = "&weather=Akathiyoor,Kerala";
$sn[26] = "&weather=Akhnoor,Jammu and Kashmir";
$sn[27] = "&weather=Akkalkot,Maharashtra";
$sn[28] = "&weather=Akola,Maharashtra";
$sn[29] = "&weather=Akot,Maharashtra";
$sn[30] = "&weather=Alandha,Karnataka";
$sn[31] = "&weather=Alandi,Maharashtra";
$sn[32] = "&weather=Alang,Gujrat";
$sn[33] = "&weather=Alappuzha,Kerala";
$sn[34] = "&weather=Aldona,Goa";
$sn[35] = "&weather=Alibag,Maharashtra";
$sn[36] = "&weather=Aligarh,Uttar Pradesh";
$sn[37] = "&weather=Alipurduar,West Bengal";
$sn[38] = "&weather=Allahabad,Uttar Pradesh";
$sn[39] = "&weather=Almora,Uttarakhand";
$sn[40] = "&weather=Aalanavara,Karnataka";
$sn[41] = "&weather=Along,Arunachal Pradesh";
$sn[42] = "&weather=Alur,Karnataka";
$sn[43] = "&weather=Alwar,Rajasthan";
$sn[44] = "&weather=Amadalavalasa,Andhra Pradesh";
$sn[45] = "&weather=Amalapuram,Andhra Pradesh";
$sn[46] = "&weather=Amalner,Maharashtra";
$sn[47] = "&weather=Amarpur,Bihar";
$sn[48] = "&weather=Ambad,Maharashtra";
$sn[49] = "&weather=Ambagarh Chowki,Chhattisgarh";
$sn[50] = "&weather=Ambaji,Gujrat";
$sn[51] = "&weather=Ambaliyasan,Gujrat";
$sn[52] = "&weather=Ambejogai,Maharashtra";
$sn[53] = "&weather=Ambikaanagara,Karnataka";
$sn[54] = "&weather=Ambikapur,Chhattisgarh";
$sn[55] = "&weather=Ambivali Tarf Wankhal,Maharashtra";
$sn[56] = "&weather=Amguri,Assam";
$sn[57] = "&weather=Amini,Lakshadweep";
$sn[58] = "&weather=Amlabad,Jharkhand";
$sn[59] = "&weather=Amli,Dadra and Nagar Haveli";
$sn[60] = "&weather=Amravati,Maharashtra";
$sn[61] = "&weather=Amreli,Gujarat";
$sn[62] = "&weather=Amritsar,Punjab";
$sn[63] = "&weather=Amroha,Uttar Pradesh";
$sn[64] = "&weather=Anakapalle,Andhra Pradesh";
$sn[65] = "&weather=Anand,Gujarat";
$sn[66] = "&weather=Anandapur,Orissa";
$sn[67] = "&weather=Anandnagaar,Assam";
$sn[68] = "&weather=Anantapur,Andhra Pradesh";
$sn[69] = "&weather=Anantnag,Jammu and Kashmir";
$sn[70] = "&weather=Ancharakandy,Kerala";
$sn[71] = "&weather=Andada,Gujrat";
$sn[72] = "&weather=Anekal,Karnataka";
$sn[73] = "&weather=Ankola,Karnataka";
$sn[74] = "&weather=Anjar,Gujrat";
$sn[75] = "&weather=Anjangaon,Maharashtra";
$sn[76] = "&weather=Anklav,Gujrat";
$sn[77] = "&weather=Ankleshwar,Gujarat";
$sn[78] = "&weather=Annigeri,Karnataka";
$sn[79] = "&weather=Antaliya,Gujrat";
$sn[80] = "&weather=Anugul,Orissa";
$sn[81] = "&weather=Ara,Jharkhand";
$sn[82] = "&weather=Arambhada,Gujrat";
$sn[83] = "&weather=Arakkonam,Tamil Nadu";
$sn[84] = "&weather=Araria,Bihar";
$sn[85] = "&weather=Arang,Chhattisgarh";
$sn[86] = "&weather=Arambagh,West Bengal";
$sn[87] = "&weather=Arsikere,Karnataka";
 include ('xmltoarray.php');

for($r = 0; $r <= 87; $r++) {
$url = "http://www.google.com/ig/api?";
  $url = $url.$sn[$r];



//echo $url;
//$url = "http://www.google.com/ig/api?weather=tirunelveli&weather=nagercoil&weather=trivandrum";



$contents = file_get_contents($url);
$result = xml2array($contents);

//print_r($result);

  

echo $result ['xml_api_reply']['weather'][0]['forecast_information']['city_attr']['data']."<br/>";
echo $result ['xml_api_reply']['weather'][0]['current_conditions']['condition_attr']['data']."<br/>";
echo $result ['xml_api_reply']['weather'][0]['current_conditions']['temp_f_attr']['data']."<br/>";

$hum = explode(" ",$result ['xml_api_reply']['weather'][0]['current_conditions']['humidity_attr']['data']);
$wind = explode(" ",$result ['xml_api_reply']['weather'][0]['current_conditions']['wind_condition_attr']['data']);

echo $hum[1]."<br/>";
echo $wind[1].":".$wind[3]."<br/>";
}

?>

