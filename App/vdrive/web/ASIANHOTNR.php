/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/
$json_output['l'] = file_get_contents('ASIANHOTNRLAST.TXT');
$avgp = "193.02"; 
$high = "202.4";
$low = "182.55";
$oic = "";
$dlv = "";
 
  echo "&L=".$json_output['l']."&N=ASIANHOTNR&"; 
$temp = file_get_contents("ASIANHOTNRTEMP.txt", "r");
  

if ($json_output['l'] != $temp ) {





$mhigh = ($avgp + $high)/2;
$mlow = ($avgp + $low)/2;
$llow = ($low - (($avgp - $low)/2));
$hhigh = ($high + (($high - $avgp)/2));
$diff = $json_output['l'] - $temp ;
if ( $json_output['l'] > $temp ) { 
if ( ($json_output['l'] > $mhigh ) && ($json_output['l'] < $high)) { echo "&sign=au" ; }
if ( ($json_output['l'] < $mlow ) && ($json_output['l'] > $low)) { echo "&sign=ad" ; }
if ( $json_output['l'] < $llow ) { echo "&sign=as" ; }
if ( $json_output['l'] > $hhigh ) { echo "&sign=al" ; } 
 if ( ($json_output['l'] < $hhigh) && ($json_output['l'] > $high)) { echo "&sign=auu" ; }
if ( ($json_output['l'] > $llow) && ($json_output['l'] < $low)) { echo "&sign=add" ; }
//else { echo "&sign=a" ; } 
/*
if( $json_output['l']%($temp*0.05) == 0 ) {
$filedish = fopen("malert.txt", "a+");
            $write = fputs($filedish, "ASIANHOTNR:".$json_output['l']. ":Moving up:".$diff.":".$high.":".$low.":".$avgp.":".$oic.":".$dlv."\r\n");

		fclose( $filedish );
}
*/
}
if ( $json_output['l'] < $temp ) { 
 if ( ($json_output['l'] >$mhigh) && ($json_output['l'] < $high)) { echo "&sign=bu" ; }
if ( ($json_output['l'] < $mlow) && ($json_output['l'] > $low)) { echo "&sign=bd" ; }
if ( $json_output['l'] < $llow ) { echo "&sign=bs" ; }
if ( $json_output['l'] > $hhigh ) { echo "&sign=bl" ; } 
 if ( ($json_output['l'] < $hhigh) && ($json_output['l'] > $high)) { echo "&sign=buu" ; }
if ( ($json_output['l'] > $llow) && ($json_output['l'] < $low)) { echo "&sign=bdd" ; }
// else { echo "&sign=b" ; }
/*
if( $json_output['l']%($temp*0.05) == 0 ) {
 $filedish = fopen("malert.txt", "a+");
            $write = fputs($filedish, "ASIANHOTNR:".$json_output['l']. ":Moving down:".$diff.":".$high.":".$low.":".$avgp.":".$oic.":".$dlv."\r\n");
		fclose( $filedish );}
*/
}
$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
$filename= 'ASIANHOTNR.txt'; 
$file = fopen($filename, "a+" );

fwrite( $file, $json_output['l'].":".$time."\r\n" ); 

fclose( $file ); 

if (($json_output['l'] > $mhigh ) && ($temp<= $mhigh ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
$risk = ($json_output['l'] - $low) * (200000/$json_output['l']);
$risk = (int)$risk;
          $filedash = fopen("alert.txt", "a+");
            $wrote = fputs($filedash, "ASIANHOTNR:".$json_output['l']. ":Approaching:PHIGH:".$high.":Buy Cost:".$risk.":".$oic.":".$dlv."\r\n");
		fclose( $filedash );
		
			
     }   
if (($json_output['l'] < $mhigh ) && ($temp>= $mhigh ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;
$risk = ($high - $json_output['l']) * (200000/$json_output['l']);
$risk = (int)$risk;
$time = date('h:i:s',$new_time);
     $filedash = fopen("alert.txt", "a+");
         $wrote = fputs($filedash, "ASIANHOTNR:". $json_output['l'].":Moving Down:PHIGH:".$high.":short Cost:".$risk.":".$oic.":".$dlv."\r\n");
		fclose( $filedash );
     }   
if (($json_output['l'] > $mlow ) && ($temp<= $mlow ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
$risk = ($json_output['l'] - $low) * (200000/$json_output['l']);
$risk = (int)$risk;
          $filedash = fopen("alert.txt", "a+");
            $wrote = fputs($filedash, "ASIANHOTNR:".$json_output['l']. ":Moving Up:PLOW:".$low.":Buy Cost:".$risk.":".$oic.":".$dlv."\r\n");
		fclose( $filedash );
		
			
     }   
if (($json_output['l'] < $mlow ) && ($temp>= $mlow ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;
$risk = ($high - $json_output['l']) * (200000/$json_output['l']);
$risk = (int)$risk;
$time = date('h:i:s',$new_time);
     $filedash = fopen("alert.txt", "a+");
         $wrote = fputs($filedash, "ASIANHOTNR:". $json_output['l'].":Approaching:PLOW:".$low.":short Cost:".$risk.":".$oic.":".$dlv."\r\n");
		fclose( $filedash );
     }   
if (($json_output['l'] > $high ) && ($temp<= $high ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
$risk = ($json_output['l'] - $low) * (200000/$json_output['l']);
$risk = (int)$risk;
          $filedash = fopen("alert.txt", "a+");
            $wrote = fputs($filedash, "ASIANHOTNR:".$json_output['l']. ":Breaking:PHIGH:".$high.":Buy Cost:".$risk.":".$oic.":".$dlv."\r\n");
		fclose( $filedash );
		
			
     }   
if (($json_output['l'] > $hhigh ) && ($temp<= $hhigh ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
$risk = ($json_output['l'] - $low) * (200000/$json_output['l']);
$risk = (int)$risk;
          $filedash = fopen("alert.txt", "a+");
            $wrote = fputs($filedash, "ASIANHOTNR:".$json_output['l']. ":Moving Beyond:PHIGH:".$high.":Buy Cost:".$risk.":".$oic.":".$dlv."\r\n");
		fclose( $filedash );
		
			
     }   
if (($json_output['l'] < $hhigh ) && ($temp>= $hhigh ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
     
         $filedash = fopen("alert.txt", "a+");
             $wrote = fputs($filedash, "ASIANHOTNR:". $json_output['l']. ":Coming near:PHIGH:".$high.":Buy Cost:".$risk.":".$oic.":".$dlv."\r\n");
		fclose( $filedash );
   
     }   
if (($json_output['l'] < $high ) && ($temp>= $high ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
     
         $filedash = fopen("alert.txt", "a+");
             $wrote = fputs($filedash, "ASIANHOTNR:". $json_output['l']. ":Retracing:PHIGH:".$high.":".$oic.":".$dlv."\r\n");
		fclose( $filedash );
   
     }   
if (($json_output['l'] < $llow ) && ($temp>= $llow ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;
$risk = ($high - $json_output['l']) * (200000/$json_output['l']);
$risk = (int)$risk;
$time = date('h:i:s',$new_time);
     $filedash = fopen("alert.txt", "a+");
         $wrote = fputs($filedash, "ASIANHOTNR:". $json_output['l'].":Breaking Beyond:PLOW:".$low.":short Cost:".$risk.":".$oic.":".$dlv."\r\n");
		fclose( $filedash );
     }   
if (($json_output['l'] < $low ) && ($temp>= $low ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;
$risk = ($high - $json_output['l']) * (200000/$json_output['l']);
$risk = (int)$risk;
$time = date('h:i:s',$new_time);
     $filedash = fopen("alert.txt", "a+");
         $wrote = fputs($filedash, "ASIANHOTNR:". $json_output['l'].":Breaking:PLOW:".$low.":short Cost:".$risk.":".$oic.":".$dlv."\r\n");
		fclose( $filedash );
     }   
if (($json_output['l'] > $llow ) && ($temp<= $llow ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
    $filedash = fopen("alert.txt", "a+");
     $wrote = fputs($filedash, "ASIANHOTNR:". $json_output['l'].":Coming near:PLOW:".$low.":short Cost:".$risk.":".$oic.":".$dlv."\r\n");
	fclose( $filedash );
     }   
if (($json_output['l'] > $low ) && ($temp<= $low ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
    $filedash = fopen("alert.txt", "a+");
     $wrote = fputs($filedash, "ASIANHOTNR:". $json_output['l'].":Retracing:PLOW:".$low.":".$oic.":".$dlv."\r\n");
	fclose( $filedash );
     }   

if (($json_output['l'] > $avgp ) && ($temp<= $avgp ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;
$risk = ($json_output['l'] - $low) * (200000/$json_output['l']);
$risk = (int)$risk;
$avgp = number_format($avgp, 2, '.', '');
$time = date('h:i:s',$new_time);
     $filedash = fopen("alert.txt", "a+");
     $wrote = fputs($filedash, "ASIANHOTNR:".$json_output['l']. ":Sliding up:PAVG:".$avgp.":Buy Cost:".$risk.":".$oic.":".$dlv."\r\n");
	fclose( $filedash );
     }   

if (($json_output['l'] < $avgp ) && ($temp>= $avgp ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;
$risk = ($high - $json_output['l']) * (200000/$json_output['l']);
$risk = (int)$risk;
$avgp = number_format($avgp, 2, '.', '');
$time = date('h:i:s',$new_time);
     $filedash = fopen("alert.txt", "a+");
        $wrote = fputs($filedash, "ASIANHOTNR:".$json_output['l']. ":Sliding down:PAVG:".$avgp.":Short Cost:".$risk.":".$oic.":".$dlv."\r\n");
	fclose( $filedash );	 
     }   
}
$filedash = fopen("ASIANHOTNRTEMP.txt", "w");
        $wrote = fputs($filedash,  $json_output['l']);
	fclose( $filedash );

//echo "&chg=".$json_output['cp']."&"; 
?>
