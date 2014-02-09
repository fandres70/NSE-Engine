<?php
$range = strtotime("15:30:00") - strtotime("09:15:00");

//echo $range;
$my_time = date('h:i:s',time());
//echo $my_time;

$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
$open = strtotime("09:15:00");
//echo ;
$p = $new_time - $open;
$q = (strtotime("15:30:00") - strtotime("09:15:00"));
$r = $p/$q;
echo $p."</br>";
echo $q."</br>";
echo $r."</br>";
?>