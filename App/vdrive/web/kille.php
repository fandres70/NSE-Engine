/*Owner & Copyrights: Vance King Saxbe. A.*//*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['ICICIBANK'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:ICICIBANK');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&ICICIBANK=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'ICICIBANK.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['SBIN'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:SBIN');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&SBIN=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'SBIN.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['HDFCBANK'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:HDFCBANK');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&HDFCBANK=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'HDFCBANK.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['KOTAKBANK'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:KOTAKBANK');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&KOTAKBANK=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'KOTAKBANK.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['AXISBANK'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:AXISBANK');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&AXISBANK=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'AXISBANK.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['PNB'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:PNB');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&PNB=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'PNB.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['BANKBARODA'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:BANKBARODA');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&BANKBARODA=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'BANKBARODA.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['BANKINDIA'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:BANKINDIA');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&BANKINDIA=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'BANKINDIA.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['YESBANK'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:YESBANK');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&YESBANK=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'YESBANK.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['VIJAYABANK'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:VIJAYABANK');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&VIJAYABANK=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'VIJAYABANK.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['DENABANK'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:DENABANK');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&DENABANK=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'DENABANK.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['ALBK'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:ALBK');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&ALBK=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'ALBK.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['KTKBANK'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:KTKBANK');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&KTKBANK=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'KTKBANK.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['DHANBANK'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:DHANBANK');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&DHANBANK=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'DHANBANK.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['DCB'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:DCB');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&DCB=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'DCB.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['ANDHRABANK'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:ANDHRABANK');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&ANDHRABANK=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'ANDHRABANK.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['INDIANB'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:INDIANB');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&INDIANB=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'INDIANB.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['UCOBANK'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:UCOBANK');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&UCOBANK=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'UCOBANK.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['UNIONBANK'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:UNIONBANK');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&UNIONBANK=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'UNIONBANK.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['SRTRANSFIN'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:SRTRANSFIN');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&SRTRANSFIN=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'SRTRANSFIN.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['LICHSGFIN'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:LICHSGFIN');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&LICHSGFIN=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'LICHSGFIN.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['IOB'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:IOB');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&IOB=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'IOB.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['SYNDIBANK'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:SYNDIBANK');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&SYNDIBANK=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'SYNDIBANK.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['CANBK'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:CANBK');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&CANBK=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'CANBK.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['FEDERALBNK'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:FEDERALBNK');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&FEDERALBNK=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'FEDERALBNK.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['HDFC'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:HDFC');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&HDFC=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'HDFC.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['IDFC'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:IDFC');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&IDFC=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'IDFC.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['IDBI'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:IDBI');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&IDBI=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'IDBI.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['IFCI'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:IFCI');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&IFCI=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'IFCI.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['RELCAPITAL'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:RELCAPITAL');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&RELCAPITAL=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'RELCAPITAL.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['INDIAINFO'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:INDIAINFO');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&INDIAINFO=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'INDIAINFO.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['PFC'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:PFC');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&PFC=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'PFC.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['TATAMOTORS'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:TATAMOTORS');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&TATAMOTORS=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'TATAMOTORS.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['BAJAJ-AUTO'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:BAJAJ-AUTO');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&BAJAJ-AUTO=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'BAJAJ-AUTO.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['MARUTI'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:MARUTI');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&MARUTI=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'MARUTI.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['HEROMOTOCO'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:HEROMOTOCO');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&HEROMOTOCO=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'HEROMOTOCO.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['ASHOKLEY'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:ASHOKLEY');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&ASHOKLEY=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'ASHOKLEY.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['ESCORTS'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:ESCORTS');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&ESCORTS=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'ESCORTS.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['TVSMOTOR'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:TVSMOTOR');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&TVSMOTOR=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'TVSMOTOR.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['BHARATFORG'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:BHARATFORG');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&BHARATFORG=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'BHARATFORG.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['APOLLOTYRE'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:APOLLOTYRE');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&APOLLOTYRE=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'APOLLOTYRE.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['MRF'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:MRF');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&MRF=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'MRF.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['BOSCHLTD'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:BOSCHLTD');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&BOSCHLTD=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'BOSCHLTD.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['EXIDEIND'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:EXIDEIND');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&EXIDEIND=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'EXIDEIND.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['DLF'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:DLF');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&DLF=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'DLF.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['UNITECH'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:UNITECH');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&UNITECH=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'UNITECH.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['HDIL'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:HDIL');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&HDIL=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'HDIL.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['HCC'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:HCC');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&HCC=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'HCC.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['NCC'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:NCC');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&NCC=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'NCC.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['IBREALEST'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:IBREALEST');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&IBREALEST=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'IBREALEST.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['GODREJIND'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:GODREJIND');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&GODREJIND=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'GODREJIND.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['SOBHA'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:SOBHA');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&SOBHA=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'SOBHA.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['JPASSOCIAT'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:JPASSOCIAT');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&JPASSOCIAT=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'JPASSOCIAT.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['APIL'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:APIL');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&APIL=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'APIL.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['LITL'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:LITL');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&LITL=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'LITL.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['GMRINFRA'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:GMRINFRA');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&GMRINFRA=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'GMRINFRA.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['IVRCLINFRA'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:IVRCLINFRA');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&IVRCLINFRA=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'IVRCLINFRA.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['RELIANCE'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:RELIANCE');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&RELIANCE=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'RELIANCE.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['ONGC'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:ONGC');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&ONGC=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'ONGC.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['GSPL'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:GSPL');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&GSPL=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'GSPL.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['PETRONET'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:PETRONET');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&PETRONET=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'PETRONET.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['MRPL'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:MRPL');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&MRPL=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'MRPL.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['ABAN'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:ABAN');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&ABAN=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'ABAN.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['GAIL'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:GAIL');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&GAIL=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'GAIL.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['BPCL'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:BPCL');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&BPCL=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'BPCL.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['HINDPETRO'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:HINDPETRO');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&HINDPETRO=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'HINDPETRO.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['OIL'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:OIL');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&OIL=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'OIL.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['HINDOILEXP'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:HINDOILEXP');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&HINDOILEXP=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'HINDOILEXP.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['ESSAROIL'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:ESSAROIL');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&ESSAROIL=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'ESSAROIL.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['IOC'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:IOC');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&IOC=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'IOC.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['COALINDIA'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:COALINDIA');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&COALINDIA=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'COALINDIA.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['CAIRN'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:CAIRN');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&CAIRN=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'CAIRN.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['TATASTEEL'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:TATASTEEL');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&TATASTEEL=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'TATASTEEL.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['SAIL'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:SAIL');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&SAIL=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'SAIL.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['HINDALCO'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:HINDALCO');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&HINDALCO=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'HINDALCO.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['STER'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:STER');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&STER=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'STER.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['JSWSTEEL'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:JSWSTEEL');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&JSWSTEEL=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'JSWSTEEL.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['JINDALSTEL'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:JINDALSTEL');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&JINDALSTEL=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'JINDALSTEL.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['JINDALSAW'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:JINDALSAW');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&JINDALSAW=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'JINDALSAW.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['PUNJLLOYD'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:PUNJLLOYD');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&PUNJLLOYD=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'PUNJLLOYD.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['BHUSANSTL'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:BHUSANSTL');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&BHUSANSTL=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'BHUSANSTL.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['SESAGOA'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:SESAGOA');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&SESAGOA=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'SESAGOA.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['JSWISPAT'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:JSWISPAT');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&JSWISPAT=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'JSWISPAT.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['WELCORP'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:WELCORP');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&WELCORP=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'WELCORP.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['JSWISPAT'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:JSWISPAT');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&JSWISPAT=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'JSWISPAT.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['GMDCLTD'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:GMDCLTD');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&GMDCLTD=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'GMDCLTD.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['MERCATOR'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:MERCATOR');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&MERCATOR=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'MERCATOR.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['INFY'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:INFY');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&INFY=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'INFY.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['TCS'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:TCS');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&TCS=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'TCS.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['WIPRO'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:WIPRO');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&WIPRO=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'WIPRO.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['PATNI'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:PATNI');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&PATNI=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'PATNI.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['HCLTECH'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:HCLTECH');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&HCLTECH=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'HCLTECH.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['TECHM'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:TECHM');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&TECHM=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'TECHM.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['POLARIS'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:POLARIS');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&POLARIS=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'POLARIS.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['MPHASIS'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:MPHASIS');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&MPHASIS=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'MPHASIS.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['OFSS'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:OFSS');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&OFSS=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'OFSS.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['FINANTECH'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:FINANTECH');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&FINANTECH=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'FINANTECH.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['ROLTA'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:ROLTA');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&ROLTA=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'ROLTA.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['HEXAWARE'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:HEXAWARE');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&HEXAWARE=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'HEXAWARE.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['EDUCOMP'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:EDUCOMP');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&EDUCOMP=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'EDUCOMP.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['COREEDUTEC'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:COREEDUTEC');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&COREEDUTEC=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'COREEDUTEC.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['LT'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:LT');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&LT=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'LT.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['BHEL'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:BHEL');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&BHEL=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'BHEL.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['ABB'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:ABB');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&ABB=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'ABB.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['SIEMENS'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:SIEMENS');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&SIEMENS=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'SIEMENS.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['CROMPGREAV'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:CROMPGREAV');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&CROMPGREAV=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'CROMPGREAV.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['VOLTAS'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:VOLTAS');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&VOLTAS=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'VOLTAS.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['VIDEOIND'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:VIDEOIND');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&VIDEOIND=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'VIDEOIND.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['BEL'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:BEL');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&BEL=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'BEL.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['BEML'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:BEML');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&BEML=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'BEML.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['ACC'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:ACC');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&ACC=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'ACC.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['AMBUJACEM'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:AMBUJACEM');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&AMBUJACEM=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'AMBUJACEM.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['GRASIM'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:GRASIM');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&GRASIM=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'GRASIM.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['INDIACEM'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:INDIACEM');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&INDIACEM=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'INDIACEM.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['ULTRACEMCO'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:ULTRACEMCO');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&ULTRACEMCO=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'ULTRACEMCO.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['ASIANPAINT'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:ASIANPAINT');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&ASIANPAINT=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'ASIANPAINT.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['BHARTIARTL'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:BHARTIARTL');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&BHARTIARTL=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'BHARTIARTL.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['RCOM'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:RCOM');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&RCOM=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'RCOM.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['IDEA'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:IDEA');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&IDEA=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'IDEA.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['ONMOBILE'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:ONMOBILE');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&ONMOBILE=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'ONMOBILE.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['MTNL'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:MTNL');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&MTNL=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'MTNL.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['TTML'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:TTML');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&TTML=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'TTML.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['TATACOMM'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:TATACOMM');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&TATACOMM=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'TATACOMM.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['ITC'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:ITC');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&ITC=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'ITC.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['HINDUNILVR'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:HINDUNILVR');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&HINDUNILVR=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'HINDUNILVR.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['DABUR'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:DABUR');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&DABUR=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'DABUR.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['COLPAL'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:COLPAL');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&COLPAL=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'COLPAL.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['MCLEODRUSS'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:MCLEODRUSS');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&MCLEODRUSS=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'MCLEODRUSS.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['MCDOWELL-N'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:MCDOWELL-N');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&MCDOWELL-N=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'MCDOWELL-N.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['BATAINDIA'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:BATAINDIA');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&BATAINDIA=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'BATAINDIA.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['RELINFRA'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:RELINFRA');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&RELINFRA=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'RELINFRA.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['RPOWER'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:RPOWER');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&RPOWER=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'RPOWER.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['TATAPOWER'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:TATAPOWER');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&TATAPOWER=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'TATAPOWER.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['POWERGRID'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:POWERGRID');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&POWERGRID=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'POWERGRID.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['NTPC'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:NTPC');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&NTPC=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'NTPC.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['JPPOWER'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:JPPOWER');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&JPPOWER=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'JPPOWER.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['GVKPIL'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:GVKPIL');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&GVKPIL=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'GVKPIL.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['BGRENERGY'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:BGRENERGY');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&BGRENERGY=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'BGRENERGY.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['ADANIENT'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:ADANIENT');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&ADANIENT=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'ADANIENT.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['ADANIPOWER'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:ADANIPOWER');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&ADANIPOWER=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'ADANIPOWER.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['BFUTILITIE'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:BFUTILITIE');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&BFUTILITIE=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'BFUTILITIE.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['HAVELLS'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:HAVELLS');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&HAVELLS=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'HAVELLS.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['JSWENERGY'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:JSWENERGY');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&JSWENERGY=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'JSWENERGY.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['NHPC'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:NHPC');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&NHPC=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'NHPC.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['NMDC'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:NMDC');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&NMDC=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'NMDC.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['RECLTD'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:RECLTD');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&RECLTD=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'RECLTD.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['CUMMINSIND'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:CUMMINSIND');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&CUMMINSIND=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'CUMMINSIND.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['PTC'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:PTC');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&PTC=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'PTC.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['BALRAMCHIN'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:BALRAMCHIN');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&BALRAMCHIN=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'BALRAMCHIN.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['BAJAJHIND'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:BAJAJHIND');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&BAJAJHIND=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'BAJAJHIND.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['RENUKA'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:RENUKA');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&RENUKA=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'RENUKA.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['CHAMBLFERT'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:CHAMBLFERT');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&CHAMBLFERT=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'CHAMBLFERT.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['TATACHEM'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:TATACHEM');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&TATACHEM=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'TATACHEM.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['ORCHIDCHEM'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:ORCHIDCHEM');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&ORCHIDCHEM=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'ORCHIDCHEM.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['UNIPHOS'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:UNIPHOS');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&UNIPHOS=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'UNIPHOS.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['GUJFLUORO'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:GUJFLUORO');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&GUJFLUORO=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'GUJFLUORO.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['SCI'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:SCI');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&SCI=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'SCI.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['GESHIP'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:GESHIP');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&GESHIP=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'GESHIP.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['ABGSHIP'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:ABGSHIP');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&ABGSHIP=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'ABGSHIP.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['JETAIRWAYS'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:JETAIRWAYS');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&JETAIRWAYS=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'JETAIRWAYS.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['INDHOTEL'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:INDHOTEL');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&INDHOTEL=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'INDHOTEL.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['SUNTV'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:SUNTV');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&SUNTV=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'SUNTV.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['DISHTV'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:DISHTV');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&DISHTV=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'DISHTV.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['ZEEL'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:ZEEL');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&ZEEL=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'ZEEL.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['SUNPHARMA'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:SUNPHARMA');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&SUNPHARMA=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'SUNPHARMA.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['CIPLA'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:CIPLA');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&CIPLA=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'CIPLA.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['RANBAXY'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:RANBAXY');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&RANBAXY=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'RANBAXY.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['DRREDDY'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:DRREDDY');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&DRREDDY=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'DRREDDY.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['FORTIS'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:FORTIS');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&FORTIS=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'FORTIS.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['BIOCON'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:BIOCON');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&BIOCON=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'BIOCON.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['AUROPHARMA'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:AUROPHARMA');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&AUROPHARMA=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'AUROPHARMA.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['PIRHEALTH'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:PIRHEALTH');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&PIRHEALTH=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'PIRHEALTH.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['LUPIN'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:LUPIN');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&LUPIN=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'LUPIN.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['GLAXO'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:GLAXO');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&GLAXO=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'GLAXO.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['DIVISLAB'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:DIVISLAB');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&DIVISLAB=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'DIVISLAB.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['OPTOCIRCUI'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:OPTOCIRCUI');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&OPTOCIRCUI=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'OPTOCIRCUI.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  $temp = $_POST['JUBLFOOD'];

  
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NSE:JUBLFOOD');
  
  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  
  $json_output = json_decode($data, true);
  
  
  
  echo "&JUBLFOOD=".$json_output['l']."&"; 



if ($json_output['l'] != $temp ) {



$filename= 'JUBLFOOD.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );



fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 
}
?>
/*email to provide support at vancekingsaxbe@powerdominionenterprise.com, businessaffairs@powerdominionenterprise.com, For donations please write to fundraising@powerdominionenterprise.com*/