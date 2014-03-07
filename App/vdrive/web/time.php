/*Owner & Copyrights: Vance King Saxbe. A.*//*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/
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
?>/*email to provide support at vancekingsaxbe@powerdominionenterprise.com, businessaffairs@powerdominionenterprise.com, For donations please write to fundraising@powerdominionenterprise.com*/