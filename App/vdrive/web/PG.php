<?php
$quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=NYSE:PG');
$avgp = "66.85"; 
$high = "66.89";
$low = "66.82";
 $json = str_replace("\n", "", $quote);
  $data = substr($json, 4, strlen($json) -5);
  $json_output = json_decode($data, true);
  echo "&L=".$json_output['l']."&"; 
$temp = file_get_contents("PGTEMP.txt", "r");
  

if ($json_output['l'] != $temp ) {
if ( $json_output['l'] > $temp ) { 
if ( ($json_output['l'] > ($avgp + $high)/2) && ($json_output['l'] < $high)) { echo "&sign=au" ; }
 
if ( ($json_output['l'] < ($avgp + $low)/2) && ($json_output['l'] > $low)) { echo "&sign=ad" ; }

if ( $json_output['l'] < ($low - (($avgp - $low)/2)) ) { echo "&sign=as" ; }

if ( $json_output['l'] > ($high + (($high - $avgp)/2)) ) { echo "&sign=al" ; } 
 
 if ( ($json_output['l'] < ($high + (($high - $avgp)/2))) && ($json_output['l'] > $high)) { echo "&sign=auu" ; }

if ( ($json_output['l'] > ($low - (($avgp - $low)/2))) && ($json_output['l'] < $low)) { echo "&sign=add" ; } 

}
if ( $json_output['l'] < $temp ) { 
 if ( ($json_output['l'] > ($avgp + $high)/2) && ($json_output['l'] < $high)) { echo "&sign=bu" ; }

if ( ($json_output['l'] < ($avgp + $low)/2) && ($json_output['l'] > $low)) { echo "&sign=bd" ; }

if ( $json_output['l'] < ($low - (($avgp - $low)/2)) ) { echo "&sign=bs" ; }

if ( $json_output['l'] > ($high + (($high - $avgp)/2)) ) { echo "&sign=bl" ; } 

 if ( ($json_output['l'] < ($high + (($high - $avgp)/2))) && ($json_output['l'] > $high)) { echo "&sign=buu" ; }

if ( ($json_output['l'] > ($low - (($avgp - $low)/2))) && ($json_output['l'] < $low)) { echo "&sign=bdd" ; }
 
 }
$filename= 'PG.txt'; 
$file = fopen($filename, "a+" );

fwrite( $file, $json_output['l']."\r\n" ); 

fclose( $file ); 


if (($json_output['l'] > $high ) && ($temp<= $high ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
          $filedash = fopen("alert.txt", "a+");
            $wrote = fputs($filedash, "PG:". "breaking_P_HIGH_at". $high. "_by_". $time. "\r\n");
		fclose( $filedash );
		
			
     }   


if (($json_output['l'] < $high ) && ($temp>= $high ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
     
         $filedash = fopen("alert.txt", "a+");
             $wrote = fputs($filedash, "PG:". "retracing_P_HIGH_at". $high."_by_". $time. "\r\n");
		fclose( $filedash );
   
     }   

if (($json_output['l'] < $low ) && ($temp>= $low ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
     $filedash = fopen("alert.txt", "a+");
         $wrote = fputs($filedash, "PG:". "breaking_P_LOW_at". $json_output['l']. "_by_". $time. "\r\n");
		fclose( $filedash );
     }   

if (($json_output['l'] > $low ) && ($temp<= $low ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
    $filedash = fopen("alert.txt", "a+");
     $wrote = fputs($filedash, "PG:". "retracing_P_LOW_at". $json_output['l']. "_by_". $time. "\r\n");
	fclose( $filedash );
     }   

if (($json_output['l'] > $avgp ) && ($temp<= $avgp ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
     $filedash = fopen("alert.txt", "a+");
     $wrote = fputs($filedash, "PG:". "sliding_above_P_AVG_at". $json_output['l']. "_by_". $time. "\r\n");
	fclose( $filedash );
     }   

if (($json_output['l'] < $avgp ) && ($temp>= $avgp ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
     $filedash = fopen("alert.txt", "a+");
        $wrote = fputs($filedash, "PG:". "Sliding_below_P_AVG_at". $json_output['l']. "_by_". $time. "\r\n");
	fclose( $filedash );	 
     }   
}
$filedash = fopen("PGTEMP.txt", "w");
        $wrote = fputs($filedash,  $json_output['l']);
	fclose( $filedash );

//echo "&chg=".$json_output['cp']."&"; 
?>
