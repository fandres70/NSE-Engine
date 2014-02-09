<?php
for ($i = 1; $i<=150; $i++ ) {
$jkl = file_get_contents("tab.php");

$jkl = explode('src=', $jkl );

$jkll = explode('.swf', $jkl[$i] );
echo $jkll[0];
}
?>