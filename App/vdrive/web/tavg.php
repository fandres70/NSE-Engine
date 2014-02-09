<?PHP

$file_handle = fopen("icicibank.txt", "rb");
$c = 0;
while (!feof($file_handle) ) {

$line_of_text = fgets($file_handle);
$parts = explode('=', $line_of_text);

$tc[$c] = $parts[0];


$c++;
}
$c--;
$c--;
echo $tc[$c];
$a = 0;
for ( $i = 0; $i <= $c; $i++ ) {
$a =$a + $tc[$c];

// echo "&a".$i."=".$tc[$c];
 
$c--;
}
$a = $a/$i;
echo $a;
fclose($file_handle);

?>