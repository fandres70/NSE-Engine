/*Owner & Copyrights: Vance King Saxbe. A.*/<?PHP
  
$u[0] = "http://www.bloomberg.com/news/canada/";
$u[1] = "http://www.bloomberg.com/news/india-pakistan/";
$u[2] = "http://www.bloomberg.com/news/us/";
$u[3] = "http://www.bloomberg.com/news/china/";
$u[4] = "http://www.bloomberg.com/news/asia/";
$u[5] = "http://www.bloomberg.com/news/uk-ireland/";
$u[6] = "http://www.bloomberg.com/news/australia-newzealand/";
$u[7] = "http://www.bloomberg.com/news/latin-america/";
$u[8] = "http://www.bloomberg.com/news/japan/";
$u[9] = "http://www.bloomberg.com/news/africa/";
$u[10] = "http://www.bloomberg.com/news/eastern-europe/";
$u[11] = "http://www.bloomberg.com/news/france/";
$u[12] = "http://www.bloomberg.com/news/italy/";
$u[13] = "http://www.bloomberg.com/news/europe/";
$u[14] = "http://www.bloomberg.com/news/middle-east/";



for ( $i = 0; $i <= 14; $i++ ) {



  $url = $u[$i];
  $input = @file_get_contents($url) or die("Could not access file: $url");
  $regexp = "<a\s[^>]*href=(\"??)([^\" >]*?)\\1[^>]*>(.*)<\/a>";
  if(preg_match_all("/$regexp/siU", $input, $matches, PREG_SET_ORDER)) {
    foreach($matches as $match) {
      // $match[2] = link address
      // $match[3] = link text

 if (($match[2][strlen($match[2])-1] == "l" ) && ($match[2][0] == "/" )) {
  $ctts = "http://www.bloomberg.com".$match[2];
$file_handle = fopen("blive.txt", "rb");
$c = 0;
$d = 0;
while (!feof($file_handle) ) {

$line_of_text = fgets($file_handle);
$parts = explode('=', $line_of_text);

if ( $parts[0] == $ctts ) 
{ $d = $d + 10;
}
$d++;
$c++;

}
if ( $d == $c ) { 



$filename= 'blive.txt'; //The name of your .txt file
$file = fopen($filename, "a+" );


fwrite( $file, $ctts."\r\n" ); //Write the data input box to the .txt file.

fclose( $file );





}

//echo "link1=".$match[2]."</BR>";
}
  
}}}
?>/*email to provide support at vancekingsaxbe@powerdominionenterprise.com, businessaffairs@powerdominionenterprise.com, For donations please write to fundraising@powerdominionenterprise.com*/