<?PHP

$file_handle = fopen("/financials/ADANI POWER balancesheet.csv", "rb");
$c = 0;
while (!feof($file_handle) ) {

$line_of_text = fgets($file_handle);
$parts = explode(',', $line_of_text);

$data[0][$c] = $parts[0];
$data[1][$c] = $parts[1];
$data[2][$c] = $parts[2];

$data[3][$c] = $parts[3];

$data[4][$c] = $parts[4];

$data[5][$c] = $parts[5];


$c++;
}
fclose($file_handle);
$c--;
print_r($data);
/*
echo "<table border=\"1\" align=\"left\">";
echo "<tr><th>NAME</th>";
echo "<th>Y5</th>";
echo "<th>Y4</th>";
echo "<th>Y3</th>";
echo "<th>Y2</th>";
echo "<th>Y1</th></tr>";

for ( $i = 0; $i <= $c; $i++ ) {

echo "<tr><td>";
echo $data[0][$i];
echo "</td><td>";
echo $data[1][$i];
echo "</td><td>";


echo $data[2][$i];
echo "</td><td>";
echo $data[3][$i];
echo "</td><td>";
echo $data[4][$i];
echo "</td><td>";
echo $data[5][$i];
echo "</td></tr>";
 
}
echo "</table>";
*/
?>