/*Owner & Copyrights: Vance King Saxbe. A.*//*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/
$quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NYSE:IBM');
$avgp = "199.95"; 
$high = "200.23";
$low = "199.5";

  $json = str_replace("\n", "", $quote);
  
  //Remove //, [ and ] to build qualified string  
  $data = substr($json, 4, strlen($json) -5);
    
  //decode JSON data
  $json_output = json_decode($data, true);

$temp = $_POST['IBM'];
  
  if ( $json_output['l'] > $temp ) { echo "&signal=u" ; }

if ( $json_output['l'] < $temp ) { echo "&signal=d" ; }
 if ( ($json_output['l'] > ($avgp + $high)/2) && ($json_output['l'] < $high)) { echo "&sign=u" ; }
if ( ($json_output['l'] < ($avgp + $low)/2) && ($json_output['l'] > $low)) { echo "&sign=d" ; }
if ( $json_output['l'] < ($low - (($avgp - $low)/2)) ) { echo "&sign=s" ; }
if ( $json_output['l'] > ($high + (($high - $avgp)/2)) ) { echo "&sign=l" ; } 
 if ( ($json_output['l'] < ($high + (($high - $avgp)/2))) && ($json_output['l'] > $high)) { echo "&sign=uu" ; }
if ( ($json_output['l'] > ($low - (($avgp - $low)/2))) && ($json_output['l'] < $low)) { echo "&sign=dd" ; }
 
  //Output Stock price array key.
  echo "&IBM=".$json_output['l']."&"; 

if ($json_output['l'] != $temp ) {

$filename= 'IBM.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );

fwrite( $file, $json_output['l']."\r\n" ); //Write the data input box to the .txt file.

fclose( $file ); //Close the file from further editing
}

if (($json_output['l'] > $high ) && ($temp<= $high ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
          $filedash = fopen("alert.txt", "a+");
            $wrote = fputs($filedash, "IBM:". "breaking_P_HIGH_at". $high. "_by_". $time. "\r\n");
		fclose( $filedash );
		
			
     }   


if (($json_output['l'] < $high ) && ($temp>= $high ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
     
         $filedash = fopen("alert.txt", "a+");
             $wrote = fputs($filedash, "IBM:". "retracing_P_HIGH_at". $high."_by_". $time. "\r\n");
		fclose( $filedash );
   
     }   

if (($json_output['l'] < $low ) && ($temp>= $low ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
     $filedash = fopen("alert.txt", "a+");
         $wrote = fputs($filedash, "IBM:". "breaking_P_LOW_at". $json_output['l']. "_by_". $time. "\r\n");
		fclose( $filedash );
     }   

if (($json_output['l'] > $low ) && ($temp<= $low ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
    $filedash = fopen("alert.txt", "a+");
     $wrote = fputs($filedash, "IBM:". "retracing_P_LOW_at". $json_output['l']. "_by_". $time. "\r\n");
	fclose( $filedash );
     }   

if (($json_output['l'] > $avgp ) && ($temp<= $avgp ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
     $filedash = fopen("alert.txt", "a+");
     $wrote = fputs($filedash, "IBM:". "sliding_above_P_AVG_at". $json_output['l']. "_by_". $time. "\r\n");
	fclose( $filedash );
     }   

if (($json_output['l'] < $avgp ) && ($temp>= $avgp ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
     $filedash = fopen("alert.txt", "a+");
        $wrote = fputs($filedash, "IBM:". "Sliding_below_P_AVG_at". $json_output['l']. "_by_". $time. "\r\n");
	fclose( $filedash );	 
     }   

?>
/*email to provide support at vancekingsaxbe@powerdominionenterprise.com, businessaffairs@powerdominionenterprise.com, For donations please write to fundraising@powerdominionenterprise.com*/