/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/
for ($i = 1; $i<=150; $i++ ) {
$jkl = file_get_contents("tab.php");

$jkl = explode('src=', $jkl );

$jkll = explode('.swf', $jkl[$i] );
echo $jkll[0];
}
?>